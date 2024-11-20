<html >
<head>
<title>Document Management System</title>
<style>
input {font-size:14;font-weight:bold
border:1px solid black;
border-radius:6px;
text-align:center;
}
body {
	font-size:14;
	font-weight:bold;
	background-color: rgb(0, 128, 128);
 } 
table{
text-align:left;
padding:4;
border:10px solid grey;
border-radius:8px;




</style>
</head><body bgcolor=c0c078><center>
<?php
session_start();
require_once"config.php";

if (isset($_SESSION['user'])) {
// ------------------import labels --------------------
$lbl='SELECT * FROM table1';

$labelz=mysql_query("$lbl");

$rowlbl = mysql_fetch_array($labelz);

// ----------------------------------------------
$sql='SELECT * FROM table1 where id=1';

$result=mysql_query("$sql");
if (!$result) {echo "no results found ".mysql_error(); exit();} 

echo "<h2>Editing labels</h2><form  method=post name=gooedit action='edtlbls.php' >";
while($row = mysql_fetch_array($result))
  {
echo "<table width=50% ><tr><td><h3>";


if (!empty($row[1])) { echo $rowlbl['field1']." :<input type=text value='$row[1]' name=field1 ><br><br>";} 
if (!empty($row[1])) { echo $rowlbl['field2']."<input type=text value='$row[2]' name=field2 ><br><br>";} 
if (!empty($row[3])) { echo $rowlbl['field3'].":<input type=text value='$row[3]' name=field3><br><br>";} 
if (!empty($row[4])) { echo $rowlbl['field4'].":<input type=text value='$row[4]' name=field4><br><br>";} 
if (!empty($row[5])) { echo $rowlbl['field5'].":<input type=text value='$row[5]' name=field5><br><br>";} 

if (!empty($row[6])) { echo $rowlbl['field6']." :<input type=text value='$row[6]' name=field6><br><br>";} 

if (!empty($row[7])) { echo $rowlbl['field7']." :<input type=text value='$row[7]' name=field7><br><br>";} 
if (!empty($row[8])) { echo $rowlbl['field8'].":<input type=text value='$row[8]' name=field8><br><br>";} 

echo "<input type=submit value='Update'></form>";
echo "</td></tr></table>";
}

mysql_close($con);

}
else {echo "go way!";}
?> 
