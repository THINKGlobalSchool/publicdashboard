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
<div>
    <label><?php echo elgg_echo('publicdashboard:introcontenttitletitle'); ?></label><br />
    <?php 
	echo elgg_view('input/text', array(
										'name' => 'params[introcontenttitle]', 
										'value' => $vars['entity']->introcontenttitle)
										); 
	?>
</div>
<div>
    <label><?php echo elgg_echo('publicdashboard:introcontenttitle'); ?></label><br />
    <?php 
	echo elgg_view('input/plaintext', array(
										'name' => 'params[introcontent]', 
										'value' => $vars['entity']->introcontent)
										); 
	?>
</div>
<div>
    <label><?php echo elgg_echo('publicdashboard:statstitle'); ?></label><br />
    <?php 
	echo elgg_view('input/text', array(
										'name' => 'params[statstitle]', 
										'value' => $vars['entity']->statstitle)
										); 
	?>
</div>
<div>
    <label><?php echo elgg_echo('publicdashboard:publictagthreshold'); ?></label><br />
    <?php 
	echo elgg_view('input/text', array(
										'name' => 'params[tagthreshold]', 
										'value' => $vars['entity']->tagthreshold)
										); 
	?>
</div>
<div>
    <label><?php echo elgg_echo('publicdashboard:publictaglimit'); ?></label><br />
    <?php 
	echo elgg_view('input/text', array(
										'name' => 'params[taglimit]', 
										'value' => $vars['entity']->taglimit)
										); 
	?>
</div>