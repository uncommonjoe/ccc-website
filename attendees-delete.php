<?php

	/* Template Name: DELETE Attendee */
	// Create page with this file as the template

	$id = json_decode(file_get_contents("php://input"));

	global $wpdb;

	$query = $wpdb->prepare("
		DELETE FROM `wp_service_attendees`
		WHERE `wp_service_attendees`.`id` = $id
		");

	$results = $wpdb->get_results($query);

	if($results){
		$data = "success";
	}
	else { 
		$data = "error";
	}
	
	echo json_encode($data);
?>