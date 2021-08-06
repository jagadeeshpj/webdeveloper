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



if(empty($_POST['submit']))
{
    echo "Form is not submitted!";
    exit;
}
?>
