
<?php


 if(empty($_POST["name"]) ||
    empty($_POST["email"]) ||
    empty($_POST["subject"]) ||
    empty($_POST["phone_number"])||
    empty($_POST["message"]))
    {
        echo "Please fill the form";
        exit;
    }
    
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$phone_number = $_POST["phone_number"];
$message = $_POST["message"];

mail( 'jagadeeshbose2001@gmail.com' , 'New form submission' , 
"New form submission: Name: $name, Email:$email ,subject: $subject, phone_number: $phone_number ,message : $message");

header('Location: contact.html');

if(empty($_POST['submit']))
{
    echo "Form is not submitted!";
    exit;
}
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $phone_number = $_POST['phone_number'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jagadeeshsylesh@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'bhaskarlatha'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('jagadeeshsylesh@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('jagadeeshpj2001@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Subject : $subject <br>phone_number : $phone_number</h3>  <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
      
