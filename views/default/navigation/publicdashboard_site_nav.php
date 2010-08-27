<?php
	/**
	 * Public Dashboard Custom Header
	 * 
	 * @package Public Dashboard
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Jeff Tilson
	 * @copyright THINK Global School 2010
	 * @link http://www.thinkglobalschool.com/
	 */

	global $CONFIG;

	$home->name = 'Spot Home';
	$home->value->url = $CONFIG->url;
	$home->value->context = 'main';
	
	$blog->name = 'Blogs';
	$blog->value->url = $CONFIG->url . 'pg/blog';
	$blog->value->context = 'blog';
	
	$photos->name = 'Photos';
	$photos->value->url = $CONFIG->url . 'pg/photos/world';
	$photos->value->context = 'tidypics';
	
	// Not implemented... yet..
	$videos->name = 'Videos';
	$videos->value->url = $CONFIG->url . '';
	$videos->value->context = 'Videos';

	$parent_nav = array($home, $blog, $photos);

	$nav_html = '';
	$context = get_context();

	$item_count = 0;

	// if there are no featured items, display the standard tools in alphabetical order
	if ($parent_nav) {
		foreach ($parent_nav as $info) {
			$selected = ($info->value->context == $context) ? 'class="selected"' : '';
			$title = htmlentities($info->name, ENT_QUOTES, 'UTF-8');
			$url = htmlentities($info->value->url, ENT_QUOTES, 'UTF-8');

			$nav_html .= "<li $selected><a href=\"$url\" title=\"$title\"><span>$title</span></a></li>";
		}
	} 

	// only display, if there are nav items to display
	if ($nav_html) {
		echo <<<___END
		<div id="elgg_main_nav" class="clearfloat">
			<ul class="navigation">
				$nav_html
			</ul>
		</div>
___END;
	}
?>
