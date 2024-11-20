<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
function clean($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

include "config.php";
$wch=$_POST["id"];
$a1= clean($_POST["field1"]);
$a2= clean($_POST["field2"]);
$a3= clean($_POST["field3"]);
$a4= clean($_POST["field4"]);
$a5= clean($_POST["field5"]);
$a6= clean($_POST["field6"]);
$a7= clean($_POST["field7"]);
$a8= clean($_POST["field8"]);



$query="Update table2 set field1='$a1' Where id=$wch"; 
 $result=mysql_query($query,$con);
 if (!$result) {echo "somsing rong<br><br>".mysql_error(); exit;}
// -----------------------------
$query="Update table2 set field2='$a2' Where id=$wch"; 
 $result=mysql_query($query,$con);
 if (!$result) {echo "somsing rong<br><br>".mysql_error(); exit;}
// -----------------------------
$query="Update table2 set field3='$a3' Where id=$wch"; 
 $result=mysql_query($query,$con);
 if (!$result) {echo "somsing rong<br><br>".mysql_error(); exit;}
// -----------------------------
$query="Update table2 set field4='$a4' Where id=$wch"; 
 $result=mysql_query($query,$con);
 if (!$result) {echo "somsing rong<br><br>".mysql_error(); exit;}
// -----------------------------
$query="Update table2 set field5='$a5' Where id=$wch"; 
 $result=mysql_query($query,$con);
 if (!$result) {echo "somsing rong<br><br>".mysql_error(); exit;}
// -----------------------------
$query="Update table2 set field6='$a6' Where id=$wch"; 
 $result=mysql_query($query,$con);
 if (!$result) {echo "somsing rong<br><br>".mysql_error(); exit;}
// -----------------------------
$query="Update table2 set field7='$a7' Where id=$wch"; 
 $result=mysql_query($query,$con);
 if (!$result) {echo "somsing rong<br><br>".mysql_error(); exit;}
// -----------------------------
$query="Update table2 set field8='$a8' Where id=$wch"; 
 $result=mysql_query($query,$con);
 if (!$result) {echo "somsing rong<br><br>".mysql_error(); exit;}
// -----------------------------




// -----------------------------
//  //////////////////
echo "<script language='javascript'>
	alert('Updated successfully');
	window.location = 'index.php';
	</script>";



mysql_close($con);
} else {header("location:index.php");}
?> 
</body> 
</html> 