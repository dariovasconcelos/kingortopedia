<?php
/**
* @package   Widgetkit
* @author    YOOtheme https://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   https://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<div>

	<div class="row">
        <?php echo $this->app->html->_('control.text', $this->getControlName('file'), $this->get('file'), 'class="image-select" size="60" style="width:200px;margin-right:5px;" title="'.JText::_('File').'"'); ?>
    </div>

	<div class="more-options">

		<div class="trigger">
			<div>
				<div class="spotlight button"><?php echo JText::_('Spotlight'); ?></div>
				<div class="lightbox button"><?php echo JText::_('Lightbox'); ?></div>
				<div class="link button"><?php echo JText::_('Link'); ?></div>
				<div class="title button"><?php echo JText::_('Title'); ?></div>
			</div>
		</div>

		<div class="title options">

			<div class="row">
				<?php echo $this->app->html->_('control.text', $this->getControlName('title'), $this->get('title'), 'maxlength="255" title="'.JText::_('Title').'" placeholder="'.JText::_('Title').'"'); ?>
			</div>

		</div>

		<div class="link options">

			<div class="row">
				<?php echo $this->app->html->_('control.text', $this->getControlName('link'), $this->get('link'), 'size="60" maxlength="255" title="'.JText::_('Link').'" placeholder="'.JText::_('Link').'"'); ?>
			</div>

			<div class="row">
				<strong><?php echo JText::_('New window'); ?></strong>
				<?php echo $this->app->html->_('select.booleanlist', $this->getControlName('target'), $this->get('target'), $this->get('target')); ?>
			</div>

			<div class="row">
				<?php echo $this->app->html->_('control.text', $this->getControlName('rel'), $this->get('rel'), 'size="60" maxlength="255" title="'.JText::_('Lightbox').'" placeholder="'.JText::_('Lightbox').'"'); ?>
			</div>

		</div>

		<div class="lightbox options">

			<div class="row">
				<?php echo $this->app->html->_('control.text', $this->getControlName('lightbox_image'), $this->get('lightbox_image'), 'class="image-select" size="60" style="width:200px;margin-right:5px;" title="'.JText::_('Lightbox image').'"'); ?>
			</div>

		</div>

		<div class="spotlight options">
			<div class="row">
				<?php echo $this->app->html->_('control.arraylist', array(
					'' => 'None',
					'default' => 'Default',
					'top' => 'Top',
					'bottom' => 'Bottom',
					'left' => 'Left',
					'right' => 'Right',
					'fade' => 'Fade'
				), array(), $this->getControlName('spotlight_effect'), null, 'value', 'text', $this->get('spotlight_effect')); ?>
			</div>

			<div class="row">
				<?php echo $this->app->html->_('control.text', $this->getControlName('caption'), $this->get('caption'), 'size="60" style="width:200px;margin-right:5px;" title="'.JText::_('Caption').'" placeholder="'.JText::_('Caption').'"'); ?>
			</div>

		</div>
	</div>
</div>