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
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
      }
    </style>
  </head>
  <body>
    <div class="header_container">
      <!--------Top Navigation Menu---------------->
      <div class="menu_bar_container">
        <div class="topnav" id="myTopnav">
          <a href="index.html" class="">Home</a>
          <a href="about_us.html">About Us</a>
          <a href="password_update.php">Change Password</a>
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
      <h2>Blood Bank Admin Pannel</h2>
      <hr style="margin-bottom: 60px" />
      <div class="service_containers">
        <a href="update_stock_admin.php" target="_self">
          <div>
            <img src="img/stock.png" />
            <h3>Update Stock</h3>
          </div>
        </a>
      </div>
      <div class="service_containers">
        <a href="check_stock.php" target="_self">
          <div>
            <img src="img/checkstock.png" />
            <h3>Check Stock</h3>
          </div>
        </a>
      </div>
      <div class="service_containers">
        <a href="update_status_admin.php">
          <div>
            <img src="img/open.png" />
            <h3>Change Status</h3>
          </div>
        </a>
      </div>
      <div class="service_containers">
        <a href="admin_hdonar_check.php">
          <div>
            <img src="img/house.png" />
            <h3>Home Donar List</h3>
          </div>
        </a>
      </div>
      <div class="service_containers">
        <a href="admin_bdonar_check.php">
          <div>
            <img src="img/bdonar.png" />
            <h3>Bank Donar List</h3>
          </div>
        </a>
      </div>
      <div class="service_containers">
        <a href="bank_search_query.php">
          <div>
            <img src="img/message.png" />
            <h3>Queries</h3>
          </div>
        </a>
      </div>
    </div>
    <div class="navigate_icon_content">
      <a href="admin_login.php" target="_self" title="Back"
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
