<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme https://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   https://www.gnu.org/licenses/gpl.html GNU/GPL
*/

printf('<input %s />', $control->attributes(array_merge($node->attr(), array('type' => 'checkbox', 'name' => $name, 'value' => $value)), array('label', 'description', 'default')));