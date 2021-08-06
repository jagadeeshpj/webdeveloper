<?php
//get data from form  
$Name = $_POST['Name'];
$Email= $_POST['Email'];
$Subject= $_POST['Subject'];
$Phone= $_POST['Phone'];
$Message= $_POST['Message'];
$to = "Jagadeeshbose2001@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $Subject . "\r\n Phone =" . $Phone . "\r\n Message =" . $Message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("index.html");
?>