<?php

// call the contact() function if contact_btn is clicked
if (isset($_POST['contact_btn'])) {
    contact();
}


function contact()
{
    if (isset($_POST["contact_btn"])) {
        include('smtp/PHPMailerAutoload.php');
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $phone_number = $_POST["phone_number"];
        $message = $_POST["message"];


        // Email Functionality

        date_default_timezone_set('Etc/UTC');

        $mail = new PHPMailer();

	$mail->IsSMTP();
	$mail->CharSet = 'UTF-8';

	$mail->Host       = "smtp.mailtrap.io"; // SMTP server example
	$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 2525;                    // set the SMTP port for the GMAIL server
	$mail->Username   = "dffb251aa1bba7"; 	// SMTP account username example
	$mail->Password   = "82643e4f9e62db";        // SMTP account password example


        $mail->setFrom($_POST['email']);
        $mail->addAddress('jagadeeshbose2001@gmail.com');

        // The subject of the message.
        $mail->Subject = 'Received Message From Client ' . $name;

        $message = '<html><body>';

        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";

        $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";

        $message .= "<tr><td><strong>subject:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";


        $message .= "<tr><td><strong>phone_number:</strong> </td><td>" . strip_tags($_POST['phone_number']) . "</td></tr>";

        $message .= "<tr><td><strong>message</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";

        $message .= "</table>";
        $message .= "</body></html>";

        $mail->Body = $message;

        $mail->isHTML(true);

        if ($mail->send()) {
          echo header("Location:contact.php");
          "Message could not be sent.  ";
            echo "Mailer Error: " . $mail->ErrorInfo;
            exit; 
             }

}
}



    ?>
        
        
            



