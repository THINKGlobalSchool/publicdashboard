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
	
	// Register CSS
	$pd_css = elgg_get_simplecache_url('css', 'publicdashboard/css');
	elgg_register_simplecache_view('css/publicdashboard/css');
	elgg_register_css('elgg.publicdashboard', $pd_css);
	
	$g_css = elgg_get_simplecache_url('css', 'publicdashboard/galleriffic');
	elgg_register_simplecache_view('css/publicdashboard/galleriffic');
	elgg_register_css('elgg.publicdashboard.galleriffic', $g_css);
	
	// Register JS
	$pd_js = elgg_get_simplecache_url('js', 'publicdashboard/publicdashboard');
	elgg_register_simplecache_view('js/publicdashboard/publicdashboard');
	elgg_register_js('elgg.publicdashboard', $pd_js);
	
	// Register JS for galleriffic
	$g_js = elgg_get_simplecache_url('js', 'galleriffic');
	elgg_register_simplecache_view('js/galleriffic');
	elgg_register_js('jquery.galleriffic', $g_js);
	
	// Register JS for opacity rollover
	$or_js = elgg_get_simplecache_url('js', 'opacityrollover');
	elgg_register_simplecache_view('js/opacityrollover');
	elgg_register_js('jquery.opacityrollover', $or_js);
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

	// Load CSS
	elgg_load_css('elgg.publicdashboard');
	elgg_load_css('elgg.publicdashboard.galleriffic');

	$params['content'] = elgg_view('publicdashboard/latest_blogs');
	$params['content'] .= elgg_view('publicdashboard/latest_photos');
	$params['content'] .= elgg_view('publicdashboard/latest_videos');
	$params['sidebar'] = elgg_view('publicdashboard/sidebar');
	
	// Push context
	elgg_push_context('publicdashboard');
	
	$body = elgg_view_layout('one_sidebar', $params);
	echo elgg_view_page(null, $body);	
	return TRUE;
}
