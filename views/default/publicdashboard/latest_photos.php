<?php
	/**
	 * Public Dashboard Latest Photos View
	 * 
	 * @package Public Dashboard
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Jeff Tilson
	 * @copyright THINK Global School 2010
	 * @link http://www.thinkglobalschool.com/
	 */
	
	$header = elgg_view_title(elgg_echo('publicdashboard:latestphotos'));
	
	echo "<div class='publicdashboard'>
			<div class='latest_container'>
				$header
			</div>
		</div>";
?>