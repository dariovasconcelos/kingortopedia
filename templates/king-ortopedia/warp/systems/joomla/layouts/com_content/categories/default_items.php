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

<?php if (count($this->items[$this->parent->id]) > 0 && $this->maxLevelcat != 0) : ?>
<ul>
	<?php foreach($this->items[$this->parent->id] as $id => $item) : ?>
		<?php if ($this->params->get('show_empty_categories_cat') || $item->numitems || count($item->getChildren())) : ?>
		<li>
			<a href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute($item->id));?>"><?php echo $this->escape($item->title); ?></a>
			
			<?php if ($this->params->get('show_cat_num_articles_cat') == 1) :?>
			<small>(<?php echo $item->numitems; ?>)</small>
			<?php endif; ?>
			
			<?php if (($this->params->get('show_subcat_desc_cat') == 1) && $item->description) : ?>
			<div><?php echo JHtml::_('content.prepare', $item->description, '', 'com_content.categories'); ?></div>
			<?php endif; ?>
	
			<?php
				if (count($item->getChildren()) > 0) {
					$this->items[$item->id] = $item->getChildren();
					$this->parent = $item;
					$this->maxLevelcat--;
					echo $this->loadTemplate('items');
					$this->parent = $item->getParent();
					$this->maxLevelcat++;
				}
			?>
		</li>
		<?php endif; ?>
	<?php endforeach; ?>
</ul>
<?php endif;