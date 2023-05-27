<?php
session_start();
$ses=$_SESSION['name'];
include("database.php");
$id=$_GET['id'];
?>


  
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
              <li><a href="index.html" class="active">HOME</a></li>
              <li><a href="admin.php">ADMIN</a></li>
              <li><a href="login.php">LOGIN</a></li>
              <li><a href="user.php">SIGN UP</a></li>
              <li><a href="contact.php">CONTACT</a></li>
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
   <div class="bid">

     <h1 class="ad">BIDDING FOR YOUR PRODUCT</h1>

     <form action="bidding_code.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
       <table width="100%" border="0">
     <?php
       $s=mysqli_query($con,"select * from add_products where p_id=$id ");
      while($row=mysqli_fetch_array($s))
      {
		 ?>
         <tr>
           <td>IMAGE</td>
           <td>:</td>
           <td  width="100%" height="100%"><img name="file" src="upload/<?php echo $row['image']; ?>" alt="" width="50" height="100" /></td>
         </tr>
         
         <tr>
           <td width="26%">PRODUCT NAME</td>
           <td width="7%">:</td>
           <td width="67%"><label for="p_name"></label>
            <input name="p_name" type="text" id="p_name" value="<?php echo $row['p_name']; ?>" size="30" readonly="readonly" /></td>
         </tr>
         <tr>
           <td>CATEGORIES</td>
           <td>:</td>
           <td><input name="catry" type="text" id="catry" value="<?php echo $row['category']; ?>" size="30" readonly="readonly" /></td>
         </tr>
         <tr>
           <td>PRICE</td>
           <td>:</td>
           <td><input name="price" type="text" id="price" value="<?php echo $row['price']; ?>" size="30" readonly="readonly" /></td>
         </tr>
         <tr>
           <td>BIDDING COST</td>
           <td>:</td>
           <td><input name="bid_price" type="text" id="bid_price" size="30" /></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td colspan="3"><h1>Personal Info</h1></td>
          </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>NAME</td>
           <td>:</td>
           <td><input name="name" type="text" id="name" size="30" /></td>
         </tr>
         <tr>
           <td>E-MAIL</td>
           <td>:</td>
           <td><input name="mail" type="text" id="mail" size="30" /></td>
         </tr>
         <tr>
           <td>ADDRESS</td>
           <td>:</td>
           <td><label for="add"></label>
            <textarea name="add" id="add" cols="24" rows="3"></textarea></td>
         </tr>
         <tr>
           <td>PONE NO</td>
           <td>:</td>
           <td><input name="ph" type="text" id="ph" size="30" /></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td><input type="submit" name="button" id="button" value="Submit" /></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>

         <?php
        }
      ?>
       </table>
     </form>
     <p>&nbsp;</p>
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
