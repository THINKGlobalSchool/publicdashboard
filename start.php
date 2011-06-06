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
	elgg_register_css('elgg.publicdashboard', $pd_css);
	
	$g_css = elgg_get_simplecache_url('css', 'publicdashboard/galleriffic');
	elgg_register_css('elgg.publicdashboard.galleriffic', $g_css);
	
	// Register JS
	$pd_js = elgg_get_simplecache_url('js', 'publicdashboard/publicdashboard');
	elgg_register_js('elgg.publicdashboard', $pd_js);
	
	// Register simplecache view galleriffic
	elgg_register_simplecache_view('js/galleriffic');
	
	// Register simplecache url for opacityrollover
	elgg_register_simplecache_view('js/opacityrollover');	
	
	// Register JS for galleriffic
	$g_js = elgg_get_simplecache_url('js', 'galleriffic');
	elgg_register_js('jquery.galleriffic', $g_js);
	
	// Register JS for opacity rollover
	$or_js = elgg_get_simplecache_url('js', 'opacityrollover');
	elgg_register_js('jquery.opacityrollover', $or_js);
	
	// Hook to re-work site menu
	elgg_register_plugin_hook_handler('prepare', 'menu:site', 'publicdashboard_site_menu_setup');
	
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

	// Load JS
	elgg_load_js('elgg.publicdashboard');
	elgg_load_js('jquery.galleriffic');
	elgg_load_js('jquery.opacityrollover');

	$params['content'] = elgg_view('publicdashboard/latest_blogs');
	$params['content'] .= elgg_view('publicdashboard/latest_photos');
	$params['content'] .= elgg_view('publicdashboard/latest_videos');
	$params['sidebar'] = elgg_view('publicdashboard/sidebar');
	
	// Push context
	elgg_push_context('publicdashboard');
	
	$body = elgg_view_layout('one_sidebar', $params);
	echo elgg_view_page(null, $body);	
	return true;
}

/**
 * Tweak the site menu
 * 
 * @param unknown_type $hook
 * @param unknown_type $type
 * @param unknown_type $value
 * @param unknown_type $params
 * @return unknown
 */
function publicdashboard_site_menu_setup($hook, $type, $value, $params) {	
	if (elgg_in_context('publicdashboard')) {		
		// Wipe out exising menu
		$value = array();
									
		// Add Spot Home
		$options = array(
			'name' => 'spot_home',
			'text' => elgg_echo('publicdashboard:menu:spothome'),
			'href' =>  elgg_get_site_url(),
			'priority' => 1,
			//'context' => 'publicdashboard'
		);
		$value['default'][] = ElggMenuItem::factory($options);
	
		// Add Blog
		$options = array(
			'name' => 'blogs',
			'text' => elgg_echo('publicdashboard:menu:blogs'),
			'href' =>  elgg_get_site_url() . "blog",
			'priority' => 2,
			'context' => 'blog'
		);
		$value['default'][] = ElggMenuItem::factory($options);
		
		// Add Photos
		$options = array(
			'name' => 'photos',
			'text' => elgg_echo('publicdashboard:menu:photos'),
			'href' =>  elgg_get_site_url() . "photos",
			'priority' => 3,
			'context' => 'tidypics'
		);
		$value['default'][] = ElggMenuItem::factory($options);
		
		// Add Videos
		$options = array(
			'name' => 'blogs',
			'text' => elgg_echo('publicdashboard:menu:videos'),
			'href' =>  elgg_get_site_url() . "videos",
			'priority' => 4,
			'context' => 'simplekaltura'
		);
		$value['default'][] = ElggMenuItem::factory($options);

	}
	return $value;
}
