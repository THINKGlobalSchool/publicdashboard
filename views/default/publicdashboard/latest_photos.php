<?php
/**
 * Public Dashboard Latest Photos View
 * 
 * @package Public Dashboard
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010
 * @link http://www.thinkglobalschool.com/
 */

$header = elgg_echo('publicdashboard:latestphotos');

$photos = elgg_get_entities(array('type' => 'object', 'subtype' => 'image', 'limit' => 30));

if (!count($photos)) {
	$photos_content = elgg_echo('publicdashboard:nophotos');
} else {
	elgg_load_js('jquery.galleriffic');
	elgg_load_js('jquery.opacityrollover');
	elgg_load_js('elgg.publicdashboard');
	$photos_content = elgg_view('publicdashboard/gallery', array('id' => 'photo-list', 'photos' => $photos));
}

echo elgg_view_module('aside', $header, $photos_content);
