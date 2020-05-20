<?php
	/* Template Name: SWAP Attendees */

	$form_data = json_decode(file_get_contents("php://input"));

    $id = $form_data->id;

	global $wpdb;

	$query = $wpdb->prepare("
		UPDATE wp_service_attendees
		SET firstService=firstService+secondService,secondService=firstService-secondService,firstService=firstService-secondService
		WHERE id = '$id';
	");
	
	$results =	$wpdb->get_results($query);

	if($results){
		$data = "success";
	}
	else { 
		$data = "error";
	}
	
	echo json_encode($data);
?>