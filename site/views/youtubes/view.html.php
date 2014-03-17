<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_youtubes
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/**
 * HTML View class for the Youtubes component
 *
 * @package     Joomla.Site
 * @subpackage  com_youtubes
 * @since       3.2
 */
class YoutubesViewYoutubes extends JViewLegacy {

	public function display($tpl = null) {
		$app = JFactory::getApplication();
		$this->items = $this->get('Items');
		$document = JFactory::getDocument();

		JHtml::stylesheet(JUri::base() . 'media/com_youtubes/css/youtubes.css');
		JHtml::_('jquery.framework');
		JHtml::script(JUri::base() . "media/com_youtubes/js/jcarousel.min.js");
		if (count($this->items) > 1) {
			JHtml::script(JUri::base() . "media/com_youtubes/js/youtubes.js");
		}
		$params = $app->getParams();
		$this->rwd = (bool) $params->get('rwd', 0);
		$this->color_nav = $params->get('color_nav');
		if (!empty($this->color_nav)) {
			$style = <<<STYLE
				.you .nav.arrow-left {
					border-right: 65px solid {$this->color_nav};
				}
				.you .nav.arrow-right {
					border-left: 65px solid {$this->color_nav};
				}
STYLE;
			$document->addStyleDeclaration($style);
		}
		
		$this->color_nav_hover = $params->get('color_nav_hover', '#0044CC');
		if (!empty($this->color_nav_hover)) {
			$style = <<<STYLE
				.you .jcarousel-control-next:hover .arrow-right {
					border-left-color: {$this->color_nav_hover};
				}

				.you .jcarousel-control-prev:hover .arrow-left {
					border-right-color: {$this->color_nav_hover};
				}
STYLE;
			$document->addStyleDeclaration($style);
		}
		
		$this->desktop_iframe_width = $params->get('desktop_iframe_width', 700);
		$this->desktop_iframe_height = $params->get('desktop_iframe_height', 394);
		
		// Check for layout override
		$active = JFactory::getApplication()->getMenu()->getActive();

		if (isset($active->query['layout'])) {
			$this->setLayout($active->query['layout']);
		}

		if ($this->rwd) {
			$this->setLayout('rwd');
		}

		// Escape strings for HTML output
		$this->pageclass_sfx = htmlspecialchars($params->get('pageclass_sfx'));
		$this->params = &$params;

		$this->_setTitle();

		parent::display($tpl);
	}

	protected function _setTitle() {

		$app = JFactory::getApplication();
		$title = $this->params->get('page_title', '');

		if (empty($title)) {
			$title = $app->getCfg('sitename');
		} elseif ($app->getCfg('sitename_pagetitles', 0) == 1) {
			$title = JText::sprintf('JPAGETITLE', $app->getCfg('sitename'), $title);
		} elseif ($app->getCfg('sitename_pagetitles', 0) == 2) {
			$title = JText::sprintf('JPAGETITLE', $title, $app->getCfg('sitename'));
		}
		$this->document->setTitle($title);
	}

}
