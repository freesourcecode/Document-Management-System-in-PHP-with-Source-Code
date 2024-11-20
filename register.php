<htm>
<?php
// session_start();
include "config.php";
$U="";
$P="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$U=$_POST['username'];
$P=md5($_POST['password']);


$query = "SELECT username FROM members WHERE username = '$U' ";
$result = mysql_query($query) or die(mysql_error());
		  
  if(mysql_num_rows($result)==0) { 

$aa=mysql_query("INSERT INTO members (username, password) VALUES ('$U','$P')");
if (!$aa) {echo "somsing rong".mysql_error(); exit;}

echo "<script language='javascript'>
	alert('done');
	window.location = 'index.php';
	</script>";

}

else { 
echo "<script language='javascript'>
	alert('This username is already registered');
	window.location = 'reg.php';
	</script>";

exit(); }

mysql_close($con);
} else {

echo "<script language='javascript'>
	alert('Go out!');
	window.location = 'reg.php';
	</script>";

}
?> 
</body> 
</html> 


   