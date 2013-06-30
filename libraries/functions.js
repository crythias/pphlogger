/* $Id: functions.js,v 1.1 2002/03/14 11:14:06 cvs_iezzi Exp $ */


/**
 * Checks/unchecks all tables
 *
 * @param   string   the form name
 * @param   boolean  whether to check or to uncheck the element
 *
 * @return  boolean  always true
 */
function setCheckboxes(the_form, do_check)
{
	var elts      = document.forms[the_form].elements['selected_tbl[]'];
	var elts_cnt  = elts.length;

	for (var i = 0; i < elts_cnt; i++) {
		elts[i].checked = do_check;
	} // end for

	return true;
} // end of the 'setCheckboxes()' function


/**
  * Checks/unchecks all options of a <select> element
  *
  * @param   string   the form name
  * @param   string   the element name
  * @param   boolean  whether to check or to uncheck the element
  *
  * @return  boolean  always true
  */
function setSelectOptions(the_form, the_select, do_check)
{
	var selectObject = document.forms[the_form].elements[the_select];
	var selectCount  = selectObject.length;

	for (var i = 0; i < selectCount; i++) {
		selectObject.options[i].selected = do_check;
	} // end for

	return true;
} // end of the 'setSelectOptions()' function


/**
  * validates the login form
  *
  * @param   string   the form name
  *
  * @return  boolean  always true
  */
function validateForm(the_form)
{
	var md5hash = calcMD5(the_form.pw.value);

	the_form.pw.value = '';
	the_form.md5_pw.value = md5hash;
	
	return true;
}
