<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.3 Patch Level 2 - Licence Number VBF83FEF44
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2000-2019 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/
if (!VB_API) die;

$VB_API_WHITELIST = array(
	'response' => array(
		'checked', 'disablesmiliesoption', 'forumrules', 'polldate',
		'pollnewbits', 'polloptions', 'pollpreview', 'question',
		'threadinfo' => $VB_API_WHITELIST_COMMON['threadinfo'],
		'timeout'
	)
);
function api_result_prerender_2($t, &$r)
{
	switch ($t)
	{
		case 'newpoll':
			$r['polldate'] = TIMENOW;
			break;
	}
}

vB_APICallback::instance()->add('result_prerender', 'api_result_prerender_2', 2);

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 05:02, Mon May 6th 2019
|| # CVS: $RCSfile$ - $Revision: 35584 $
|| ####################################################################
\*======================================================================*/