<?php
$errors = array();
$missing = array();
//check if the form has been submitted
if (isset($_POST['send'])) {
	///email processing script
$to = 'surfscore.me@gmail.com';
$subject = 'Message from surfscore.me';
// List expected fields
$expected = array('name', 'email', 'comments');
// Set required fields
$required = array('name', 'email', 'comments');

//create additional headers
$headers = "From: Surfscore.me<contact@surfscore.me>\r\n";
$headers .= 'Content-Type: text/plain; charset=utf-8';

// include the email processing script here
Require('./includes/processmail.inc.php');

}
?> 

    <?php include('./includes/header.inc.php'); ?>
    <?php include('./includes/navbar.inc.php'); ?>


             <!-- Start of Contact Me Box --> 
         <div class="span5 offset5 board-transparent">
          		<h2 style="text-align:center;">Get in touch with us</h2>

		<?php if(isset($mailSent) && $mailSent == true) { //If email is sent ?>
			<div class=" span5 alert alert-success">
				<strong>Awesome! We received your email and will be in touch!</strong>
			</div>
		<?php } ?>

          	<form class="form-horizontal" id="feedback" method="post" action="">
          			<?php if (($_POST && $suspect) || ($_POST && isset($errors['mailfail']))) { ?>
          				<p class="alert alert-error">Sorry, your message could not be sent. Please try again later</p>
          			 <?php } elseif //Main error message that stuff is missing
                      			 ($missing || $errors) { ?> 
                      			<h3></h3>
                      		<?php } ?>                      
          		<div class="control-group">
                      	<label class="control-label" for="name"><strong>Name</strong></label>
                      		<?php if ($missing && in_array('name', $missing)) { ?> 
                      			<div class="span2"><p class="alert alert-error">Please enter your name</p></div>
                      		<?php } ?>  
                      <div class="controls">                    
                      	<input name="name" id="name" placeholder="Your Name" class="input-xlarge focused" type="text" 
                      		<?php if ($missing || $errors) {
                      			echo 'value="' . htmlentities($name, ENT_COMPAT, 'UTF-8') . '"'; //making sure the user input gets redisplayed after an error message
                      			} ?>>
                      </div>
                </div>  
                    			
          		<div class="control-group">
                      	<label class="control-label" for="email"><strong>Email</strong></label>
                      		<?php if ($missing && in_array('email', $missing)) { ?> 
                      			<div class="span2"><p class="alert alert-error">Please enter your email</p></div>
                      		<?php } elseif (isset($errors['email'])) { ?>
                      		<p class="alert alert-error">Your email doesn't look right, please enter a real email address</p> 
                      		<?php } ?> 
                      <div class="controls">                    
                      	<input name="email" id="email" placeholder="Your email" class="input-xlarge focused" type="text"
                      		<?php if ($missing || $errors) {
                      			echo 'value="' . htmlentities($email, ENT_COMPAT, 'UTF-8') . '"'; //making sure the user input gets redisplayed after an error message
                      			} ?>>
                      </div>
                </div>     
                
          		<div class="control-group">
                      	<label class="control-label" for="comments"><strong>Your Message</strong></label>
                      		<?php if ($missing && in_array('comments', $missing)) { ?>
                      			<div class="span3"><p class="alert alert-error">Please enter your message</p></div>
                      		<?php } ?>
                      <div class="controls">                    
                           <textarea name="comments" id="comments" class="span4 input-xlarge" rows="5">
                      		<?php if ($missing || $errors) {
                      			echo htmlentities($comments, ENT_COMPAT, 'UTF-8'); 
                      		} ?>
                           </textarea>
                      </div>
                </div>     
             <!-- End of Contact Me Box -->
             		<div class="span3 offset3">
                     <input name="send" id="send" type="submit" value="Send your Email" href="#" class="btn-large btn" style="color:rgb(250,250,250);background-color:#ED1C24;background-image:none;">
                  	</div>
           </form>
<p> </p>  
               
            </div> 
       </div>
