<?php
	/**
	 * Public Dashboard Settings
	 * 
	 * @package Public Dashboard
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Jeff Tilson
	 * @copyright THINK Global School 2010
	 * @link http://www.thinkglobalschool.com/
	 */
?>
<p>
    <label><?php echo elgg_echo('publicdashboard:introcontenttitletitle'); ?></label><br />
    <?php 
	echo elgg_view('input/text', array(
										'internalname' => 'params[introcontenttitle]', 
										'value' => $vars['entity']->introcontenttitle)
										); 
	?>
</p>
<p>
    <label><?php echo elgg_echo('publicdashboard:introcontenttitle'); ?></label><br />
    <?php 
	echo elgg_view('input/plaintext', array(
										'internalname' => 'params[introcontent]', 
										'value' => $vars['entity']->introcontent)
										); 
	?>
</p>
<p>
    <label><?php echo elgg_echo('publicdashboard:statstitle'); ?></label><br />
    <?php 
	echo elgg_view('input/text', array(
										'internalname' => 'params[statstitle]', 
										'value' => $vars['entity']->statstitle)
										); 
	?>
</p>
<p>
    <label><?php echo elgg_echo('publicdashboard:publictagthreshold'); ?></label><br />
    <?php 
	echo elgg_view('input/text', array(
										'internalname' => 'params[tagthreshold]', 
										'value' => $vars['entity']->tagthreshold)
										); 
	?>
</p>
<p>
    <label><?php echo elgg_echo('publicdashboard:publictaglimit'); ?></label><br />
    <?php 
	echo elgg_view('input/text', array(
										'internalname' => 'params[taglimit]', 
										'value' => $vars['entity']->taglimit)
										); 
	?>
</p>