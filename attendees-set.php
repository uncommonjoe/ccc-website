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

		$message = '
			<body style="background: linear-gradient(to right, rgba(2, 168, 204, 0.5), rgba(255, 128, 055, 0.5)), url(https://cornerstonebillings.org/wp-content/uploads/2020/03/photo-1434394354979-a235cd36269d.jpeg) center center / cover no-repeat;">
				<table style="text-align: center;table-layout: fixed; width: 100%; max-width: 650px; font-family: Roboto, -apple-system, BlinkMacSystemFont \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: 1.5rem; letter-spacing: 1px; margin: 50px auto; padding-left: 50px; padding-right: 50px;"
					width="100%">

					<tbody>
						<tr style="height: 30px;"></tr>

						<tr>
							<td colspan="2" style="width: 100%;" width="100%">
								<img src="https://cornerstonebillings.org/wp-content/uploads/2020/03/logo-complete.png" alt="Cornerstone Community Church" style="width: 100%;max-width: 220px;">
							</td>
						</tr>
					</tbody>
				</table>

				<table style="background-color: white;table-layout: fixed; width: 100%; max-width: 650px; font-family: Roboto, -apple-system, BlinkMacSystemFont \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: 1.5rem; letter-spacing: 1px; margin: 50px auto; padding-left: 50px; padding-right: 50px;"
					width="100%">

					<tbody>
						<tr style="height: 50px;"></tr>

						<tr>
							<td colspan="2" style="width: 100%;" width="100%">
								<h2>Your seats are saved!</h2>
								<p>Hi ' . $name . ', We just wanted to let you know that we have received your request for <strong>' . $people. ' people</strong> to be included in Sunday&#8217;s <strong>' . $time .'</strong> service. We have room for you! We are looking forward to seeing
									you at church on Sunday!</p>
							</td>
						</tr>

						<tr class="spacer-90" style="height: 50px;"></tr>
					</tbody>
				</table>

				<table style="text-align: center;table-layout: fixed; width: 100%; max-width: 650px; font-family: Roboto, -apple-system, BlinkMacSystemFont \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: 1.5rem; letter-spacing: 1px; margin: 50px auto; padding-left: 50px; padding-right: 50px;"
					width="100%">

					<tbody>
						<tr style="height: 30px;"></tr>
					</tbody>
				</table>
			</body>
		';


		$recipient = $email;

		$headers = "From: Cornerstone Community Church <office@cornerstonebillings.org>\r\n";
		$headers .= "Reply-To: <office@cornerstonebillings.org>\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

		$subject = "Confirmation for Sunday Worship Service"; 

		mail($recipient, $subject, $message, $headers);


	}
	else {
		$wpdb->print_error();
	}
?>