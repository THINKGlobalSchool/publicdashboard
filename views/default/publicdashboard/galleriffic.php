<?php
	/** 
	 * Galleriffic CSS
	 */
?>

#pdss {
	min-width: 653px;
	max-width: 725px;
	margin-left: auto;
	margin-right: auto;
}

#pdss div.content {
	/* The display of content is enabled using jQuery so that the slideshow content won't display unless javascript is enabled. */
	display: none;
	float: left;
	width: 525px;
	 
}
#pdss div.content a, div.nav_galleriffic a {
	text-decoration: none;
	color: #777;
}
#pdss div.content a:focus, div.content a:hover, div.content a:active {
	text-decoration: underline;
}
#pdss div.controls {
	margin-top: 5px;
	height: 23px;
}
#pdss div.controls a {
	padding: 5px;
}
#pdss div.ss-controls {
	float: left;
}
#pdss div.nav-controls {
	float: right;
}

#pdss div.slideshow-container {
	position: relative;
	clear: both;
	height: 502px; /* This should be set to be at least the height of the largest image in the slideshow */
}
#pdss div.loader {
	position: absolute;
	top: 0;
	left: 0;
	background-image: url('loader.gif');
	background-repeat: no-repeat;
	background-position: center;
	width: 550px;
	height: 502px; /* This should be set to be at least the height of the largest image in the slideshow */
}
#pdss div.slideshow {
	
}
#pdss div.slideshow span.image-wrapper {
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	max-width: 450px;
}
#pdss div.slideshow a.advance-link {
	display: block;
	width: 525px;
	height: 502px; /* This should be set to be at least the height of the largest image in the slideshow */
	line-height: 502px; /* This should be set to be at least the height of the largest image in the slideshow */
	text-align: center;
}

#pdss div.slideshow a.advance-link:hover, div.slideshow a.advance-link:active, div.slideshow a.advance-link:visited {
	text-decoration: none;
}
#pdss div.slideshow img {
	vertical-align: middle;
	border: 1px solid #ccc;
	max-width: 515px;
	max-height: 502px;
}
#pdss div.download {
	float: right;
}
#pdss div.caption-container {
	position: relative;
	clear: left;
	height: auto;
}
#pdss span.image-caption {
	display: block;
	position: absolute;
	width: px;
	top: 0;
	left: 0;
}
#pdss div.caption {
	padding: 12px;
	width: 500px;
}
#pdss div.image-title {
	font-weight: bold;
	font-size: 1.4em;
}
#pdss div.image-desc {
	line-height: 1.3em;
	padding-top: 12px;
	height: auto;
	display: block;
}
#pdss div.nav_galleriffic {
	/* The nav_galleriffic style is set using jQuery so that the javascript specific styles won't be applied unless javascript is enabled. */
}
#pdss ul.thumbs {
	clear: both;
	margin: 0;
	padding: 0;
}
#pdss ul.thumbs li {
	float: left;
	padding: 0;
	margin: 5px 10px 5px 0;
	list-style: none;
}
#pdss a.thumb {
	padding: 2px;
	display: block;
	border: 1px solid #ccc;
}
#pdss ul.thumbs li.selected a.thumb {
	background: #000;
}
#pdss a.thumb:focus {
	outline: none;
}
#pdss ul.thumbs img {
	border: none;
	display: block;
}
#pdss div.pagination {
	clear: both;
}
#pdss div.nav_galleriffic div.top {
	margin-bottom: 12px;
	height: 11px;
}
#pdss div.nav_galleriffic div.bottom {
	margin-top: 12px;
}
#pdss div.pagination a, div.pagination span.current, div.pagination span.ellipsis {
	display: block;
	float: left;
	margin-right: 2px;
	padding: 4px 7px 2px 7px;
	border: 1px solid #ccc;
}
#pdss div.pagination a:hover {
	background-color: #eee;
	text-decoration: none;
}
#pdss div.pagination span.current {
	font-weight: bold;
	background-color: #000;
	border-color: #000;
	color: #fff;
}
#pdss div.pagination span.ellipsis {
	border: none;
	padding: 5px 0 3px 2px;
}
