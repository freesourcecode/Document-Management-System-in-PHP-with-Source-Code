<?php

// ----------------------not secure ! needs some extra care-------------------
include "config.php";
 if (isset($_GET['id'])) {
If(file_exists($_GET['which'])){
mysql_query("DELETE FROM table2 WHERE id = $_GET[id]");
if (! unlink ($_GET['which'])) {
    echo ("Couldn't delete file"); } else {

//------------------an attempt to remove the empty folder not working so far - due to permession error----------------
// $pth=dirname($_GET['which']);
// if(count(scandir($pth)) == 2) {
// unlink ($pth) ; }
/// ------------------------------------------


echo "<script language='javascript'>
	alert('Deleted');
	window.location = 'index.php';
	</script>";

}}
else {echo "no such file in the attachemnts"; exit();}
mysql_close($con);}
?> 

</body> 
</html> 
