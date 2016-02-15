
<?php
error_reporting(E_ALL);
session_start();
$array=$_SESSION['menu'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Contact-Us</title>
  <!-- Stylesheets -->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="js/masterslider/style/masterslider.css">
  <link rel="stylesheet" href="js/masterslider/skins/black-2/style.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!--[if IE 9]>
	<script src="js/media.match.min.js"></script>
  <![endif]-->
</head>

<body>
  <div id="main-wrapper">
   <?php include('header.php');?>
    <!-- end #header -->

    <div class="page-content">
      <div class="map-section">
        <div id="map_canvas"></div>

      </div>
      <!-- end .map-section -->
      <div class="contact-us">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="contact-details">
                <h4>Contact Details</h4>
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <h5>Reach Us Here:</h5>
                    <div class="address clearfix">
                      <p><i class="fa fa-map-marker"></i>
                      </p>
                      <p>Greater Kailash (GK) 1,<br>New Delhi</p>
                    </div>
                    <div class="time-to-open clearfix">
                      <p><i class="fa fa-clock-o"></i>
                      </p>
                      <p>
                        <strong>Monday - Sunday:</strong>7 PM to 4 AM<br>
                      </p>
                    </div>
                    <div class="time-to-open clearfix">
                      <p><i class="fa fa-subway"></i>
                      </p>
                      <p>
                        <strong>Nearest Metro:</strong>1.6 km(Kailash Colony), 1.9 km(Nehru Place)
                      </p>
                    </div>
                  </div>


                  <!-- end .grid-layout -->
                </div>
                <!-- end nasted .row -->
              </div>
              <!-- end .contact-details -->
            </div>
            <!-- end .main-grid-layout -->

            <div class="col-md-6">
              <div class="send-message">
                <h4>Send Us a Message</h4>
                <form>
                  <div class="row">
                    <div class="col-md-12">
                      <input type="text" placeholder="Name*">
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <input type="email" placeholder="Email*">
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <input type="text" placeholder="Phone">
                    </div>
                  </div>
                  <!-- end nasted .row -->
                  <textarea placeholder="Your message"></textarea>
                  <button><i class="fa fa-paper-plane-o"></i> Submit Message</button>
                </form>
              </div>
              <!-- end .send-message -->
            </div>
            <!-- end .main-grid-layout -->
          </div>
          <!-- end .row -->
        </div>
        <!-- end .container -->
      </div>
      <!-- end .contact-us -->
    </div>
    <!-- end page-content -->

    <!--footer start-->
    <footer id="footer">


      <div class="footer-copyright">
        <div class="container">
          <p>Copyright 2016 © Baking Bad. All rights reserved.</p>
          <ul class="footer-social">
            <li><a href="#"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-twitter-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-google-plus-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-pinterest-square"></i></a>
            </li>
          </ul>
          <!-- end .footer-social -->
        </div>
      </div>
    </footer>
    <!-- end #footer -->
  </div>
  <!-- end #main-wrapper -->
  <!-- Scripts -->
  <!-- CDN jQuery -->
  <?php include('footer.php');?>

</body>
</html>
