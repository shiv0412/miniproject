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
    You Blood Bank is Successfully Registered....
    <br/><br/>
    <a href="admin_login.php" target="_blank"><input type="button" value="Login Now"></a>
</p>
</div>
    <!--------Main Content Area Ends Here---------------------->
     <div class="navigate_icon_content">
      <a href="bloodbank_register.html" target="_self" title="Back"
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

$password=$_POST["password"];
$email=$_POST["email"];


$result123="SELECT password FROM login where password='$password' ";
$row123 = mysql_query($result123);
$get=mysql_fetch_array($row123);
$check_pass=$get['password'];

//echo "$check_pass";

$result1234="SELECT email FROM login where email='$email' ";
$row1234 = mysql_query($result1234);
$get1=mysql_fetch_array($row1234);
$check_email=$get1['email'];
//echo "$check_email";


if($check_pass == $password ){
   $script = file_get_contents('Notregisterbankredirect.js');
   echo "<script>".$script."</script>";
}
else {
  if ($check_email == $email )
  {
     $script = file_get_contents('emailalreadytaken.js');
   echo "<script>".$script."</script>";
  }
  else {
     
    mysql_connect("localhost","root","") or die("unable to connect");
mysql_select_db("digital_blood_bank") or die("unable to find database");
$a=$_POST["name"];
$b=$_POST["mobile"];
$c=$_POST["person"];
$d=$_POST["email"];
$e=$_POST["country"];
$f=$_POST["state"];
$g=$_POST["city"];
$h=$_POST["address"];
$i=$_POST["pincode"];
$sql = "INSERT INTO `digital_blood_bank`.`blood_bank` 
(`Bank_Name`, `Contact_No`, `Contact_Person`, `Email`, `Country`, `State`, `City`,`Address`,`Pincode` ) 
VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i');";
mysql_query($sql);
mysql_close();

mysql_connect("localhost","root","") or die("unable to connect");
mysql_select_db("digital_blood_bank") or die("unable to find database");
$exec="SELECT Bank_id FROM blood_bank order by Bank_id desc limit 1";
$result = mysql_query($exec);
$row = mysql_fetch_array($result);
$id=$row['Bank_id'];
$j=$_POST["email"];
$k=$_POST["password"];
$sql = "INSERT INTO `digital_blood_bank`.`login` 
(`bank_id`, `email`, `password`) 
VALUES ('$id','$j','$k');";
mysql_query($sql);
mysql_close();


mysql_connect("localhost","root","") or die("unable to connect");
mysql_select_db("digital_blood_bank") or die("unable to find database");
$exec="SELECT Bank_id FROM blood_bank order by Bank_id desc limit 1";
$result = mysql_query($exec);
$row = mysql_fetch_array($result);
$id=$row['Bank_id'];
$j=$_POST["email"];

for($x = 0; $x <=7; $x++){
if($x == 0)
{
  $bloodgroup="A+";
  $sql_0 = "INSERT INTO `digital_blood_bank`.`bank_stock` (`bank_id`, `bank_user_id`, `bloodgroup`) VALUES ('$id','$j','$bloodgroup');";
  mysql_query($sql_0);
}
elseif($x == 1)
{
  $bloodgroup="A-";
  $sql_1 = "INSERT INTO `digital_blood_bank`.`bank_stock` (`bank_id`, `bank_user_id`, `bloodgroup`) VALUES ('$id','$j','$bloodgroup');";
  mysql_query($sql_1);
}
elseif($x == 2)
{
  $bloodgroup="B+";
  $sql_2 = "INSERT INTO `digital_blood_bank`.`bank_stock` (`bank_id`, `bank_user_id`, `bloodgroup`) VALUES ('$id','$j','$bloodgroup');";
  mysql_query($sql_2);
}
elseif($x == 3)
{
  $bloodgroup="B-";
  $sql_3 = "INSERT INTO `digital_blood_bank`.`bank_stock` (`bank_id`, `bank_user_id`, `bloodgroup`) VALUES ('$id','$j','$bloodgroup');";
  mysql_query($sql_3);
}
elseif($x == 4)
{
  $bloodgroup="AB+";
  $sql_4 = "INSERT INTO `digital_blood_bank`.`bank_stock` (`bank_id`, `bank_user_id`, `bloodgroup`) VALUES ('$id','$j','$bloodgroup');";
  mysql_query($sql_4);
}
elseif($x == 5)
{
  $bloodgroup="AB-";
  $sql_5 = "INSERT INTO `digital_blood_bank`.`bank_stock` (`bank_id`, `bank_user_id`, `bloodgroup`) VALUES ('$id','$j','$bloodgroup');";
  mysql_query($sql_5);
}
elseif($x == 6)
{
  $bloodgroup="O+";
  $sql_6 = "INSERT INTO `digital_blood_bank`.`bank_stock` (`bank_id`, `bank_user_id`, `bloodgroup`) VALUES ('$id','$j','$bloodgroup');";
  mysql_query($sql_6);
}
else{
  $bloodgroup="O-";
  $sql_7 = "INSERT INTO `digital_blood_bank`.`bank_stock` (`bank_id`, `bank_user_id`, `bloodgroup`) VALUES ('$id','$j','$bloodgroup');";
  mysql_query($sql_7);
}
}

mysql_close();
  }
 
}

?>



<!-----------------Stock Table Entry---------------->


<!-----------------Stock Table Entry End---------------->

    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
