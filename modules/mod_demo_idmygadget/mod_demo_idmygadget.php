<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_demo_idmygadget
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
//
//  Don't do anything unless $jmwsIdMyGadget is set and an object of the correct class
//
global $jmwsIdMyGadget;
if ( isset($jmwsIdMyGadget) )
{
	if ( get_class($jmwsIdMyGadget) === 'JmwsIdMyGadgetJoomla' )
	{
		if ($params->def('prepare_content', 1))
		{
			JPluginHelper::importPlugin('content');
			$module->content = JHtml::_('content.prepare', $module->content, '', 'mod_demo_idmygadget.content');
		}
		$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
		require JModuleHelper::getLayoutPath('mod_demo_idmygadget', $params->get('layout', 'default'));
	}
}
