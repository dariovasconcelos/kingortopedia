<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme https://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   https://www.gnu.org/licenses/gpl.html GNU/GPL
*/

/*
	Class: WarpMenu
		Menu base class
*/
class WarpMenu {

	/*
		Function: process
			Abstract function. New implementation in child classes.

		Returns:
			Object
	*/
	public function process($module, $element) {
		return $element;
	}

}