<?php 
session_start();
if (!isset($_SESSION['email']))
{
header ('location:admin_login.php');
}
?>

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
<!----- PHP SCRIPT To Check Password---------------->
<?php
$con=mysqli_connect("localhost","root","","digital_blood_bank");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$password=$_POST["password"];
$result1 = mysqli_query($con,"SELECT password  FROM login WHERE password = '$password'");
$row1 = mysqli_fetch_array($result1);
$check_password=$row1['password'];
?>
<!------PHP SRCIPT TO Check User_id END HERE------->


    <div class="header_container">
      <!--------Top Navigation Menu---------------->
      <div class="menu_bar_container">
        <div class="topnav" id="myTopnav">
          <a href="index.html" class="">Home</a>
          <a href="about_us.html">About Us</a>
          <a href="logout.php">Logout</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
           <p class="welcome_user"> Welcome - <?php echo $_SESSION['email'];?> </p>
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
        <span style="color: darkslateblue">Add Quantity</span>
      </h2>
      <hr />
    </div>
    <div class="contact_us_container">
      <div class="contact_us_inner" style="box-shadow:none;text-align:center;padding-bottom:50px;font-size:2vw;font_weight:bold;color:#6F6F6F">
    
    
    
<?php
      $con=mysqli_connect("localhost","root","","digital_blood_bank");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$password=$_POST["password"];
if($check_password==$password)
{
$result1 = mysqli_query($con,"SELECT email  FROM login WHERE password = '$password'");
$row1 = mysqli_fetch_array($result1);
$email=$row1['email'];
$result2 = mysqli_query($con,"SELECT bank_user_id  FROM bank_stock WHERE bank_user_id = '$email'");
$row2 = mysqli_fetch_array($result2);
$bank_id=$row2['bank_user_id'];
if($bank_id == $email)
{
        if(is_null($bank_id))
            { 
               echo "Password is Incorrect !!!!!";
            }
       else{
              $bloodgroup=$_POST["bloodgroup"];
              $result3 = mysqli_query($con,"SELECT stock  FROM bank_stock WHERE bank_user_id  = '$bank_id' and bloodgroup='$bloodgroup' ");
              $row3 = mysqli_fetch_array($result3);
              $stock=$row3['stock'];
              $quantity=$_POST["quantity"];
              mysqli_query($con,"UPDATE bank_stock SET stock = $stock+$quantity WHERE bank_user_id = '$bank_id' and bloodgroup='$bloodgroup' "); 
              echo "Updation Done successfully.";
            }
            }
else {
  echo "Password is Incorrect !!!!!";
}

}
else{
  echo "Password is Incorrect !!!!!!";
}

?>




      </div>
    </div>
    <div class="navigate_icon_content">
        <a href="bank_add_quantity.php" target="_self" title="Back"
        ><img src="img/go_back.png" class="go_back"
      /></a>
      <a href="adminbank_pannel.php" target="_self" title="Home"
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
