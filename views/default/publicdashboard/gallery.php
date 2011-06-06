<?php
/**
 * Public Dashboard Image Gallery View - Formats photos and their data in such a way that the 
 * galleryview jQuery plugin can display 
 * 
 * @package Public Dashboard
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010
 * @link http://www.thinkglobalschool.com/
 * 
 * @uses $vars['photos'] - photo entity
 * @uses $vars['id']  - UL id
 */
?>
<hr />
<div id='pdss'>
	<div id="container">
		<!-- Start Advanced Gallery Html Containers -->
		<div id="gallery" class="content">
			<div id="controls" class="controls"></div>
			<div class="slideshow-container">
				<div id="loading" class="loader"></div>
				<div id="slideshow" class="slideshow"></div>
			</div>
			<div id="caption" class="caption-container"></div>
		</div>
		<div id="thumbs" class="nav_galleriffic">
			<ul class="thumbs noscript">
			<?php
				if ($vars['photos']) {
					foreach($vars['photos'] as $photo) {
						$owner = get_entity($photo->owner_guid);
						$created = date("F j, Y g:i a", $photo->time_created);
						$desc = elgg_get_excerpt($photo->description, 140);
						$src = elgg_get_site_url() . "pg/photos/thumbnail/{$photo->getGUID()}";
						$content .= "
							<li>
								<div style='width: 75px;height: 75px; overflow: hidden;'>
								<a class='thumb' name='{$photo->getGUID()}' href='$src/large' title='{$photo->title}'>
									<img style='width: 70px;'src='$src/small' alt='{$photo->title}' />
								</a>
								</div>
								<div class='caption'>
									<div class='download'>
										<a href='{$photo->getURL()}'>View Original</a>
									</div>
									<div class='image-title'>{$photo->title} </div>
									<div class='entity_metadata'>By: <strong>{$owner->name}</strong> on $created</div>
								</div>
							</li>
						";
					}
					echo $content;
				}
			?>
			</ul>
		</div>
		<div style="clear: both;"></div>
	</div>
</div>
