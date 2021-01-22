<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css1/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
  <title>lifesaver donation camps</title>
  <style>
    #recepit_table{
      width:70%;
      margin:auto;
      border:1px solid black;
    }
    #recepit_table th{
      padding:15px 0px 15px 0px;
      border-left:none;
      border-right:none;
      border-top:none;
      border-bottom:1px solid black;
    }
    #recepit_table tr{
      border:none;
    }
    #recepit_table td{
      padding:10px 0px 10px 0px;
    }
    .receipt_button{
      text-align:center;
      margin-top:40px;
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

    .receipt_left_bod{
      border-right:1px solid black;
      border-left:none;
      border-top:none;
      border-bottom:none;

    }
    .receipt_bod{
      border:none;
    }
  </style>
  </head>
<body>
  <div style="width:100%;margin-top:50px;">
  <div class="Receipt_header" style="text-align:center; width:49%;margin:auto;border:1px solid black;">
    <h2>Digital Blood Bank</h2>
    <h3>Home Donar Receipt</h3>
    <p style="margin-top:10px;">Congratulations.You are a lifesaver.Our blood bank exective will reach you soon..</p>
   </div></div>
  <div style="width:100%;">
  <div style="width:70%;margin:auto;text-align:center;">
<?php
$con=mysqli_connect("localhost","root","","digital_blood_bank");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT h_id  FROM home_donar order by h_id desc limit 1");
$row = mysqli_fetch_array($result);
$id=$row['h_id'];
$id++;
?>
<?php
mysql_connect("localhost","root","") or die("unable to connect");
mysql_select_db("digital_blood_bank") or die("unable to find database");
$a=$_POST["name"];
$b=$_POST["mobile"];
$c=$_POST["gender"];
$d=$_POST["dob"];
$e=$_POST["bloodgroup"];
$f=$_POST["state"];
$g=$_POST["city"];
$h=$_POST["bloodbank"];
$i=$_POST["address"];
$j=$_POST["pincode"];
$k=$_POST["date1"];
$l=$_POST["date2"];
$sql = "INSERT INTO `digital_blood_bank`.`home_donar` (`name`, `mobile`, `gender`, `dob`, `bloodgroup`, `state`, `city`, `blood_bank`,`address`,`pincode`,`available_date1`,`available_date2`)
VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l');";
mysql_query($sql);
mysql_close();
?>
<?php
$con=mysqli_connect("localhost","root","","digital_blood_bank");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT h_id,register_date,name,blood_bank,gender,bloodgroup,available_date1,available_date2  FROM home_donar where h_id='$id'");
echo "<table border='1' id='recepit_table'>
<tr>
<th>Donar Details</th>
<th></th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td class='receipt_left_bod'>". "Donar Id :" . "</td>";
echo "<td class='receipt_bod'>". $row['h_id'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='receipt_left_bod'>". "Registration Date :" . "</td>";
echo "<td class='receipt_bod'>" . $row['register_date'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='receipt_left_bod'>". "Donar Name :" . "</td>";
echo "<td class='receipt_bod'>" . $row['name'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='receipt_left_bod'>". "Registered Blood Bank Name :" . "</td>";
echo "<td class='receipt_bod'>" . $row['blood_bank'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='receipt_left_bod'>". "Donar Gender :" . "</td>";
echo "<td class='receipt_bod'>" . $row['gender'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='receipt_left_bod'>". "bloodgroup :" . "</td>";
echo "<td class='receipt_bod'>" . $row['bloodgroup'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='receipt_left_bod'>". "Availablity Date1 :" . "</td>";
echo "<td class='receipt_bod'>" . $row['available_date1'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td class='receipt_left_bod'>". "Availablity Date2 :" . "</td>";
echo "<td class='receipt_bod'>" . $row['available_date2'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</div>
<div class="receipt_button">
<input type="button" onclick="window.print()" value="Print Receipt">
<a href="index.html"><input type="button" value="Home"></a>
</div>
</div>
	 <script src="js1/jquery-3.4.1.js"></script>
   <script src="js1/bootstrap.min.js"></script>
  </body>
</html>