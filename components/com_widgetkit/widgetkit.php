<?php
/**
* @package   Widgetkit
* @author    YOOtheme https://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   https://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// load widgetkit
if (JFile::exists(JPATH_ADMINISTRATOR.'/components/com_widgetkit/widgetkit.php') && isset($_GET["id"]) && is_numeric($_GET["id"])) {
	require_once(JPATH_ADMINISTRATOR.'/components/com_widgetkit/widgetkit.php');

	echo $widgetkit["widget"]->render($_GET["id"]);
}