<?php
/* ------------------------------------------------------------------------------------------
   delLogs.inc.php
   $Id: delLogs.inc.php,v 1.11 2003/08/18 19:12:27 cvs_iezzi Exp $
   
   just keep the most recent (dellog_lim) logs
   delete all previous logs
   ------------------------------------------------------------------------------------------ */

class LogsCleanUp {
	/**
	* current logs table
	*
	* @var      string    $_tbl
	* @access   private
	*/
	var $_tbl = '';
	var $connected;
	
	/**
	* LogsCleanUp constructor
	*
	* @access   public
	* @return   void
	*/
	function LogsCleanUp($connected) {
		$this->connected = $connected;
	}
	/**
	* Executes the log/path deletion
	*
	* If $uid is set, parameter $user_limits must also get passed!
	*
	* @access   public
	* @param    integer     $uid
	* @param    array       $user_limits    array($limh, $limd, $limh_p, $limd_p)
	* @return   void
	*/
	function execute($uid = 0, $user_limits = '') {
		global $tbl_logs;
		global $limh  , $limd  , $dellog_global , $dellog_lim , $dellog_lim_d , $dellog_lim_prob;
		global $limh_p, $limd_p, $delpath_global, $delpath_lim, $delpath_lim_d, $delpath_lim_prob;
		
		if ($uid != 0) {
			$this->_tbl = PPHL_DB_PREFIX.$uid.$tbl_logs;
			// force deletion (probability = 100%) if userID was specified
			$dellog_lim_prob  = 100;
			$delpath_lim_prob = 100;
		} else {
			$this->_tbl = $tbl_logs;
		}
		if(is_array($user_limits)) {
			$limh   = $user_limits[0];
			$limd   = $user_limits[1];
			$limh_p = $user_limits[2];
			$limd_p = $user_limits[3];
		}
		
		// delete logs
		if($dellog_global) {
			$this->delLogLim($this->_tbl, $dellog_lim, $dellog_lim_d, $dellog_lim_prob);
		} else {
			$this->delLogLim($this->_tbl, $limh      , $limd        , $dellog_lim_prob);
		}
		
		// delete path information
		if($delpath_global) {
			$this->delPathLim($this->_tbl, $delpath_lim, $delpath_lim_d, $delpath_lim_prob);
		} else {
			$this->delPathLim($this->_tbl, $limh_p     , $limd_p       , $delpath_lim_prob);
		}
	}
	/**
	* Delete Logs
	*
	* Just keep the most recent logs, delete all previous
	*
	* @access   public
	* @param    string    $tbl                Logs table
	* @param    integer   $dellog_lim         logs limit by amount of logs
	* @param    integer   $dellog_lim_d       logs limit by days
	* @param    integer   $dellog_lim_prob    logs limit probability
	*/
	function delLogLim ($tbl, $dellog_lim, $dellog_lim_d, $dellog_lim_prob) {
		global $curr_gmt_time;
		
		if ($this->_doDelete($dellog_lim_prob)) {
			/* delete by number of logs */
			if ($dellog_lim > 0) {
				$sql = "SELECT time FROM $tbl ORDER BY time DESC LIMIT $dellog_lim,1";
				$res = mysqli_query($this->connected,$sql);
				$from_time = @mysqli_result($res,0,'time');
				if ($from_time) {
					$sql = "DELETE FROM $tbl WHERE time < $from_time";
					mysqli_query($this->connected,$sql);
				}
				/* MySQL 4 -----------------------------------------------------------------
				
				ORDER BY and using multiple tables in the DELETE is supported in MySQL 4.0. 
				If an ORDER BY clause is used, the rows will be deleted in that order.
				This is really only useful in conjunction with LIMIT. For example: 
				
				DELETE FROM somelog
				WHERE user = 'jcole'
				ORDER BY timestamp
				LIMIT 1
				
				This will delete the oldest entry (by timestamp) where the row matches
				the WHERE clause. 
				
				$sql = "DELETE FROM $tbl ORDER BY time LIMIT $del_rows";
				$res = mysqli_query($this->connected,$sql);
				---------------------------------------------------------------------------- */
			}
			
			/* delete by date */
			if ($dellog_lim_d > 0) {
				$sql = "DELETE FROM $tbl WHERE time < ".($curr_gmt_time-($dellog_lim_d*24*60*60));
				mysqli_query($this->connected,$sql);
			}
		}
	}
	/**
	* Delete visitor paths
	*
	* Just keep the most recent visitor paths, delete all previous
	* (this does not delete any logs, it just deletes the paths to 
	*  avoid huge amount of data.)
	*
	* @access   public
	* @param    string    $tbl                Logs table
	* @param    integer   $delpath_lim        path limit by amount of logs
	* @param    integer   $delpath_lim_d      path limit by days
	* @param    integer   $delpath_lim_prob   path limit probability
	*/
	function delPathLim ($tbl, $delpath_lim, $delpath_lim_d, $delpath_lim_prob) {
		global $curr_gmt_time;
		
		if ($this->_doDelete($delpath_lim_prob)) {
			/* delete by number of logs */
			if ($delpath_lim > 0) {
				$sql = "SELECT time FROM $tbl WHERE path > '' ORDER BY time DESC LIMIT $delpath_lim,1";
				$res = mysqli_query($this->connected,$sql);
				$from_time = @mysqli_result($res,0,'time');
				if ($from_time) {
					$sql = "UPDATE $tbl SET path = NULL WHERE path >= '' AND time < $from_time";
					mysqli_query($this->connected,$sql);
				}
			}
			
			/* delete by date */
			if ($delpath_lim_d > 0) {
				$sql = "UPDATE $tbl SET path = NULL WHERE path >= '' AND time < ".($curr_gmt_time-($delpath_lim_d*24*60*60));
				mysqli_query($this->connected,$sql);
			}
		}
	}
	/**
	* Check probability
	*
	* @access   private
	* @param    integer    $prob    probability in percent
	* @return   boolean
	*/
	function _doDelete($prob) {
		srand(time());
		if ((rand()%100) < $prob) {
			return(TRUE);
		}
		return(FALSE);
	}
}
?>
