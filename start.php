<?php
	/**
	 * Public Dashboard start
	 * 
	 * @package Public Dashboard
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Jeff Tilson
	 * @copyright THINK Global School 2010
	 * @link http://www.thinkglobalschool.com/
	 */

	function publicdashboard_init() {
		// Hook to replace regular index
		register_plugin_hook('index','system','publicdashboard_index');
		
		// Extend CSS
		elgg_extend_view('css','publicdashboard/css');
		elgg_extend_view('css','publicdashboard/galleriffic');
		
		// Extend Default page shell 
		elgg_extend_view('page_shells/default', 'page_shells/publicdashboard', 10);

		
		global $CONFIG;

	}

	function publicdashboard_index() {
		// If logged in, forward on
		if (isloggedin()) {
				forward('pg/dashboard/');
		}
		set_context('main');

		$main = elgg_view('publicdashboard/latest_blogs');
		$main .= elgg_view('publicdashboard/latest_photos');
		$main .= elgg_view('publicdashboard/latest_videos');
		
		$sidebar = elgg_view('publicdashboard/public_sidebar');

		$content = elgg_view_layout('one_column_with_sidebar', $main, $sidebar);
		page_draw(null, $content, 'page_shells/publicdashboard');
		return true;
	}

	register_elgg_event_handler('init','system','publicdashboard_init');
?>