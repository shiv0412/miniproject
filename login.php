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
      .loginagain_button button{
          background-color:#FC3737;
          border:1px solid lightblue;
          color:white;
          padding:5px 10px 5px 10px;
          margin-top:30px;
          border-radius:5px;
      }
       .loginagain_button button:hover{
           background-color:#109ABD;
       }
    </style>
  </head>
  <body>
<!----- PHP SCRIPT To Check User_id---------------->
<?php
$con=mysqli_connect("localhost","root","","digital_blood_bank");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$email_r=$_POST["email"];
$password_r=$_POST["password"];
$result1 = mysqli_query($con,"SELECT email  FROM login WHERE email = '$email_r' and password = '$password_r'");
$result2 = mysqli_query($con,"SELECT password  FROM login WHERE email = '$email_r' and password = '$password_r'");
$row1 = mysqli_fetch_array($result1);
$row2 = mysqli_fetch_array($result2);
$email_c=$row1['email'];
$password_c=$row2['password'];
?>
<!------PHP SRCIPT TO Check User_id END HERE------->


    <div class="header_container">
      <!--------Top Navigation Menu---------------->
      <div class="menu_bar_container">
        <div class="topnav" id="myTopnav">
          <a href="index.html" class="">Home</a>
          <a href="contact_us_form.php">Contact Us</a>
          <a href="about_us.html">About Us</a>
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
        <span style="color: darkslateblue">Admin Login</span>
      </h2>
      <hr />
    </div>
    <div class="contact_us_container">
      <div class="contact_us_inner" style="box-shadow:none;text-align:center;padding-bottom:50px;font-size:1.5vw;font_weight:bold;color:#6F6F6F">
       

<?php
mysql_connect("localhost","root","") or die("unable to connect");
mysql_select_db("digital_blood_bank") or die("unable to find database");
$email=$_POST["email"];
$password=$_POST["password"];

if( $email_c==$email && $password_c==$password  )
{

 $script = file_get_contents('loginredirect.js');
   echo "<script>".$script."</script>";


}
else{
    echo "Login Unsuccessfull.Email or Password is wrong.Type correct email or password.";
}
?>
<a href="admin_login.html" class="loginagain_button">
<button>Re-Login</button></a>
      </div>
    </div>
    <div class="navigate_icon_content">
        <a href="admin_login.html" target="_self" title="Back"
        ><img src="img/go_back.png" class="go_back"
      /></a>
      <a href="index.html" target="_self" title="Home"
        ><img src="img/go_home.png" class="go_home"
      /></a>
    </div>
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
