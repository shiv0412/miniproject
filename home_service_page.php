<?php
      $con=mysqli_connect("localhost","root","","digital_blood_bank");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT *  FROM blood_bank");

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
    <div class="form_main_container">
      <div class="form_heading_container">
        <center><p class="form_head_p">
          <h2>Registartion For Home Service</h2>
        </p></center>
      </div>
    </div>
    <!--------------Registration Form --------------->
    <div class="registration_form_container">
      <form class="row g-3 form_content" action="home_donar_recepit.php" method="POST" target="_blank">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Full Name*</label>
    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Full Name" name="name" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Mobile*</label>
    <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Mobile Number" name="mobile" required>
  </div>
   <div class="col-md-4">
    <label for="inputState" class="form-label">Gender*</label><br/>
    <select id="inputState" class="form-select select_option" name="gender" required>
      <option selected>Select Gender...</option>
      <option>Male</option>
      <option>Female</option>
      <option>Other</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">DOB</label>
    <input type="date" class="form-control" id="inputZip" name="dob" >
  </div>
     <div class="col-md-4">
    <label for="inputState" class="form-label">Blood Group*</label><br/>
    <select id="inputState" class="form-select select_option" name="bloodgroup" required>
      <option selected>Choose Blood Group</option>
      <option>A+</option>
      <option>B+</option>
      <option>A-</option>
      <option>AB-</option>
      <option>AB+</option>
      <option>O-</option>
      <option>O+</option>
      <option>B-</option>
    </select>
  </div>
  <div class="col-md-4">
  <label for="inputEmail4" class="form-label">Select Country</label><br/> 
  <select name="country" id="countySel" size="1" class="select_option" required>
<option value="" selected="selected">Select Country</option>
</select>
</div>
<div class="col-md-4">
<label for="inputEmail4" class="form-label">Select State</label><br/>
<select name="state" id="stateSel" size="1" class="select_option" required>
<option value="" selected="selected">Please select Country first</option>
</select>
</div>
<div class="col-md-4">
<label for="inputEmail4" class="form-label">Select City</label><br/>
 <select name="city" id="districtSel" size="1" class="select_option" required>
<option value="" selected="selected">Please select State first</option>
</select>
<closeform></closeform></div>
<div class="col-md-12">
    <label for="inputAddress" class="form-label">Select A Nearby Blood Bank*</label>
    <select name="bloodbank" class="select_option" required>
    <?php while($row1= mysqli_fetch_array($result)):;?>
    <option value="<?php echo $row1[1];?>"> <?php echo "$row1[1]";?> <?php echo "-";?>  <?php echo "$row1[7]";?> <?php echo "-";?> <?php echo "$row1[6]";?> </option>
    <?php endwhile;?>
</select>
  </div>
 <div class="col-md-8">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter Full Address" name="address" required>
  </div>
   <div class="col-md-4">
    <label for="inputAddress" class="form-label">Pincode</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter Pincode" name="pincode" required>
  </div>
   <div class="col-md-6">
    <label for="inputZip" class="form-label">Availablity Date 1*</label>
    <input type="date" class="form-control" id="inputZip" name="date1" required>
  </div>
   <div class="col-md-6">
    <label for="inputZip" class="form-label">Availablity Date 2</label>
    <input type="date" class="form-control" id="inputZip" name="date2">
  </div>
<div class="col-12" style="text-align: center;">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
    </div>
    <!---------Registration Form Container END-->

    <!--------Main Content Area Ends Here---------------------->

    <!-----------Navigation Icons ---------------------->
    <div class="navigate_icon_content">
      <a href="donar_donate_now.html" target="_self" title="Back"
        ><img src="img/go_back.png" class="go_back"
      /></a>
      <a href="index.html" target="_self" title="Home"
        ><img src="img/go_home.png" class="go_home"
      /></a>
    </div>
    <!-----------Navigation Icons End Here---------------------->

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
    <script>
var stateObject = {
"India": { "Uttar Pradesh": ["Ghaziabad","Muzaffarnagar","Meerut","Saharanpur" ],

"Haryana": ["work in progress"],
"Delhi": ["work in progress"],
"work in progress": ["work in progress"],
},
"England": {
"work in progress..": ["Work in Progress"],
"work in progress": ["Work in Progress"]
}, "Work in progress": {
"Work in progress": ["Work in Progress"],
"Work in progress": ["Work in Progress"]
},
}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel"),
districtSel = document.getElementById("districtSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}
countySel.onchange(); // reset in case page is reloaded
stateSel.onchange = function () {
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
var district = stateObject[countySel.value][this.value];
for (var i = 0; i < district.length; i++) {
districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
}
}
}
</script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
