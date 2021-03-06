<?php

/**
* @package manifest file for Live clock in header
* @version 1.3
* @author Joker (http://www.simplemachines.org/community/index.php?action=profile;u=226111)
* @copyright Copyright (c) 2012, Siddhartha Gupta
* @license http://www.mozilla.org/MPL/MPL-1.1.html
*/

/*
* Version: MPL 1.1
*
* The contents of this file are subject to the Mozilla Public License Version
* 1.1 (the "License"); you may not use this file except in compliance with
* the License. You may obtain a copy of the License at
* http://www.mozilla.org/MPL/
*
* Software distributed under the License is distributed on an "AS IS" basis,
* WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
* for the specific language governing rights and limitations under the
* License.
*
* The Initial Developer of the Original Code is
*  Joker (http://www.simplemachines.org/community/index.php?action=profile;u=226111)
* Portions created by the Initial Developer are Copyright (C) 2012
* the Initial Developer. All Rights Reserved.
*
* Contributor(s):
*
*/

if (!defined('SMF'))
	die('Hacking attempt...');

function LC_addAction(&$actionArray) {
    $actionArray['liveclock'] = array('LiveClock.php', 'LC_mainIndex');
}

function LC_addAdminPanel(&$admin_areas) {
	global $txt;

	loadLanguage('LiveClock');
	loadtemplate('LiveClock');
	$admin_areas['config']['areas']['liveclock'] = array(
		'label' => $txt['lc_admin_menu'],
		'file' => 'LiveClockAdmin.php',
		'function' => 'LiveClockAdminPanel',
		'icon' => 'administration.gif',
		'subsections' => array(),
	);
}

?>