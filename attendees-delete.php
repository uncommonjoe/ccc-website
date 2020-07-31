<?php

	/* Template Name: DELETE Attendee */
	// Create page with this file as the template

	$form_data = json_decode(file_get_contents("php://input"));

	global $wpdb;

	$database = 'wp_service_attendees';
	$currentTime = current_time('mysql');

	if($form_data === null){

		$get_ids = $wpdb->get_col("
			SELECT id
			FROM $database
			WHERE (`id` > 1 AND `expired` IS NULL)
		");
	
		foreach($get_ids as $key => $value){
			$data = array('expired' => $currentTime);
			$where = array('id' => $value);

			$wpdb->update(
				$database,
				$data,
				$where,
			);

			print_r( $where );
		}		
	}

	else {
  		$wpdb->delete(
			$database,
			array(
				'id' => $form_data
				)
		);
	}

	echo $ids;

?>