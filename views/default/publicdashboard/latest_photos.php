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
				$header
			</div>
		</div>
		$photos_content
		";
?>
<script type='text/javascript'>
	$(document).ready(
		function() {
			$('#photo_list').galleryView({
					gallery_width: 1000,
					gallery_height: 500,
					frame_width: 120,
					frame_height: 90,
					pause_on_hover: true,
					nav_theme: 'dark'
				})
		}
	);
</script>
<script type='text/javascript' src="<?php echo $vars['url'] . "mod/publicdashboard/scripts/galleryview/jquery.timers-1.2.js" ?>"></script>
<script type='text/javascript' src="<?php echo $vars['url'] . "mod/publicdashboard/scripts/galleryview/jquery.easing.1.3.js" ?>"></script>
<script type='text/javascript' src="<?php echo $vars['url'] . "mod/publicdashboard/scripts/galleryview/jquery.galleryview-2.1.1-pack.js" ?>"></script>
<style type='text/css'>
	/* GALLERY LIST */
	/* IMPORTANT - Change '#photos' to the ID of your gallery list to prevent a flash of unstyled content */
	#photos { visibility: hidden; }

	/* GALLERY CONTAINER */
	.gallery { background: #ddd; border: 1px solid #aaa; padding: 5px;}

	/* LOADING BOX */
	.loader { background: url(loader.gif) center center no-repeat #ddd; }

	/* GALLERY PANELS */
	.panel {}

	/* DEFINE HEIGHT OF PANEL OVERLAY */
	/* NOTE - It is best to define padding here as well so overlay and background retain identical dimensions */
	.panel .panel-overlay,
	.panel .overlay-background { height: 60px; padding: 0 1em; }

	/* PANEL OVERLAY BACKGROUND */
	.panel .overlay-background { background: #222; }

	/* PANEL OVERLAY CONTENT */
	.panel .panel-overlay { color: white; font-size: 0.9em; }
	.panel .panel-overlay a { color: white; text-decoration: underline; font-weight: bold; }
	.panel .panel-overlay h3 { color: white; font-size: 14px; }

	/* FILMSTRIP */
	/* 'margin' will define top/bottom margin in completed gallery */
	.filmstrip { margin: 5px; }

	/* FILMSTRIP FRAMES (contains both images and captions) */
	.frame {}

	/* WRAPPER FOR FILMSTRIP IMAGES */
	.frame .img_wrap { border: 1px solid #aaa; }

	/* WRAPPER FOR CURRENT FILMSTRIP IMAGE */
	.frame.current .img_wrap { border-color: #000; }

	/* FRAME IMAGES */
	.frame img { border: none; }

	/* FRAME CAPTION */
	.frame .caption { font-size: 11px; text-align: center; color: #888; }

	/* CURRENT FRAME CAPTION */
	.frame.current .caption { color: #000; }

	/* POINTER FOR CURRENT FRAME */
	.pointer {
		border-color: #000;
	}

	/* TRANSPARENT BORDER FIX FOR IE6 */
	/* NOTE - DO NOT CHANGE THIS RULE */
	*html .pointer {
		filter: chroma(color=pink);
	}
</style>