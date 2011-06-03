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

elgg_register_event_handler('init','system','publicdashboard_init');

function publicdashboard_init() {
	// Hook to replace regular index
	elgg_register_plugin_hook_handler('index','system', 'publicdashboard_index');
	
	// Extend CSS
	//elgg_extend_view('css/screen','publicdashboard/css');
	//elgg_extend_view('css/screen','publicdashboard/galleriffic');
	
	
	// @TODO Don't show 'public' on dashboard
}

/**
 * Plugin hook to display custom public dashboard
 *
 * @param unknown_type $hook
 * @param unknown_type $type
 * @param unknown_type $value
 * @param unknown_type $params
 * @return unknown
 */
function publicdashboard_index($hook, $type, $value, $params) {
	// If logged in, do nothing
	if (elgg_is_logged_in()) {	
		return $value;
	}

	elgg_set_context('publicdashboard');
	
	$params['content'] = elgg_view('publicdashboard/latest_blogs');
	$params['content'] .= elgg_view('publicdashboard/latest_photos');
	$params['content'] .= elgg_view('publicdashboard/latest_videos');
	
	$params['sidebar'] = elgg_view('publicdashboard/public_sidebar');
	
	$body = elgg_view_layout('one_sidebar', $params);
	echo elgg_view_page(null, $body);	
	return true;
}
