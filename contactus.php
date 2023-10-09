<?php 
	$Page_title='Contact Us';
	include_once 'include/head.php';
	include ('include/dbconn.php');
	
	$msg=$msg1=$msg2=$msg3=$msg4=$msg5=$msg6=''; 
    $name=$email=$subject=$message='';
	if(isset($_POST['send']))
    {
        $name       = $_REQUEST['name'];
		$email		= $_REQUEST['email'];
        $subject    = $_REQUEST['subject'];
        $message	= $_REQUEST['message'];
		
		if (empty($name)) 
	 	{
	 		$msg1="<div class='error'> Enter Your Name </div>";	
	 	}
		elseif (strlen($name) < 2) 
	 	{
	 		$msg1="<div class='error'>Should contain Atleast 3 Letters  </div>";	
	 	}
		elseif (!preg_match("/^[a-zA-Z -]*$/",$name)) 
	 	{
	 		$msg1="<div class='error'>Only Letters are Allowed </div>";	
	 	}
		elseif (empty($email)) 
	 	{
	 		$msg2="<div class='error'> Enter Your Email. </div>";	
	 	}
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	 	{
	 		$msg2="<div class='error'> Invalid Email Address </div>";	
	 	}
		elseif (empty($subject)) 
	 	{
	 		$msg3="<div class='error'> Enter Your Subject </div>";	
	 	}
		elseif (strlen($subject) < 3 ) 
	 	{
	 		$msg3="<div class='error'>Should be graeter than 3  </div>";	
	 	}
		elseif (empty($message)) 
	 	{
	 		$msg4="<div class='error'> Enter Your Message </div>";	
	 	}
		elseif (strlen($message) < 3 ) 
	 	{
	 		$msg4="<div class='error'>Should be graeter than 3.  </div>";	
	 	}
        else
        {
            $sql = "INSERT INTO `messages`(`Name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
            $data = mysqli_query($con, $sql);
            if($data = true)
            {
                $msg="<script> alert('Message Send Successfully');</script>";
				if($msg)
				{
					header("Refresh: 0; url=contactus.php");
				}			
            }
            else
            {
                $msg="<div class='error'>*** Something is Wrong IN INSERT Query! </div>";
            }
        }
    }
?>


	<style type="text/css">
		.error
		{ 
			color: red;
		}
	</style>
</head>

<body>
	<?php 
		include_once 'include/searchbar.php';
		include_once 'include/header.php';
	?>

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Contact US</h1>
              <span class="color-text-a"> Feel Free to Contact Us</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Contact Us
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Contact Single ======= -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-map box">
              <div id="map" class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16836.708638793105!2d71.17661611114956!3d33.13993102669058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d87e0410bd5d87%3A0x3da70b755adbe595!2sSangathri%20Mitha%20Khel%2C%20Karak%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1605161437240!5m2!1sen!2s" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>
          </div>
          <div class="col-sm-12 section-t8">
            <div class="row">
              <div class="col-md-7">
                <form method="POST">
				<?php echo$msg;?>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="name" value="<?php echo $name;?>" class="form-control form-control-lg form-control-a" placeholder="Your Name">
                      </div>
					  <?php echo $msg1;?>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input name="email" type="email" value="<?php echo $email;?>" class="form-control form-control-lg form-control-a" placeholder="Your Email">
                      </div>
					  <?php echo $msg2;?>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="subject" value="<?php echo $subject;?>" class="form-control form-control-lg form-control-a" placeholder="Subject">
                      </div>
					  <?php echo $msg3;?>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message"><?php echo $message;?></textarea>
                        <div class="validate"></div>
                      </div>
					  <?php echo $msg4;?>
                    </div>
                    <div class="col-md-12 text-center">
                      <input type="submit" name="send" class="btn btn-a">
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="ion-ios-paper-plane"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title"> Contact Us On</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">Email.
                        <span class="color-a">MY_EstateAgency@gmail.com</span>
                      </p>
                      <p class="mb-1">Phone.
                        <span class="color-a">+92 347 0982480</span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="ion-ios-pin"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Find us in</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">
                        Sabar Abad Karak,
                        <br> KPK, Pakistan.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box">
                  <div class="icon-box-icon">
                    <span class="ion-ios-redo"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Social networks</h4>
                    </div>
                    <div class="icon-box-content">
                      <div class="socials-footer">
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="fa fa-dribbble" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Single-->

  </main><!-- End #main -->
<?php include_once "include/footer.php"; ?>

</body>

</html>