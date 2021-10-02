<?php require_once("header.php");
$contact=mysql_fetch_array(mysql_query("select * from contact"));
 if(isset($_POST['submit'])){
    $to = "ablaraib44@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form: Travel Diaries Website";
    $message = $_POST['message'];
   

    $headers = "From:" . $from;
  
    $email_sent=mail($to,$subject,$message,$headers);
	
	if($email_sent):
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
	header("Refresh: 5; url=index.php");
   endif;
    }
	
 ?>
 

    <!-- Page Content -->
    <div class="container details_main">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                  
                </h1>
                
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
             <?php echo $contact['map']; ?>   
         
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
               <?php echo $contact['contact']; ?>
                
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form method="post">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" name="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" name="message" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

<?php require_once("footer.php"); ?>