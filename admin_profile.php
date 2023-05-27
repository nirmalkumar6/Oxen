
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>OXEN</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="admin_profile.php" class="active">MEMBERS</a></li>
              <li><a href="bidding_details.php">BIDDINGS</a></li>
              <li><a href="view_product.php">PRODUCTS</a></li>
              <li><a href="add_product.php">ADD PRODUCTS</a></li>
              <li><a href="admin.php">LOGOUT</a></li>
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- about section -->
  <div class="main">    
  <div class="mem-list">

      <h1 class="ad">MEMBERS LIST</h1>

      <form action="add_product_code.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
        <table width="100%" border="0">
          <tr>
            
            </tr>
            <?php
    include 'database.php';

    $select="SELECT * FROM user_registration";
    $qry=mysqli_query($con,$select);
    $i=0;

    while ($row=mysqli_fetch_assoc($qry))
    {
    $id= $row['user_id'];
    $Name= $row['f_name'];
    $email= $row['email'];
    $phone= $row['phone'];
    $add=$row['address'];

    ?>
        <tr>
        <?php echo "
      <td>$Name</td>
        <td> $email</td>
        <td>$phone</td>
      <td>$add</td>
      <td><a href='admin_delete.php?id=$id'>DELETE</a></td>

        ";?>
        </tr>
        <?php

    }
      ?>

          </table>
        </form>
        <p>&nbsp;</p>
      </div>

  </div>
</div>

   
  <!-- end about section -->


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">
              OXEN
            </div>
            <p>It is application software, that can either be deployed on a desktop, on a web server or as a smart contract on a blockchain virtual machine.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="admin.php">Admin</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-us">
            <div class="info_form ">
              <h4>
                NEWSLETTER
              </h4>
                <address>
                Write a mail for newsletter <a href="mailto:webmaster@example.com">nirmalkumar@gmail.com</a> 
                </address>
              <div class="social_box">
                <a href="">
                  <img src="images/info-fb.png" alt="">
                </a>
                <a href="">
                  <img src="images/info-twitter.png" alt="">
                </a>
                <a href="">
                  <img src="images/info-linkedin.png" alt="">
                </a>
                <a href="">
                  <img src="images/info-youtube.png" alt="">
                </a>
              </div>
            </div>
           
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="sub-footer">
            <p>Copyright © 2023 All Rights Reserved.
            <br></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>
