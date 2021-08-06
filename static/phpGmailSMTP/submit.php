<?php
include('database.inc.php');
$msg="";
if(isset($_POST['name'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$subject=mysqli_real_escape_string($con,$_POST['subject']);
	$phone_number=mysqli_real_escape_string($con,$_POST['phone_number']);
	$message=mysqli_real_escape_string($con,$_POST['message']);
	
	mysqli_query($con,"insert into contact_us(name,email,subject,phone_number,message) values('$name','$email','$subject','$phone_number','$message')");
	$msg="Thanks message";
	
	$html="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>subject</td><td>$subject</td></tr><tr><td>phone_number</td><td>$phone_number</td></tr><tr><td>message</td><td>$message</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="jagadeeshbose2001@gmail.com";
	$mail->Password="lathabhaskar";
	$mail->SetFrom("jagadeeshbose2001@gmail.com");
	$mail->addAddress("jagadeeshbose2001@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	echo $msg;
}
?>