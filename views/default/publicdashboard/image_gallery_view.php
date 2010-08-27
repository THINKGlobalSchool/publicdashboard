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

	if ($vars['photos']) {
		$content = "<ul id='{$vars['id']}'>";
		foreach($vars['photos'] as $photo) {
			$content .= "
						<li>
							<img  src=\"{$vars['url']}pg/photos/thumbnail/{$photo->getGUID()}/large/\" alt=\"{$photo->title}\" />
							<div class='panel-overlay'>
											<h3>{$photo->title}</h3>
											<p>{$photo->description}</p>
							</div>
						</li>
			";
		}
		$content .= '</ul>';
		echo $content;
	}
?>