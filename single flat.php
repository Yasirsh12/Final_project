<?php 
	$Page_title='FLAT';
	include_once 'include/head.php';
	include_once 'include/dbconn.php';
	
	$msg=$msg01=$msg02=$msg03=$msg04='';
	$name= $email=$contact_no=$message='';
	
	$id=$_GET['f_id'];
	$query="SELECT * FROM `flats` WHERE `id`='$id'";
	$run=mysqli_query($con,$query);
	$result=mysqli_fetch_array($run);
	
	$u_id = $result['u_id'];
	$query1="SELECT * FROM `Users` WHERE `id`='$u_id'";
	$run1=mysqli_query($con,$query1);
	$User_info=mysqli_fetch_array($run1);
	
	if(isset($_POST['send']))
    {
        $name       = $_REQUEST['name'];
        $email      = $_REQUEST['email'];
        $contact_no = $_REQUEST['contact_no'];
        $message    = $_REQUEST['message'];
		$date 		= date('d-m-y h:ia');
		$p_id		= $result['id'];
		
		if (empty($name)) 
	 	{
	 		$msg01="<div class='error'> Enter Your Name</div>";	
	 	}
		elseif (!preg_match("/^[a-zA-Z -]*$/",$name)) 
	 	{
	 		$msg01="<div class='error'>Only Letters are Allowed </div>";	
	 	}
		elseif(empty($email)) 
	 	{
	 		$msg02="<div class='error'> Email is Required</div>";	
	 	}
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	 	{
	 		$msg02="<div class='error'> Invalid Email Address </div>";	
	 	}
		elseif(empty($contact_no)) 
	 	{
	 		$msg03="<div class='error'>Contact Number is Required</div>";	
	 	}
		elseif (!is_numeric($contact_no)) 
	 	{
	 		$msg03="<div class='error'>Only Digit are Allowed </div>";	
	 	}
		elseif(empty($message)) 
	 	{
	 		$msg04="<div class='error'>Message is Required</div>";	
	 	}
		elseif (strlen($message) < 2) 
	 	{
	 		$msg04="<div class='error'>Should contain Atleast 3 Letters  </div>";	
	 	}
		else
		{
			$sql = "INSERT INTO `comments`(`Name`, `email`, `contact_no`, `comments`, `date`, `p_id`) VALUES ('$name','$email','$contact_no','$message','$date','$p_id')";
            $data = mysqli_query($con, $sql);
            if($data = true)
            {
                $msg="<script> alert('Message Sent Successfully');</script>";
				if($msg)
				{
					header("Refresh: 0; url=single flat.php?f_id=".$id);
				}					
            }
            else
            {
                $msg="<div class='error'>*** Something is Wrong IN INSERT Query! </div>";
            }
		}
	}

?>

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
              <h1 class="title-single">FLAT</h1>
              <span class="color-text-a"><?php echo $result['location'];?></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="all flats.php">FLATS</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  FLAT
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
              <div class="carousel-item-b">
                <img src="admin/property images/<?php echo $result['pic']; ?>" height="500" alt="Property Image">
              </div>
              <div class="carousel-item-b">
                <img src="admin/property images/<?php echo $result['pic2']; ?>" height="500" alt="Property Image 2">
              </div>
            </div>
            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <span class="ion-money">Rs</span>
                    </div>
                    <div class="card-title-c align-self-center">
                      <h5 class="title-c"><?php echo $result['price'];?></h5>
                    </div>
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Quick Summary</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Property ID:</strong>
                        <span><?php echo $result['id'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Location:</strong>
                        <span><?php echo $result['location'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Property Type:</strong>
                        <span>FLAT</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Status:</strong>
                        <span><?php echo $result['status'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Area:</strong>
                        <span><?php echo $result['area'];?>
                          <sup>marla</sup>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Beds:</strong>
                        <span><?php echo $result['rooms'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Baths:</strong>
                        <span><?php echo $result['bathrooms'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Garage:</strong>
                        <span><?php echo $result['garage'];?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Property Description</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    <?php echo $result['discription'];?>
                  </p>
                </div>
                <div class="row section-t3">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Location</h3>
                    </div>
                  </div>
                </div>
                <div class="amenities-list color-text-a">
					<?php $loc=$result['location']; ?>
					<iframe width="700" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo $loc;?>&amp;sspn=33.984987,77.607422&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo $loc;?>&amp;z=12&amp;output=embed"></iframe>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-12">
            <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Contact OWNER</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <img src="admin/user images/<?php echo $User_info['image']; ?>" alt="Agent Image" class="img-fluid">
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="property-agent">
                  <h4 class="title-agent"><?php echo $User_info['Name'];?></h4>
                  <p class="color-text-a">
                   MY Estate Agency provide Online Support for the User to sell and Buy his property. When a user want's to buy or take the on Rent he will contact us. We will provide the best property with mininium time.<br>
				   Feel Free To Contact
                  </p>
                  <ul class="list-unstyled">
                    <li class="d-flex justify-content-between">
                      <strong>Mobile:</strong>
                      <span class="color-text-a"><?php echo $User_info['contact_no'];?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Email:</strong>
                      <span class="color-text-a"><?php echo $User_info['email'];?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Location:</strong>
                      <span class="color-text-a"><?php echo $User_info['Address'];?></span>
                    </li>
                  </ul>
                  <div class="socials-a">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-dribbble" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-4">
                <div class="property-contact">
                 <form class="form-a" method="POST">
					<?php echo $msg;?>
                    <div class="row">
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input type="text" class="form-control form-control-lg form-control-a" minlength="3" name="name" placeholder="Name *" value="<?php echo $name;?>" autocomplete="off" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input type="email" class="form-control form-control-lg form-control-a" name="email" placeholder="Email *" value="<?php echo $email;?>" required>
                        </div>
                      </div>
					  <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input type="text" class="form-control form-control-lg form-control-a" minlength="11" maxlength="11" name="contact_no" placeholder="Phone Number *" value="<?php echo $contact_no;?>" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <textarea id="textMessage" class="form-control" placeholder="Message *" minlength="3" rows="3" name="message" required><?php echo $message;?></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" name="send" class="btn btn-a">Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->

  <?php include_once "include/footer.php";?>
</body>

</html>