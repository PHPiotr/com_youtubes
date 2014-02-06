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
		
		JHtml::stylesheet(JUri::base() . 'media/com_youtubes/css/youtubes.css');
		JHtml::_('jquery.framework');
		JHtml::script(JUri::base() . "media/com_youtubes/js/jcarousel.min.js");

		$params = $app->getParams();

		// Check for layout override
		$active = JFactory::getApplication()->getMenu()->getActive();

		if (isset($active->query['layout'])) {
			$this->setLayout($active->query['layout']);
		}

		// Escape strings for HTML output
		$this->pageclass_sfx = htmlspecialchars($params->get('pageclass_sfx'));
		$this->params = &$params;
		$this->items = $this->get('Items');

		parent::display($tpl);
	}
			
	public function getIdFromLink($sLink) {
		$regExp = '/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/';
		preg_match($regExp, $sLink, $match);
		if ($match && strlen($match[2]) == 11) {
			return $match[2];
		} else {
			return null;
		}
	}

}
