<?php
/**
* @package   Warp Theme Framework
* @author    YOOtheme https://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   https://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die;

?>

<?php foreach ($list as $item) :?>
	<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
<?php endforeach;