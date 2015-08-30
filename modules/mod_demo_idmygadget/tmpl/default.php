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
		$uriTest = JURI::current();
	?>
	<p>$uriRaw: <?php echo $uriRaw; ?></p>
	<p>$strposQuestionMark: <?php echo $strposQuestionMark; ?></p>
	<p>$uriClean: <?php echo $uriClean; ?></p>
	<p>$uriTest: <?php echo $uriTest; ?></p>
	<ul>
		<li><a href="<?php print $uriClean . '?gadgetType=phone'; ?>" title="Emulate Phone">
			Emulate Phone</a></li>
		<li><a href="<?php print $uriClean . '?gadgetType=tablet'; ?>" title="Emulate Tablet">
			Emulate Tablet</a></li>
		<li><a href="<?php print $uriClean . '?gadgetType=desktop'; ?>" title="Emulate Desktop">
			Emulate Desktop</a></li>
		<li><a href="<?php print $uriClean; ?>" title="Detect Device">
			Detect Device</a></li>
	</ul>
</div>
