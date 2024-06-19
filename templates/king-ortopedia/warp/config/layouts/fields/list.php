<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme https://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   https://www.gnu.org/licenses/gpl.html GNU/GPL
*/

printf('<select %s>', $control->attributes(compact('name')));

foreach ($node->children('option') as $option) {

	// set attributes
	$attributes = array('value' => $option->attr('value'));

	// is checked ?
	if ($option->attr('value') == $value) {
		$attributes = array_merge($attributes, array('selected' => 'selected'));
	}

	printf('<option %s>%s</option>', $control->attributes($attributes), $option->text());
}

printf('</select>');