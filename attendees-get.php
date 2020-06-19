<?php

	/* Template Name: GET Attendees */
	// Create page with this file as the template

	global $wpdb;

	$query = $wpdb->prepare("
		SELECT *,
		(SELECT SUM(firstService) FROM `wp_service_attendees`) as sumFirstService,
		(SELECT SUM(secondService) FROM `wp_service_attendees`) AS sumSecondService,
		(SELECT SUM(firstServiceOverflow) FROM `wp_service_attendees`) as sumFirstServiceOverflow,
		(SELECT SUM(secondServiceOverflow) FROM `wp_service_attendees`) AS sumSecondServiceOverflow,
		CURDATE() + INTERVAL 6 - weekday(CURDATE()) DAY AS sunday
		FROM `wp_service_attendees`
		WHERE `expired` IS NULL
		");

	$results = $wpdb->get_results($query);

	if($results){
		echo json_encode($results);
	}
	else {
		$wpdb->print_error();
	}
?>