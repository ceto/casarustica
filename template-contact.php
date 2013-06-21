<?php
/**
 * The Contact template file.
 *
 * Template Name: Contact Page	 
 */
?>
<?php
  
  //response generation function

  $response = "";

  //function to generate response
  function generate_response($type, $message){
    
    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
    
  }

  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $tel = $_POST['message_tel'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];
  $subjecto = $_REQUEST['message_subject'];

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Webes üzenet ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";
  
if(!$human == 0){
    if($human != 2) generate_response("error", $not_human); //not human!
    else {
      
      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message) || empty($tel)){
          generate_response("error", $missing_content);
        }
        else //ready to go!
        {
        	$message='Telefon: '.$tel.'<br/>'.'Tárgy: '.$subjecto.'<br/>'.$message;
        	$sent = mail($to, $subject, $message, $headers);
          	if($sent) generate_response("success", $message_sent); //message sent!
          	else generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  } 
  else 
  	if ($_POST['submitted']) generate_response("error", $missing_content);

?>
<?php get_template_part('templates/page', 'header'); ?>
		
		<div class="row-fluid">
		<div id="respond" class="span4 offset2 formblock">
		<h2>Küldjön üzenetet</h2>
		<?php echo $response; ?>
		<form class="form-horizontal" action="<?php the_permalink(); ?>" method="post">
						<div class="controlsa">
							<div class="ainput-prepend">
								<span class="add-on"><i class="icon-user"></i></span>
								<input class="input-xlarge" type="text" required placeholder="Név" id="message_name" name="message_name" value="<?php echo $_POST['message_name']; ?>">
							</div>
						</div>

				
						<div class="controlsa">
							<div class="ainput-prepend">
								<span class="add-on"><i class="icon-envelope"></i></span>
								<input class="input-xlarge" type="email" required placeholder="E-mail" id="message_email" name="message_email" value="<?php echo $_POST['message_email']; ?>">
							</div>
						</div>

			

						<div class="controlsa">
							<div class="ainput-prepend">
								<span class="add-on"><i class="icon-phone"></i></span>
								<input class="input-xlarge" type="text" required placeholder="Telefon" id="message_tel" name="message_tel" value="<?php echo $_POST['message_tel']; ?>">
							</div>
						</div>


						<?php 
							$the_house = new WP_Query ( 
						    array(
						    	'post_type' => 'house',
						    	'posts_per_page'=>0
						     )
						    );
						?>		
						
						<div class="controlsa">
							<div class="ainput-prepend">
								<span class="add-on"><i class="icon-check"></i></span>
								<select class="input-xlarge" name="message_subject" id="message_subject">
									<option <?php if($ubjecto == 'Általános érdeklődés') echo 'selected'; ?> value="Általános érdeklődés">Általános érdeklődés</option>
								  	<?php while ( $the_house->have_posts()) : $the_house->the_post(); ?>
								  	<option <?php if($subjecto == get_the_ID()) echo 'selected'; ?> value="<?php the_ID(); ?>">Katalógus - <?php the_title(); ?></option>
								  	<?php endwhile; ?>
								  	<option <?php if($subjecto == 'Saját ház felújítása') echo 'selected'; ?> value="Saját ház felújítása">Saját ház felújítása</option>
									<option <?php if($subjecto == 'Eladó parasztházam van') echo 'selected'; ?> value="Eladó parasztházam van">Eladó parasztházam van</option>
								  	   	 
								
								</select>
							</div>
						</div>



						<div class="controlsa">
							<div class="ainput-prepend">
								<span class="add-on"><i class="icon-pencil"></i></span>
								<textarea  class="input-xlarge" required placeholder="Üzenet" id="message_text" name="message_text" value="<?php echo $_POST['message_text']; ?>"></textarea>
							</div>
						</div>



			<div class="aform-actions">
				<input type="hidden" name="message_human" value="2">
				<input type="hidden" name="submitted" value="1">
				<input type="submit" class="btn btn-warning" value="Elküldöm">
			</div>
		</form>
	</div>

	<div class="contact-content span4 batar">
				<?php get_template_part('templates/content', 'page'); ?>
		</div>
</div>

