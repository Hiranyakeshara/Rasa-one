<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
	

		$to='codmobilechampionship2020@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='inquery to rasaone';
		$message="Name :".$name."\n"."Email :".$email."\n"."About :".$subject."\n"."Message :".$message;		$headers="From: ".$email;
		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly! for more information please contact us via phone</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>