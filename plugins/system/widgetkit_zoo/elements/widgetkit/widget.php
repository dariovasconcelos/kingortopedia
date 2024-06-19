<?php
/**
* @package   Widgetkit
* @author    YOOtheme https://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   https://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// load widgetkit
require_once(JPATH_ADMINISTRATOR.'/components/com_widgetkit/widgetkit.php');

// get widgetkit
$widgetkit = Widgetkit::getInstance();

echo $widgetkit['field']->render('widget', $control_name.'['.$name.']', $value, null);