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

?>
<div id="elgg_header">
	<div id="elgg_header_contents">
		<?php
			// link back to main site.
			echo elgg_view('page_elements/elgg_header_logo', $vars);
			
			// drop-down login
			echo elgg_view('account/forms/login_dropdown');
		
			// insert site-wide navigation
			echo elgg_view('navigation/publicdashboard_site_nav');
		
			// insert a view which can be extended
			//echo elgg_view('header/extend');
		?>
	</div>
</div>
