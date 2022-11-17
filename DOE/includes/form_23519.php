<?php	
	if (empty($_POST['name_23519']) && strlen($_POST['name_23519']) == 0 || empty($_POST['email_23519']) && strlen($_POST['email_23519']) == 0 || empty($_POST['message_23519']) && strlen($_POST['message_23519']) == 0)
	{
		return false;
	}
	
	$name_23519 = $_POST['name_23519'];
	$email_23519 = $_POST['email_23519'];
	$message_23519 = $_POST['message_23519'];
	
	$to = 'daniel@doenglish.info'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a DOEnglish";
	$email_body = "You have received a new message. \n\n".
				  "Name_23519: $name_23519 \nEmail_23519: $email_23519 \nMessage_23519: $message_23519 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: daniel@doenglish.info\r\n";
	$headers .= "Reply-To: $email_23519";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>