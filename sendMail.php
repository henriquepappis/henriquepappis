<?php
 //    // My modifications to mailer script from:
 //    // http://blog.teamtreehouse.com/create-ajax-contact-form
 //    // Added input sanitizing to prevent injection

 //    // Only process POST reqeusts.
 //    if ($_SERVER["REQUEST_METHOD"] == "POST") {
 //        // Get the form fields and remove whitespace.
 //        $name = strip_tags(trim($_POST["name"]));
	// 	$name = str_replace(array("\r","\n"),array(" "," "),$name);
 //        $subject = $_POST["subject"];
 //        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
 //        $message = trim($_POST["message"]);

 //        // Check that data was sent to the mailer.
 //        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
 //            // Set a 400 (bad request) response code and exit.
 //            http_response_code(400);
 //            echo $messageMail400;
 //            exit;
 //        }

 //        // Set the recipient email address.
 //        // FIXME: Update this to your desired email address.
 //        $recipient = "contact@henriquepappis.com";

 //        // Build the email headers.
 //        $email_headers = "From: $name <$email>";

 //        // Send the email.
 //        if (mail($recipient, $subject, $message, $email_headers)) {
 //            // Set a 200 (okay) response code.
 //            my_status_header(200);
 //            echo $messageMailOK;
 //        } else {
 //            // Set a 500 (internal server error) response code.
 //            my_status_header(500);
 //            echo $messagemMailError;
 //        }

 //    } else {
 //        // Not a POST request, set a 403 (forbidden) response code.
 //        my_status_header(403);
 //        echo $messageMail403;
 //    }

	// function my_status_header($setHeader=null) {
	//     static $theHeader=null;
	//     //if we already set it, then return what we set before (can't set it twice anyway)
	//     if($theHeader) {return $theHeader;}
	//     $theHeader = $setHeader;
	//     header('HTTP/1.1 '.$setHeader);
	//     //return $setHeader;
	// }

?>
