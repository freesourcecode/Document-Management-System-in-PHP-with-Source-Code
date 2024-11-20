<html >
<head>
<title>Document Management System</title>
<style>
input {font-size:14;font-weight:bold
border:1px solid black;
border-radius:6px;
}
body {font-size:14;font-weight:bold;
background-image: url('img/sil.jpg');
padding:4;
 } 
table{
text-align:left;
padding:4;
border:10px solid grey;
border-radius:8px;
background-image: url('img/ptn.jpg');}
input {text-align:center;}
div { border:12px solid grey;
border-radius:8px;
padding:4;

}
text-align:right;


input {font-size:14;font-weight:bold}

 } 
</style>

</head>


<body bgcolor=c0c078><center>
<?php
session_start();
require_once"config.php";
$attachmentname="";
if (isset($_SESSION['user'])) {
// ------------------import labels --------------------
$lbl='SELECT * FROM table1';

$labelz=mysql_query("$lbl");

$rowlbl = mysql_fetch_array($labelz);

// ----------------------------------------------
if (isset($_GET['id'])) { $wch=$_GET['id']; } else { Exit();}
$sql='SELECT * FROM table2 where id='.$wch;

$result=mysql_query("$sql");
if (!$result) {echo "لم يتم العثور على نتائج  ".mysql_error(); exit();} 

echo "<h2>$title<br>Update</h2><form  method=post name=gooedit action='edithis.php' >";
while($row = mysql_fetch_array($result))
  {
echo "<table width='60%'><tr><td><h3>";


echo "<input type=hidden value=$wch name=id >";

if (!empty($row[1])) { echo $rowlbl['field1']." <input type=text value='$row[1]' name=field1 readonly size=20 > | ";} 
if (!empty($row[2])) { echo $rowlbl['field2']."
<select name=field2>
<option>$row[2]</option>
<option>external<option>
<option>local<option>
<option>bond</option>
<option>msci<option>
</select>
<br><br>";} 
if (!empty($row[3])) { echo $rowlbl['field3']." <input type=text value='$row[3]' name=field3 size=65 ><br><br> ";}

if (!empty($row[4])) { echo $rowlbl['field4'].": <input type=text value='$row[4]' name=field4 size=70 ><br><br>";} 
if (!empty($row[5])) { echo $rowlbl['field5'].": <input type=text value='$row[5]' name=field5 size=20 ><br><br>";} 

if (!empty($row[6])) { echo $rowlbl['field6']." : <input type=text value='$row[6]' name=field6 size=45 ><br><br>";} 

if (!empty($row[7])) { echo $rowlbl['field7']." : <input type=text value='$row[7]' name=field7 size=20 ><br><br>";} 
if (!empty($row[8])) { echo $rowlbl['field8']." : <input type=text value='$row[8]' name=field8 size=20 readonly ><br><br>";} 

echo "<input type=submit value='Update'> </form>";
echo " <a href='index.php'>Cancel</a>";
echo "</td></tr></table>";
}

mysql_close($con);

}
else {echo "go way!";}
?> 
