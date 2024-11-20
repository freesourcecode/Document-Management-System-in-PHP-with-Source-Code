<?php
include "config.php";
$date="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// ----------------security-----------------


function clean($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// ----------prepare for new contract name with year or without---------

if (empty($_POST["yr"])) { $a1=clean($_POST["anothercont"]); } else {
$a1=clean($_POST["anothercont"]); 
$a1=$a1.'-'.clean($_POST['yr']); }

If(!file_exists("upload/".$_POST["anothercont"])) {mkdir("upload/".$a1); }  else {$a1= $_POST["field1"]; }

// ---------------------------------

If(!file_exists("upload")){mkdir("upload"); } 
If(!file_exists("upload/$a1")){mkdir("upload/$a1"); } 


// ------------------------------------
$a2= clean($_POST["field2"]);
$a3= clean($_POST["field3"]);
$a4= $_POST["field4"];
$a5= $_POST["field5"];
if (!empty($_POST["newco"])) { $a6= $_POST["newco"]; } else {$a6= $_POST["field6"];}
if (!empty($_POST["anotheremp"])) { $a7= $_POST["anotheremp"]; } else {$a7= $_POST["field7"];}
$a8= $_POST["field8"];
If(!file_exists("upload/$a1/$a8")){mkdir("upload/$a1/$a8"); } 

// /////////////////////////////////////////////////////////////
//Сheck that we have a file
if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {

 //Check if the file is rar folder 
  $filename = basename($_FILES['uploaded_file']['name']);


    //Determine the path to which we want to save this file
      $newname = dirname(__FILE__).'/upload/$a1/$a8'."/".$filename;
 //Check if the file with the same name is already exists on the server
      if (!file_exists($newname)) {
$a9=$filename;
//--------------------------
$filename = basename($_FILES['uploaded_file']['name']);
 $newname = dirname(__FILE__).'/upload/'.$a1.'/'.$a8.'/'.$filename;
         
    move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname);
$aa=mysql_query("INSERT INTO table2 (field1,field2,field3,field4,field5,field6,field7,field8,field9) VALUES ('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9')"); 
if (!$aa) {echo "حدث خطأ ولم يمكن الاضافة".mysql_error(); exit;}

echo "<script language='javascript'>
	alert('A new document is added successfully');
	window.location = 'index.php';
	</script>";
 } else {
         echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
      }


} else {
 echo "Error: No file uploaded";
}


mysql_close($con);

}

?> 
</body> 
</html> 
