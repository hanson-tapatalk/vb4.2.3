<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin Blog 4.2.3 Patch Level 2 - Licence Number VBF83FEF44
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2000-2019 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/

// ######################## SET PHP ENVIRONMENT ###########################
error_reporting(E_ALL & ~E_NOTICE);
if (!is_object($vbulletin->db))
{
	exit;
}

if ($vbulletin->options['mailqueue'])
{
	exec_mail_queue();
}

log_cron_action('', $nextitem, 1);

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 05:02, Mon May 6th 2019
|| # CVS: $Revision: 25612 $
|| ####################################################################
\*======================================================================*/
