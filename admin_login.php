<?php 
session_start();
?>


<!----- PHP SCRIPT To Check User_id---------------->
<?php
$con=mysqli_connect("localhost","root","","digital_blood_bank");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['submit'])) {
$email=$_POST['email'];
$password=$_POST['password'];

$email_search = " SELECT * from login where email = '$email' " ;
$query = mysqli_query($con,$email_search);

$email_count = mysqli_num_rows($query);

if($email_count) {
  $email_pass = mysqli_fetch_assoc($query);
  $db_pass = $email_pass['password'];

  $_SESSION['email'] = $email_pass['email'];
   
  if( $password == $db_pass ) {
   
  ?>
  <script>
    location.replace("adminbank_pannel.php");
  </script>

  <?php

  } else {
      ?>
<script>
 alert ("Password is Incorrect !!!!!") ;
</script>
  <?php
  }

} else {
  ?>
<script>
 alert ("Email is Incorrect !!!!!") ;
</script>
  <?php
}

}

?>
<!------PHP SRCIPT TO Check User_id END HERE------->


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width , initial-scale=1" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="index.css" />
    <style>
      .service_containers {
        width: 50%;
      }
      .service_containers div {
        width: 50%;
      }

      @media (max-width: 767px) {
        .service_containers {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <div class="header_container">
      <!--------Top Navigation Menu---------------->
      <div class="menu_bar_container">
        <div class="topnav" id="myTopnav">
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
      </div>
      <!--------Top Navigation Menu End---------------->
      <!--------Main Content Area---------------------->
      <div class="cover_image_container">
        <h1>Digital Blood Bank</h1>
      </div>
    </div>
    <div class="main_content_container">
      <h2>
        <span style="color: darkslateblue">Admin Pannel Login</span>
      </h2>
      <hr />
    </div>
    <div class="contact_us_container">
      <div class="contact_us_inner">
        <form
          action=" <?php echo htmlentities($_SERVER['PHP_SELF']); ?> "
          method="POST"
          class="contact_us_form"
        >
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email*</label>
            <input
              type="text"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              placeholder="Enter your email"
              required
              name="email"
            />
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
              >Password*</label
            >
            <input
              type="password"
              class="form-control"
              id="exampleInputPassword1"
              placeholder="Enter your password"
              required
              name="password"
            />
          </div>


         <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">
            <span>Not Have An Account <a href="bloodbank_register.html">Register Blood Bank Here</a></span>
            </label>
          </div>



          <center>
            <button type="submit" class="btn btn-primary" name = "submit">Login</button>
          </center>
        </form>
      </div>
    </div>

    <div class="navigate_icon_content"></div>
    <!--------Main Content Area Ends Here---------------------->
    <!--------Footer Area-------------------------------------->
    <div class="footer_container">
      <div class="footer_content">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <center>
            <table>
              <tr>
                <td>
                  <h4>Reach Us At</h4>
                  <center><hr /></center>
                </td>
              </tr>
              <tr>
                <td>NH-24,Near Crossing Republic</td>
              </tr>
              <tr>
                <td>Ghaziabad,Uttar Pradesh</td>
              </tr>
              <tr>
                <td>Pin-201002</td>
              </tr>
            </table>
          </center>
        </div>
        <div
          class="col-sm-12 col-md-6 col-lg-6"
          style="border-left: 1px solid #ddd"
        >
          <center>
            <table>
              <tr>
                <td>
                  <h4>Contacts</h4>
                  <center><hr /></center>
                </td>
              </tr>
              <tr>
                <td>tel-9000000000</td>
              </tr>
              <tr>
                <td>Email-bloodbank@mail.com</td>
              </tr>
            </table>
          </center>
        </div>
        <div class="copyright"><p>2021 &copy Digital Blood Bank</p></div>
      </div>
    </div>
    <!--------Footer Area End HEre-------------------------------------->
    <!-- -------------End Of Html5 Content ---------------->
    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
