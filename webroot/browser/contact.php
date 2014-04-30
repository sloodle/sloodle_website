<?php
// Sloodle Browser website, contact form

require_once('config.php');
$CFG->curpage = 'contact';
$CFG->pagetitle = 'Sloodle Browser :: Contact';

// Email address to send the contact form to
$contactemail = 'Malcolm.Crowe@uws.ac.uk ';
$contactsubject = 'Sloodle Browser (contact via website)';

// Start a session so we can track user data in the contact form
session_name('sloodlebrowser');
session_start();

// Default values for the contact form
$sb_sendername = '';
$sb_senderemail = '';
$sb_message = '';
// Was the message sent? 0 = not attempted, -1 = error, 1 = success
$messagesent = 0;

// Has a contact form been submitted?
if (isset($_POST['sb_submitcontactform'])) {
    // Yes - transfer everything to session data
    $_SESSION['sb_submitcontactform'] = true;
    $_SESSION['sb_sendername'] = $_POST['sb_sendername'];
    $_SESSION['sb_senderemail'] = $_POST['sb_senderemail'];
    $_SESSION['sb_message'] = $_POST['sb_message'];
    // Redirect back to this page again, to eliminate the POST parameters
    if (headers_sent()) exit('Failed to send message -- headers already sent.');
    header("Location: {$CFG->wwwroot}/contact.php");
    exit();
}

// Has contact form data been passed as session data?
if (isset($_SESSION['sb_submitcontactform'])) {
    // Grab all the session data out
    $sb_sendername = htmlentities($_SESSION['sb_sendername'], ENT_QUOTES);
    $sb_senderemail = addslashes($_SESSION['sb_senderemail']);
    $sb_message = htmlentities($_SESSION['sb_message'], ENT_QUOTES);
    
    // Unset all the session data
    unset($_SESSION['sb_submitcontactform']);
    unset($_SESSION['sb_sendername']);
    unset($_SESSION['sb_senderemail']);
    unset($_SESSION['sb_message']);
    
    // Attempt to send the email
    $headers = "From: {$sb_senderemail}";
    $message = "Message from {$sb_sendername} via Sloodle Browser website:\n\n".$sb_message;
    $result = @mail($contactemail, $contactsubject, $message, $headers);
    
    // Was it successful?
    if ($result) {
        $messagesent = 1;
        // Clear the data from the form
        $sb_sendername = '';
        $sb_senderemail = '';
        $sb_message = '';
    } else {
        $messagesent = -1;
    }
}

print_header();
?>


<!-- MAIN PAGE CONTENT -->
<?php start_page_content(); ?>


    <?php start_page_entry('Contact Us'); ?>
    
    <?php
    // Was a message sent or failed?
    if ($messagesent < 0) echo '<h3 style="color:#aa0000;text-align:center;">Failed to send message<br/></h3>';
    else if ($messagesent > 0) echo '<h3 style="color:#00aa00;text-align:center;">Message sent successfully<br/></h3>';
    ?>
    
    <p>
    The Sloodle Browser is maintained by Malcolm Crowe at the University of the West of Scotland.
    You can use the form below to send him an email:
    </p>
    
    <form action="contact.php" method="post">
    <fieldset style="text-align:center;">
    
     <label for="sb_sendername">Your name:</label>
     <input type="text" name="sb_sendername" id="sb_sendername" size="30" maxlength="100" value="<?php echo $sb_sendername; ?>" />
     
     <br/>
     
     <label for="sb_senderemail">Your email:</label>
     <input type="text" name="sb_senderemail" id="sb_senderemail" size="30" maxlength="100" value="<?php echo $sb_senderemail; ?>" />
     
     <br/><br/>
     
     <label for="sb_message">Message:</label><br/>
     <textarea name="sb_message" id="sb_message" cols="30" rows="12"><?php echo $sb_message; ?></textarea>
     
     <br/><br/>
     
     <input type="submit" name="sb_submitcontactform" id="sb_submitcontactform" value="Send" />
    
    </fieldset>
    </form>
    <?php end_page_entry(); ?>



<?php end_page_content(); ?>
<!-- END MAIN PAGE CONTENT -->

<?php include_once($CFG->dirroot.'/sidebar.php'); ?>
<?php print_footer(); ?>
		
