<?php
	/**
	 * Public Dashboard Output/Access override view
	 * 
	 * @package Public Dashboard
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Jeff Tilson
	 * @copyright THINK Global School 2010
	 * @link http://www.thinkglobalschool.com/
	 */
	
	// Don't want to show 'public' on the external dashboard
	if (!isloggedin() && get_context() == 'publicdashboard') {
		unset($vars['entity']);
	}

?>
