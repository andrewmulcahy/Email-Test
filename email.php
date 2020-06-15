<? php
	if(isset($_POST['submit'])){
		$first_name = $_POST['firstName'];
		$last_name = $_POST['lastName'];
		$email = $_POST['email'];
		$comment = $_POST['comments'];

		$to = 'a.d.mulcahy@gmail.com';
		$subject = "New Comment from Website";
		$message = "First Name: ".$first_name."\n"."Last Name:".$last_name."\n"."Wrote the following: "."\n\n".$comment;
		$headers="From: ".$email;

		if(mail($to,$subject,$message,$headers)){
			echo"<h1>Sent Successfully!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>