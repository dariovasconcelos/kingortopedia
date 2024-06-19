<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme https://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   https://www.gnu.org/licenses/gpl.html GNU/GPL
*/

printf('<textarea %s>%s</textarea>', $control->attributes(array_merge($node->attr(), compact('name')), array('label', 'description', 'default')), htmlspecialchars($value));