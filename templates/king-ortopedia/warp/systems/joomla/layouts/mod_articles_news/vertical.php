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

<?php if (count($list) > 0) : ?>
	<ul class="newsflash line">
		<?php for ($i = 0, $n = count($list); $i < $n; $i ++) : ?>
		<?php $item = $list[$i]; ?>
		<li class="item <?php if ($i == $n - 1) echo 'last'; ?>">
			<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
		</li>
		<?php endfor; ?>
	</ul>
<?php endif;