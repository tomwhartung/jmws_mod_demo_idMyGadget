<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_demo_idmygadget
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>


<div class="custom<?php echo $moduleclass_sfx ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> >
	<?php echo $module->content;?>
	<?php
		//
		// Get the uri of the current page and remove anything after '?'
		//
		$uriRaw = & JFactory::getURI();
		$strposQuestionMark = strpos( $uriRaw, '?' );
		if ( $strposQuestionMark > 0 )
		{
			$uriClean = substr( $uriRaw, 0, $strposQuestionMark );
		}
		else
		{
			$uriClean = $uriRaw;
		}
		//
		// Create the anchor tags
		//
		global $jmwsIdMyGadget;
		$anchorTextPhone = "Phone View";
		$anchorTextTablet = "Tablet View";
		$anchorTextDesktop = "Desktop View";
		$anchorHtmlPhone =
			'<a href="' . $uriClean . '?gadgetType=phone" title="' . $anchorTextPhone . '">' .
				$anchorTextPhone . '</a>';
		$anchorHtmlTablet =
			'<a href="' . $uriClean . '?gadgetType=tablet" title="' . $anchorTextTablet . '">' .
				$anchorTextTablet . '</a>';
		$anchorHtmlDesktop =
			'<a href="' . $uriClean . '?gadgetType=desktop" title="' . $anchorTextDesktop . '">' .
				$anchorTextDesktop . '</a>';
		if ( $jmwsIdMyGadget->isPhone() )
		{
			$anchorHtmlPhone = '<span>' . $anchorTextPhone . '</span>';
		}
		elseif ( $jmwsIdMyGadget->isTablet() )
		{
			$anchorHtmlTablet = '<span>' . $anchorTextTablet . '</span>';
		}
		else
		{
			$anchorHtmlDesktop = '<span>' . $anchorTextDesktop . '</span>';
		}
		//
		// Debug code:
		// print '<p>$uriRaw: ' . $uriRaw . '</p>';
		// print '<p>$strposQuestionMark: ' . $strposQuestionMark . '</p>';
		// print '<p>$uriClean: ' . $uriClean . '</p>';
	?>
	<ul>
		<li><?php print $anchorHtmlPhone; ?></li>
		<li><?php print $anchorHtmlTablet; ?></li>
		<li><?php print $anchorHtmlDesktop; ?></li>
		<li><a href="<?php print $uriClean . '?gadgetType=unknown'; ?>" title="Detect Device">
			Detect Device</a></li>
	</ul>
</div>
