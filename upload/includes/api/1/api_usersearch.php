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
if (!VB_API) die;

class vB_APIMethod_api_usersearch extends vBI_APIMethod
{
	public function output()
	{
		global $vbulletin, $db;

		$vbulletin->input->clean_array_gpc('p', array('fragment' => TYPE_STR));

		$vbulletin->GPC['fragment'] = convert_urlencoded_unicode($vbulletin->GPC['fragment']);

		if ($vbulletin->GPC['fragment'] != '' AND strlen($vbulletin->GPC['fragment']) >= 3)
		{
			$fragment = htmlspecialchars_uni($vbulletin->GPC['fragment']);
		}
		else
		{
			$fragment = '';
		}

		if ($fragment != '')
		{
			$users = $db->query_read_slave("
				SELECT user.userid, user.username FROM " . TABLE_PREFIX . "user
				AS user WHERE username LIKE('" . $db->escape_string_like($fragment) . "%')
				ORDER BY username
				LIMIT 15
			");
			while ($user = $db->fetch_array($users))
			{
				$data[$user['userid']] = $user['username'];
			}
		}

		return $data;

	}
}

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 05:02, Mon May 6th 2019
|| # CVS: $RCSfile$ - $Revision: 26995 $
|| ####################################################################
\*======================================================================*/