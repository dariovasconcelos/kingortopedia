<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme https://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   https://www.gnu.org/licenses/gpl.html GNU/GPL
*/

/*
	Class: WarpMenuPre
		Menu base class
*/
class WarpMenuPre extends WarpMenu {

	/*
		Function: process

		Returns:
			Object
	*/	
	public function process($module, $element) {
		return $element;
	}

}