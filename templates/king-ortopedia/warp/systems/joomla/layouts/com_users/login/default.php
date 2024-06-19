<?php 
/**
* @package   Warp Theme Framework
* @author    YOOtheme https://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   https://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die;

// logged in ?
echo $this->loadTemplate($this->user->get('guest') ? 'login' : 'logout');