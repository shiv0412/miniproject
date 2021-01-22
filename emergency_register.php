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
    .receipt_button input{
      background-color:#1596D8;
      color:white;
      padding:10px 10px 10px 10px;
      font-weight:bold;
      border:none;
    }
    .receipt_button input:hover{
      background-color:#0A608D;
      border:none;
      cursor: grab;
    }
    </style>
  </head>
  <body>
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
      <div class="cover_image_container">
        <h1>Digital Blood Bank</h1>
      </div>
    </div>
     <!--------Top Navigation Menu End---------------->
    <!--------Main Content Area---------------------->
    <div style="width:70%;margin:auto" class="receipt_button">
    <p style="margin-top:90px;margin-bottom:130px; font-size:20px;color:#676767;text-align:center;">
    Congratulations For Being A Life Saver...You are now shown to nearby Blood Receivers.
    <br/><br/>
    <a href="index.html"><input type="button" value="Home"></a>
</p>
</div>
    <!--------Main Content Area Ends Here---------------------->
     <div class="navigate_icon_content">
      <a href="donar.html" target="_self" title="Back"
        ><img src="img/go_back.png" class="go_back"
      /></a>
      <a href="index.html" target="_self" title="Home"
        ><img src="img/go_home.png" class="go_home"
      /></a>
    </div>
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

<?php
mysql_connect("localhost","root","") or die("unable to connect");
mysql_select_db("digital_blood_bank") or die("unable to find database");
$a=$_POST["name"];
$b=$_POST["mobile"];
$c=$_POST["gender"];
$d=$_POST["dob"];
$e=$_POST["bloodgroup"];
$f=$_POST["country"];
$g=$_POST["state"];
$h=$_POST["city"];
$i=$_POST["address"];
$j=$_POST["pincode"];
$sql = "INSERT INTO `digital_blood_bank`.`emergency_donar` 
(`name`, `mobile`, `gender`, `dob`, `bloodgroup`, `country`, `state`,`city`,`address`,`pincode` ) 
VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j');";
mysql_query($sql);
mysql_close();
?>

    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
