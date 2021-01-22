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
        .form_content div {
    margin: 10px 0px 0px 0px;
  }
    .find {
    margin: 10px 0px 0px 0px;
  }
  #searchtable{
    width:100%;
    box-shadow: 2px 2px 10px 0px #383838;
  }
  #searchtable th {
  background-color:darkred;
  text-align: center;
  padding: 7px 0px 7px 0px;
  color: white;
  border: 2px solid white;
}
#searchtable td {
  text-align: center;
  border: 2px solid #7B7B7B ;
  padding: 4px 0px 4px 0px;
  font-family: 'Times New Roman', Times, serif;
  font-size:large;
  color: #353535;
}
#searchtable tr:nth-child(odd) {
  background-color:#F7E8E6;
}
.seach_table_container {
  width: 100%;
}
.search_inner_cont {
  width: 85%;
  margin: auto;
  padding-bottom: 70px;
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
      <div class="form_main_container" style="padding-bottom: 10px;">
      <div class="form_heading_container">
        <center><p class="form_head_p">
          <h2>Check Blood Stock</h2>
        </p></center>
      </div>
    </div>
      <div class="search_page_form_con">
       <div class="registration_form_container">
      <form class="row g-3 form_content" action="nearby_bank_stocks.php"  method="POST">

  <div class="col-12">
    <label for="exampleInputEmail1" class="form-label">Bank Name</label>
     <select name="bloodbank" class="select_option" required>
              <?php while($row1= mysqli_fetch_array($result)):;?>
              <option value="<?php echo $row1[1];?>">
                <?php echo "$row1[1]";?>
                <?php echo "-";?>
                <?php echo "$row1[7]";?>
                <?php echo "-";?>
                <?php echo "$row1[6]";?>
              </option>
              <?php endwhile;?>
            </select>
  </div>

  
<div class="col-12" style="text-align: center;">
    <button type="submit" class="btn btn-primary find" name="search">Check</button>
  </div>
</form>
    </div>
    </div>
    <!--------Main Content Area Ends Here---------------------->
<!--------PHP Code starts Here-->

 <div class="search_table_container"> 
   <div class="search_inner_cont">
     <div><p style="text-align: center; font-size:2vw;font-family: 'Times New Roman', Times, serif;color:#9D9D9D ">Your Search Matches...</p></div>
<table id="searchtable" class="">
<tr>
    <th>Bank Name</th>
<th>Blood Group</th>
<th>Stock ( ml )</th>
<th>Bank Status</th>
</tr>
<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("digital_blood_bank", $conn);
//search code
//error_reporting(0);
if(isset($_REQUEST['search'])){
$bloodbank = $_POST['bloodbank'];
if(empty($bloodbank)){
	$make = '<h4>You must user_id to search!</h4>';
}
else{
	$make = '<h4>No match found!</h4>';
    $sele = "SELECT b.Bank_Name,bs.bloodgroup,bs.stock,bs.status FROM bank_stock bs join blood_bank b on bs.bank_user_id = b.Email WHERE b.Bank_Name LIKE '$bloodbank' ";
    

	$result = mysql_query($sele);
	echo "<tbody>";
	echo "<tr>";
		if($mak = mysql_num_rows($result) > 0){
		$row=1;
		while($row = mysql_fetch_assoc($result)){
         echo "<td>";echo $row['Bank_Name'];echo "</td>";
        echo "<td>";echo $row['bloodgroup'];echo "</td>";
        echo "<td>";echo $row['stock'];echo "</td>";
        echo "<td>";echo $row['status'];echo "</td>";
     echo "</tr>";
	 echo "</tbody>";
		
		}   	 
		 
		
}
else{
echo'<h2> Search Result</h2>';
print ($make);
}
mysql_free_result($result);
mysql_close($conn);
}
}
?>
</table>
</div>
</div>

<!--------PHP Code ENDS Here-->














      <div class="navigate_icon_content">
      <a href="receiver.html" target="_self" title="Back"
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
"India": { "Uttar Pradesh": ["Meerut", "Muzaffarnagar","Ghaziabad","Saharanpur"],
"Haryana": ["Work in Progress"],
"Delhi": ["Work in Progress"],
"Punjab": ["Work in Progress"]
},
"Australia": {
"Work in Progress": ["Work in Progress"],
"Work in Progress": ["Work in Progress"]
},"Work in Progress": {
"Work in Progress": ["Work in Progress"],
"Work in Progress": ["Work in Progress"]
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
