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

// ######################## SET PHP ENVIRONMENT ###########################
error_reporting(E_ALL & ~E_NOTICE);

define('VB_AREA', 'Install');
define('VBINSTALL', true);
define('VB_ENTRY', 'install.php');

if (in_array($_REQUEST['version'], array('', 'install')) AND (!$_REQUEST['step'] OR $_REQUEST['step'] <= 2))
{
	define('SKIPDB', true);
}

require_once('./upgrade.php');

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 05:02, Mon May 6th 2019
|| # CVS: $RCSfile$ - $Revision: 39243 $
|| ####################################################################
\*======================================================================*/
