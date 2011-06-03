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
$intro_header = elgg_view_title(get_plugin_setting('introcontenttitle', 'publicdashboard'));
$intro_content = get_plugin_setting('introcontent', 'publicdashboard');

// Stats content
$stats_header = elgg_view_title(get_plugin_setting('statstitle', 'publicdashboard'));
$stats_content = elgg_view('publicdashboard/site_stats');

// Public Tags content
set_context('tags');
$tags_content = elgg_view_tagcloud(array(
										'threshold' => get_plugin_setting('tagthreshold', 'publicdashboard'), 
										'limit' => get_plugin_setting('taglimit', 'publicdashboard')
										));
set_context($context);

if ($tags_content) {
	$tags_header = elgg_view_title(elgg_echo('publicdashboard:tagcloud'));
	$context = get_context();
}

$content = <<<HTML
	<div class='publicdashboard'>
		<div class='sidebar'>
			$intro_header 
			<div class='introcontent'>
				$intro_content
			</div>
			$stats_header
			<div class='spotstats'> 
				$stats_content
			</div>
			$tags_header
			<div class='tagcloud'>
				$tags_content
			</div>
		</div>
	 </div>
HTML;

echo $content;