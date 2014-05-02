<?php
/**
 * Public Dashboard Latest Blogs View
 * 
 * @package Public Dashboard
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010
 * @link http://www.thinkglobalschool.com/
 */

$header = elgg_echo('publicdashboard:latestblogs');

$blogs = elgg_list_entities(array('type' => 'object', 'subtype' => 'blog', 'limit' => 5, 'full_view' => false, 'pagination' => FALSE));

if (!$blogs) {
	$blogs = elgg_echo('publicdashboard:noblogs');
}

echo elgg_view_module('aside', $header, $blogs);
