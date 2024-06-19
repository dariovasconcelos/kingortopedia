<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme https://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   https://www.gnu.org/licenses/gpl.html GNU/GPL
*/

foreach ($node->children('option') as $option) {

	// set attributes
	$attributes = array('type' => 'radio', 'name' => $name, 'value' => $option->attr('value'));
	
	// is checked ?
	if ($option->attr('value') == $value) {
		$attributes = array_merge($attributes, array('checked' => 'checked'));
	}
	
	printf('<input %s /> %s ', $control->attributes($attributes), $option->text());
}