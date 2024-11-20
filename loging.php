<?php
session_start();
$U="";
$P="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// ----------------security-----------------


function clean($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$U=clean($_POST['username']);
$P=clean($_POST['password']);
$encp=md5($P);
if  (empty($U))  { echo "The USER field is required"; exit;}
if  (empty($P))  { echo "The PASS field is required"; exit;}
include "config.php";
$result = mysql_query("SELECT * FROM members where username='$U' and password='$encp' ");
if (!$result) { echo "'Could not run query: ' . mysql_error()";   exit; }
$row =(mysql_fetch_array($result));
 if ($row ) {    
// $_SESSION['level']=$row['level'];
$_SESSION['user']=$U;
header("location:index.php"); }
else { echo "<script language='javascript'>
	alert('Username and Password Didnot Matched');
	window.location = 'log.html';
	</script>";
 mysql_close($con);} }
?>

