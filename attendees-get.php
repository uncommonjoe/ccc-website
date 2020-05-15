<?php

	/* Template Name: GET Attendees */
	// Create page with this file as the template

	global $wpdb;

	$query = $wpdb->prepare("SELECT SUM(firstService) AS firstService, SUM(secondService) AS secondService, CURDATE() + INTERVAL 6 - weekday(CURDATE()) DAY AS sunday FROM `wp_service_attendees` WHERE 1");

	$results = $wpdb->get_results($query);

	if($results){
		echo json_encode($results);
	}
	else {
		$wpdb->print_error();
	}
?>