<?php
/**
* @package   yoo_sync
* @author    YOOtheme https://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   https://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// include config and layout
$base = dirname(dirname(__FILE__));
include($base.'/config.php');
include($warp['path']->path('layouts:'.preg_replace('/'.preg_quote($base, '/').'/', '', __FILE__, 1)));