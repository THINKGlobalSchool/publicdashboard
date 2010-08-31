<?php
	/**
	 * Public Dashboard Latest Photos View
	 * 
	 * @package Public Dashboard
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Jeff Tilson
	 * @copyright THINK Global School 2010
	 * @link http://www.thinkglobalschool.com/				"object", "image"
	 */
	
	$header = elgg_view_title(elgg_echo('publicdashboard:latestphotos'));
	
	$photos = elgg_get_entities(array('type' => 'object', 'subtype' => 'image'));
	$photos_content = elgg_view('publicdashboard/image_gallery_view', array('id' => 'photo_list', 'photos' => $photos));
	
	
	echo "<div class='publicdashboard'>
			<div class='latest_container'>
				$header <br /> $photos_content <br />
			</div>
		</div>
		";
?>
<script type='text/javascript'>
	$(document).ready(
		function() {
			$('#photo_list').galleryView({
					gallery_width: 1000,
					gallery_height: 500,
					frame_width: 100,
					frame_height: 80,
					pause_on_hover: true,
					nav_theme: 'light',
					transition_speed: 1000,
					transition_interval: 9000,
				})
		}
	);
</script>
<script type='text/javascript' src="<?php echo $vars['url'] . "mod/publicdashboard/scripts/galleryview/jquery.timers-1.2.js" ?>"></script>
<script type='text/javascript' src="<?php echo $vars['url'] . "mod/publicdashboard/scripts/galleryview/jquery.easing.1.3.js" ?>"></script>
<script type='text/javascript' src="<?php echo $vars['url'] . "mod/publicdashboard/scripts/galleryview/jquery.galleryview-2.1.1-pack.js" ?>"></script>