# --------------------------------------------------------
# Table structure for table `pphl_css`
# --------------------------------------------------------
#
# $Id: pphl_css.sql,v 1.21 2002/05/04 16:40:45 cvs_iezzi Exp $

CREATE TABLE pphl_css (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  userid int(5) unsigned NOT NULL default '0',
  css varchar(200) NOT NULL default '',
  color_standard varchar(30) NOT NULL default '000000',
  color_1 varchar(30) NOT NULL default '000000',
  color_1t varchar(30) NOT NULL default '000000',
  color_1a varchar(30) NOT NULL default '000000',
  color_2 varchar(30) NOT NULL default '000000',
  color_2t varchar(30) NOT NULL default '000000',
  color_2a varchar(30) NOT NULL default '000000',
  color_3 varchar(30) NOT NULL default '000000',
  color_3t varchar(30) NOT NULL default '000000',
  color_3a varchar(30) NOT NULL default '000000',
  color_bg varchar(30) NOT NULL default '000000',
  color_a varchar(30) NOT NULL default '000000',
  color_a_hover varchar(30) NOT NULL default '000000',
  color_inv varchar(30) NOT NULL default '000000',
  color_inv_hover varchar(30) NOT NULL default '000000',
  color_form_bg varchar(30) NOT NULL default '000000',
  color_form varchar(30) NOT NULL default '000000',
  color_guestform_bg varchar(30) NOT NULL default '000000',
  color_guestform varchar(30) NOT NULL default '000000',
  color_ref varchar(30) NOT NULL default '000000',
  color_reft varchar(30) NOT NULL default '000000',
  color_vis varchar(30) NOT NULL default '000000',
  color_scrollbar varchar(30) NOT NULL default '000000',
  color_scrollbar_arrow varchar(30) NOT NULL default '000000',
  PRIMARY KEY (id),
  UNIQUE KEY css_ind (userid,css)
);

#
# Dumping data for table `pphl_css`
#

INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'cartesia', '000000', 'FEB343', '000000', 'A84300', 'CCCCCC', '000000', '000000', 'FED79C', '800000', '000000', 'EAE1C7', 'A84300', '000000', 'B38A00', '000000', 'E3E3D7', 'A84300', 'FFFFCC', '800000', 'E3E3D7', '000000', '800000', 'CCCCCC', 'navy');
INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'lila', '000000', 'FFCCFF', '000000', '6600FF', 'B0B0E0', '000000', '000000', 'C89FBC', '6600FF', '000000', 'FFFFFF', '6600FF', '000000', '6600FF', '000000', 'DBC1DC', '6600FF', 'FFCCFF', '000000', 'DBC1DC', '000000', '000000', 'B0B0E0', 'navy');
INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'phloggstyle', '000000', 'EEEEFF', '000000', '006699', 'E0E0E0', '000000', '000000', 'D0D0D0', '000000', '000000', 'F5F5F5', '006699', '000000', '006699', '000000', 'AFDFFF', '006699', 'D0D0D0', '000000', 'EEEEFF', '000000', '000000', 'AFDFFF', 'navy');
INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'phpeestyle', '000000', '99FF00', '000000', '006699', '6ECFFF', '000000', '000000', '00B6B6', 'FFFFFF', '000000', '618992', '006699', '000000', '99FF00', '000000', '99FF00', '006699', '00B6B6', '99FF00', '7FDFFF', '000000', 'FFFFFF', '6ECFFF', 'navy');
INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'pink', '000000', 'FFCCCC', '000000', '006699', 'e0e0e0', '000000', '000000', 'D0D0D0', '000000', '000000', 'CCCCFF', '006699', 'FF0000', '006699', 'FF0000', 'CCCCFF', '006699', 'D0D0D0', '000000', 'CCCCFF', '000000', '000000', 'e0e0e0', 'navy');
INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'sahara', '000000', 'E3E3D7', '000000', '006699', 'CCCCCC', '000000', '000000', 'FFFFCC', '800000', '000000', '729AA3', '006699', '000000', 'E3E3D7', '000000', 'E3E3D7', '800000', 'FFFFCC', '800000', 'E3E3D7', '000000', '800000', 'CCCCCC', 'navy');
INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'metal', '000000', 'D0D1D3', '000000', '5f5f5f', 'E0E0E0', '000000', '000000', 'a0a0a0', '000000', '000000', 'C0C6D3', '5f5f5f', '0000a0', '4f4f4f', '0000a0', 'DDDDDD', '000050', 'AAAAAA', '000044', 'EEEEFF', '000000', '000000', 'C0C6D3', '200080');
INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'mmstyle', '000000', 'CCE2FF', '000000', '336699', 'CCE2FF', '000000', '000000', '9966CC', '000000', '000000', 'CCCCFF', '336699', 'FF0000', '336699', 'FF0000', 'CCCCFF', '336699', 'D0D0D0', '000044', 'CCCCFF', '000000', '000000', '336699', 'FFFFFF');
INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'gentoo', '000000', '45347b', 'FFFFFF', '00ff00', 'ddddff', '000000', '000000', '7a5ada', 'FFFFFF', '00ff00', 'FFFFFF', '7a5ada', '0000a0', '7a5ada', '0000a0', 'bbffbb', '000050', 'AAAAAA', '000044', 'C6F9FF', '000000', '000000', 'bbffbb', '200080');
INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'winamp', '000000', '46505D', 'ffffff', '00ff00', '000000', '00ff00', '00ff00', '949CA5', 'FFFFFF', '00ff00', '31314A', '00ff00', 'ffffff', '00ff00', 'ffffff', '949CA5', 'ffffff', 'ED9A2A', '000044', '23231E', 'ffffff', '000000', '8192A5', '200080');
INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'doggy', 'FFFFFF', '000000', 'FFFFFF', 'FFFFFF', '006A35', 'FFFFFF', 'FFFFFF', '008040', 'FFFFFF', 'FFFFFF', '00974B', 'FFFFFF', 'FFFFFF', 'FFFFFF', 'FFFFFF', '000000', 'FFFFFF', 'FFFFFF', 'FFFFFF', '00A85C', 'FFFFFF', 'FFFFFF', '006A35', '000000');
INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'caits', '000000', 'F0F0FF', '000000', '5f5f5f', 'E0E0E0', '000000', '000000', 'D0D0D0', '000000', '000000', 'F5F5F5', '222250', '6060FF', '6060FF', '222250', 'F0F0F0', '202020', 'F0F0F0', '202020', 'e8e8e8', '000000', '000000', 'F0F0F0', '000000');
INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'iceage', '000000', '6AA1D1', 'FFFFFF', 'CCE6FF', 'CCE6FF', '000000', '000000', '2078a8', 'FFFFFF', 'CCE6FF', '6098C8', '000000', '000000', '000000', '000000', 'AFDFFF', '000000', 'd0d0d0', '000000', 'eeeeff', '000000', 'FFFFFF', 'afdfff', '000000');
INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'xt-design', 'ff9900', '777777', '000000', 'ff9900', '434343', 'c0c0c0', 'ff9900', '2e2e2e', '6d6d6d', 'c0c0c0', '000000', 'ff9900', '0084ff', 'c0c0c0', '0084ff', 'ababab', '2e2e2e', 'FFFFCC', 'ff9900', '585858', '000000', 'ff9900', 'CCCCCC', 'navy');
INSERT INTO pphl_css (userid, css, color_standard,  color_1, color_1t, color_1a, color_2, color_2t, color_2a, color_3, color_3t, color_3a, color_bg, color_a, color_a_hover, color_inv, color_inv_hover, color_form_bg, color_form, color_guestform_bg, color_guestform, color_ref, color_reft, color_vis, color_scrollbar,  color_scrollbar_arrow) VALUES (0, 'tierwaisen', '800000', 'ffcf0f', '800000', 'navy', 'ffff99', '800000', '000000', '800000', 'ffffff', 'ffffff', '9e9e9e', 'navy', 'navy', '800000', '000000', 'E3E3D7', '800000', '800000', '800000', 'E3E3D7', '800000', '800000', 'CCCCCC', 'navy');

