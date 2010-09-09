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
				$header <br /> 
				<div id='pdss'>
					$photos_content
				</div> 
				<br />
			</div>
		</div>
		";
?>
<script type='text/javascript'>
	jQuery(document).ready(function($) {
		
		
		// We only want these styles applied when javascript is enabled
		$('div.nav_galleriffic').css({'width' : '100px', 'float' : 'right', 'height' : '590px', 'overflow' : 'hidden'});
		$('div.content').css('display', 'block');

		// Initially set opacity on thumbs and add
		// additional styling for hover effect on thumbs
		var onMouseOutOpacity = 0.67;
		$('#thumbs ul.thumbs li').opacityrollover({
			mouseOutOpacity:   onMouseOutOpacity,
			mouseOverOpacity:  1.0,
			fadeSpeed:         'fast',
			exemptionSelector: '.selected'
		});
		
		// Initialize Advanced Galleriffic Gallery
		var gallery = $('#thumbs').galleriffic({
			showPagesPagination:	   false, // This will hide the page buttons
			delay:                     5000,
			numThumbs:                 6,
			preloadAhead:              10,
			enableTopPager:            true,
			enableBottomPager:         false,
			maxPagesToShow:            7,
			imageContainerSel:         '#slideshow',
			controlsContainerSel:      '#controls',
			captionContainerSel:       '#caption',
			loadingContainerSel:       '#loading',
			renderSSControls:          true,
			renderNavControls:         true,
			playLinkText:              'Play Slideshow',
			pauseLinkText:             'Pause Slideshow',
			prevLinkText:              '&lsaquo; Previous Photo',
			nextLinkText:              'Next Photo &rsaquo;',
			nextPageLinkText:          '&rsaquo;&rsaquo;&rsaquo;',
			prevPageLinkText:          '&lsaquo;&lsaquo;&lsaquo;',
			enableHistory:             false,
			autoStart:                 true,
			syncTransitions:           true,
			defaultTransitionDuration: 900,
			onSlideChange:             function(prevIndex, nextIndex) {
				// 'this' refers to the gallery, which is an extension of $('#thumbs')
				this.find('ul.thumbs').children()
					.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
					.eq(nextIndex).fadeTo('fast', 1.0);
			},
			onPageTransitionOut:       function(callback) {
				this.fadeTo('fast', 0.0, callback);
			},
			onPageTransitionIn:        function() {
				this.fadeTo('fast', 1.0);
			}
		});
	});
</script>
<script type='text/javascript' src="<?php echo $vars['url'] . "mod/publicdashboard/js/jquery.galleriffic.js" ?>"></script>
<script type='text/javascript' src="<?php echo $vars['url'] . "mod/publicdashboard/js/jquery.opacityrollover.js" ?>"></script>
