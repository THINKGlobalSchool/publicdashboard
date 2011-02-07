<?php
	/**
	 * Public Dashboard CSS
	 * 
	 * @package Public Dashboard
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Jeff Tilson
	 * @copyright THINK Global School 2010
	 * @link http://www.thinkglobalschool.com/
	 */
?>

.publicdashboard {
}

.publicdashboard .latest-container {
	margin-bottom: 15px;
}

.publicdashboard .sidebar {
	padding-top: 25px;
}

.publicdashboard .sidebar .introcontent {
	padding-top: 7px;
	font-size: 110%;
	color: #444444;
	margin-bottom: 15px;
}

.publicdashboard .sidebar .spotstats {
	margin-bottom: 15px;
}

.publicdashboard .sidebar .spotstats table#stats-table td {
	font-weight: bold;
	font-size: 110%;
	color: #555555;
	padding: 4px;
}

.publicdashboard .sidebar .spotstats table#stats-table td.label {
	width: 70%;
	text-shadow: 1px 1px 1px #AAAAAA;
}

.publicdashboard .sidebar .spotstats table#stats-table td.stat {
	color: #800518;
	width: 30%;
}

.publicdashboard .sidebar .spotstats table#stats-table tr.odd {
	background: #EEEEEE;
	border-bottom: 1px solid #CCCCCC;
}
.publicdashboard .sidebar .spotstats table#stats-table tr.even {
	background: #DDDDDD;
	border-bottom: 1px solid #CCCCCC;
}

.publicdashboard .sidebar .tagcloud {
	padding-top: 7px;
	margin-bottom: 15px;
}

/* GALLERY LIST */
/* IMPORTANT - Change '#photos' to the ID of your gallery list to prevent a flash of unstyled content */
#photo-list { 
	visibility: hidden; 
	margin-left: auto;
	margin-right: auto;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.45);
	padding-left: 5px;
	padding-right: 5px;
}

/* GALLERY CONTAINER */
.gallery { background: #000; border: 1px solid #aaa; padding: 5px;}

/* LOADING BOX */
.loader { background: url(loader.gif) center center no-repeat #ddd; }

/* GALLERY PANELS */
.panel {
	background: #000;
}

/* DEFINE HEIGHT OF PANEL OVERLAY */
/* NOTE - It is best to define padding here as well so overlay and background retain identical dimensions */
.panel .panel-overlay,
.panel .overlay-background { height: 78px; padding: 0 2em; }

/* PANEL OVERLAY BACKGROUND */
.panel .overlay-background { background: #111; }

/* PANEL OVERLAY CONTENT */
.panel .panel-overlay { color: white; font-size: 0.9em; }
.panel .panel-overlay a { color: white; text-decoration: underline; font-weight: bold; }
.panel .panel-overlay h3 { color: white; font-size: 14px; }


.photo-subtext { font-style: italic; }

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
	border-color: #ddd;
}

/* TRANSPARENT BORDER FIX FOR IE6 */
/* NOTE - DO NOT CHANGE THIS RULE */
*html .pointer {
	filter: chroma(color=pink);
}

.panel-content img {
	height: 100%;
	margin-left: auto;
	margin-right: auto;
}