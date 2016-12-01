<?php 
$message = $_REQUEST['comment'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];

if($message != "" && $email != "" && $message != ""){
	//$header = "From: rayolanderos@gmail.com"."\r\n"; 
	$header  = "From: ".$email."\r\n"; 

	ob_start();
	echo 'Name: '		  . $name . "\r\n" .
		 'Email: '		  . $email 	 . "\r\n" .
		 'Message:'. $message. "\r\n";

	$msg = ob_get_clean();

	mail('mae.be.app@gmail.com','Requesting Information: Mae', $msg, $header);
	mail('rayolanderos@gmail.com','Requesting Information: Mae', $msg, $header);

	echo json_encode(array("errors"=> false));

}else{
	echo json_encode(array("errors"=> true));	
}
	
?>