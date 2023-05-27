

  
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
  

   <div class="mem-sign">

     <h1 class="ad">MEMBER SIGN UP </h1>

     <form id="form3" name="form3" method="post" action="user_register_code.php">
       <table width="100%" border="0" cellspacing="5">
          
          <tr>
           <td width="24%">FIRST NAME</td>
           <td >:</td>
           <td colspan="3"><label for="f_name"></label>
            <input name="f_name" type="text" id="f_name" size="30" required pattern="[a-zA-Z ]+"/></td>
         </tr>
         <tr>
           <td>LAST NAME</td>
           <td>:</td>
           <td colspan="3"><input name="l_name" type="text" id="l_name" size="30" required pattern=".{1,15}[a-zA-Z ]"/></td>
         </tr>
         <tr>
           <td>E-MAIL ID</td>
           <td>:</td>
           <td colspan="3"><input name="mail" type="text" id="mail" size="30" required="required" /></td>
         </tr>
         <tr>
           <td>PASSWORD</td>
           <td>:</td>
           <td colspan="3"><input name="pwd" type="password" id="pwd" size="30" /></td>
         </tr>
         <tr>
           <td>DATE OF BIRTH</td>
           <td>:</td>
           <td colspan="3"><input name="dob" type="text" id="dob" size="30" /></td>
         </tr>
         <tr>
           <td>GENDER</td>
           <td>:</td>
           <td colspan="3"><input type="radio" name="gen" required id="radio" value="male"  />
            <label for="gen">MALE
              <input type="radio" name="gen" required="required" id="radio2" value="female" />
            FEMALE</label></td>
         </tr>
         <tr>
           <td>ADDRESS</td>
           <td>:</td>
           <td colspan="3"><label for="add"></label>
            <textarea name="add" id="add" cols="24" rows="4"></textarea></td>
         </tr>
         <tr>
           <td>PHONE NO</td>
           <td>:</td>
           <td colspan="3"><input name="ph" type="text" id="ph" size="30" /></td>
         </tr>
         <tr>
           <td>&nbsp;</td>

           <td width="9%">&nbsp;</td>
           <td width="36%"><input type="submit" name="button" id="button" value="Submit" />
            <input type="reset" name="button2" id="button2" value="Reset" /></td>
           
         </tr>
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
