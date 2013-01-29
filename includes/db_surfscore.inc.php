<?php

$con = mysql_connect("localhost","morawec_surf","surfScore!");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("morawec_email", $con);

//Making sure we escape any apostrophes//
$email = mysql_real_escape_string($_POST['email']);

$sql="INSERT INTO email (emails, date)
VALUES
('$email', NOW())";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
		// Sending the email
						
			$body = "Hi there,
			
Huge thanks for being as excited about surfscore as we are!
			
We are working extra hard to help surfers shred better and welcome you to the surfscore team.
If you would like to be part of our elite surf team collecting data and receiving kick-ass feedback of all your sessions in return, please reply to this email and tell us why you want to be part of surfscores elite surfer team.
			
Aloha,
Marco, Peter, Cody and Alec - Your surfscore team";
			
			mail($_POST['email'], 'Aloha! - Join Surfscores Elite Surfing Team', $body, 'From: hello@surfscore.me');  
  
  
  
  //All Good? --> Refresh the page - > But we should display a thank you message with jQuery now.
			header ('Location: ../home.php'); 
			exit();

mysql_close($con);
?> 