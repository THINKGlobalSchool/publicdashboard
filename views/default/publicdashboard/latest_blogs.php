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
	
	$header = elgg_view_title(elgg_echo('publicdashboard:latestblogs'));
	
	$blogs = elgg_list_entities(array('type' => 'object', 'subtype' =>' blog', 'limit' => 5, 'full_view' => false, 'pagination' => FALSE));
	
	echo "<div class='publicdashboard'>
			<div class='latest-container'>
				$header $blogs
			</div>
		</div>";
?>