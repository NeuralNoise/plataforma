<?php
/**
 * Elgg demo custom index page plugin
 * 
 */

elgg_register_event_handler('init', 'system', 'somenergia_index_init');

function somenergia_index_init() {
	// Extend system CSS with our own styles
	elgg_extend_view('css/elgg', 'somenergia_index/css');
        
        // Replace the default index page
	elgg_register_page_handler('', 'somenergia_index');
}

function somenergia_index($hook, $type, $return, $params) {
	if ($return == true) {
		// another hook has already replaced the front page
		return $return;
	}

	if (!include_once(dirname(__FILE__) . "/index.php")) {
		return false;
	}

	// return true to signify that we have handled the front page
	return true;
}
