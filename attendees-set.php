<?php
	/* Template Name: SET Attendees */

	$form_data = json_decode(file_get_contents("php://input"));

    $name = $form_data->name;
    $email = $form_data->email;
    $time = $form_data->time;
    $people = $form_data->people;

	if($time == "9 AM") {
		$firstPeople = $people;
		$secondPeople = 0;
	}
	else {
		$firstPeople = 0;
		$secondPeople = $people;
	}

	global $wpdb;
	
	$query = $wpdb->prepare("INSERT INTO `wp_service_attendees` (name, email, firstService, secondService) VALUES ('$name', '$email', $firstPeople, '$secondPeople')");

	$wpdb->query($query);

	$query = $wpdb->prepare("SELECT SUM(firstService) AS firstService, SUM(secondService) AS secondService FROM `wp_service_attendees` WHERE 1");
	
	$results =	$wpdb->get_results($query);

	if($results){
		echo json_encode($results);

		// send email
		// Hi NAME, I just wanted to let you know that I received your request for XX people to be included in Sunday’s service. We have room for you! I’m looking forward to seeing you at church on Sunday!

	}
	else {
		$wpdb->print_error();
	}
?>