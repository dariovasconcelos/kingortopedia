<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme https://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   https://www.gnu.org/licenses/gpl.html GNU/GPL
*/

/*
	Class: WarpMenuMobile
		Mobile menu class
*/
class WarpMenuMobile extends WarpMenu {
	
	/*
		Function: process

		Returns:
			Object
	*/	
	public function process($module, $element) {

		// add mobile class
		$element->first('ul:first')->addClass('menu-mobile');

		return $element;
	}

}