<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.3 Patch Level 2 - Licence Number VBF83FEF44
|| # ---------------------------------------------------------------- # ||
|| # Copyright ©2000-2019 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/
if (!VB_API) die;

loadCommonWhiteList();

$VB_API_WHITELIST = array(
	'response' => array(
		'albuminfo' => array(
			'albumid', 'title', 'description'
		),
		'errortable',
		'formdata' => array(
			'albumid', 'title', 'description', 'state', 'userid'
		),
		'userinfo' => array(
			'userid', 'username'
		)
	),
	'show' => array(
		'delete_option', 'album_used_in_css', 'albumtype_profile'
	)
);

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 05:02, Mon May 6th 2019
|| # CVS: $RCSfile$ - $Revision: 35584 $
|| ####################################################################
\*======================================================================*/