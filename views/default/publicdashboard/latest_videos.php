<?php
/**
 * Public Dashboard Latest Videos View
 * 
 * @package Public Dashboard
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010
 * @link http://www.thinkglobalschool.com/
 */

// Register Popup JS
elgg_register_js(elgg_get_site_url() . 'mod/simplekaltura/lib/listing-popup.js', 'video-listing-popup');

$header = elgg_echo('publicdashboard:latestvideos');

$videos = elgg_list_entities(array('type' => 'object', 'subtype' => 'simplekaltura_video', 'limit' => 5, 'full_view' => false, 'pagination' => FALSE));

if (!$videos) {
	$videos = elgg_echo('publicdashboard:novideos');
}

echo elgg_view_module('aside', $header, $videos);