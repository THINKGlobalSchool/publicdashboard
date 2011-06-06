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
$photos_content = elgg_view('publicdashboard/gallery', array('id' => 'photo-list', 'photos' => $photos));

echo elgg_view_module('main', $header, $photos_content);
