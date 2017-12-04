<?php
        if(isset($_POST)){
        // Get the form fields and remove whitespace.
        $customerfirst = strip_tags(trim($_POST["customerfirst"]));
				$customerfirst = str_replace(array("\r","\n"),array(" "," "),$customerfirst);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $totalprice = money_format('%i', $_SESSION['totalprice']);
        

        // Check that data was sent to the mailer.
        if ( empty($customerfirst) OR empty($customerlast) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "arthur.schoenfeld@gmail.com, $email";

        // Set the email subject.
        $subject = "Thank you for your order!";

        // Build the email content.
        $email_content = "Name: $customerfirst\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Total: \n$$totalprice\n";

        // Build the email headers.
        $email_headers = "From: $customerfirst <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
