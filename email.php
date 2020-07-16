<?php
		$esn=$_POST['ESN'];
		$po=$_POST['PO'];
		$shop=$_POST['shop'];
		$message='Testing';
		$email='andrew.mulcahy@prattwhitney.com'

		$to='andrew.mulcahy@prattwhitney.com';
		$subject='Testing Functionality';
		$message=$esn." ".$po." contains the following: "."\n\n".$message;
		$headers = 'From: '.$email."\r\n" .
        'Reply-To: '.$email."\r\n";

		mail($to, $subject, $message, $headers);
?>