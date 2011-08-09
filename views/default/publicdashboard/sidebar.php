<?php
/**
 * Public Dashboard Public Sidebar View
 * 
 * @package Public Dashboard
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010
 * @link http://www.thinkglobalschool.com/
 */

// Intro content
$intro_header = elgg_get_plugin_setting('introcontenttitle', 'publicdashboard');
$intro_content = elgg_get_plugin_setting('introcontent', 'publicdashboard');

// Stats content
$stats_header = elgg_get_plugin_setting('statstitle', 'publicdashboard');
$stats_content = elgg_view('publicdashboard/site_stats');

// Public Tags content
$tags = elgg_get_tags(array(
	'threshold' => elgg_get_plugin_setting('tagthreshold', 'publicdashboard'), 
	'limit' => elgg_get_plugin_setting('taglimit', 'publicdashboard')
));

// Shuffle tags
shuffle($tags);

$tags_content = elgg_view("output/tagcloud", array('value' => $tags));

if ($tags_content) {
	$tags_header = elgg_echo('publicdashboard:tagcloud');
	$context = elgg_get_context();
	$tags = elgg_view_module('aside', $tags_header, $tags_content);
}

// Display content in modules for consistency 
$intro = elgg_view_module('aside', $intro_header, $intro_content);
$stats = elgg_view_module('aside', $stats_header, $stats_content);

$content = <<<HTML
	<div class='publicdashboard'>
		$intro
		$stats
		$tags
	</div>
HTML;

echo $content;