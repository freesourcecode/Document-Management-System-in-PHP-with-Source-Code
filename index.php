<?php
session_start();

require_once"config.php";


?>
<html>

    <head>
        <meta charset="UTF-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
   <title>Document Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/login.css" />
	<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
  <script type="text/javascript" src="validate.js" ></script> 
    </head>
<style>
input ,select{font-size:14;
text-align:center;
border:1px solid black;
border-radius:6px;
}
body {
 background-color: rgb(0, 128, 128);
 } 
table{
text-align:center;
padding:3;
border:1px solid black;
border-radius:8px;
background:#BCD4EC;
box-shadow: 3px 3px 3px #0f055f;}
div { 
border:10px solid lightgrey;
border-radius:8px;
padding:3;
width:60%;
text-align:left;
font-size:13;font-weight:bold;
max-width: 40rem;
}
</style>
<script language='JavaScript'>
    <!--
    function ValidateForm() {
        var Check = 0;
if (document.goo.uploaded_file.value == '') { Check = 1; }
if (document.goo.field2.value == '') { Check = 1; }
if (document.goo.field3.value == '') { Check = 1; }
if (document.goo.field4.value == '') { Check = 1; }
if (document.goo.field5.value == '') { Check = 1; }
if (document.goo.field8.value == '') { Check = 1; }



        if (Check == 1) {
            alert(" All fields are required ");
            return false;
        } else {
            document.goo.submit.disabled = true;
            return true;
        }
    }
    //-->
    </script>
  <SCRIPT language=Javascript>
      <!--
      function dont(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
<body bgcolor=teal><b>
<center>

<?php
echo "<h1 style='color: white;'>$title</h1>";


if (isset($_SESSION['user'])) {
// ------------------import labels --------------------
$lbl='SELECT * FROM table1';

$labelz=mysql_query("$lbl");

$rowlbl = mysql_fetch_array($labelz);

// ----------------------------------------------
?>  
<table style="background-color: lightgrey" cellpadding=3 >
<tr>
<form method="POST" action="showlist.php">
<td>
<select name=condition>
<option value="field1"><?php echo $rowlbl['field1']; ?></option>
<option value="field2"><?php echo $rowlbl['field2']; ?></option>
<option value="field3"><?php echo $rowlbl['field3']; ?></option>
<option value="field4"><?php echo $rowlbl['field4']; ?></option>
<option value="field5"><?php echo $rowlbl['field5'] ;?></option>
<option value="field6"> <?php echo $rowlbl['field6']; ?></option>
<option value="field7"><?php echo $rowlbl['field7']; ?></option>
<option value="field8"><?php echo $rowlbl['field8']; ?></option>
</select>
</td>
<td>
<select name="criteriaa">
<option value ='LIKE' selected>Like</option>
<option value ='NOT LIKE'>Ulike</option>
<option value ='>'>Greater than</option>
<option value ='<'>Less than</option>
</select>
</td>
 <td>
  <input type=text name="value4comparison">
</td>
<td>
  <input type="submit" value="Search" name="B1">
</td>
</form>
</tr>
</table>
</center>
<?php


echo "<br><center>
      <div>
      <h3>Data Entry:<br>
      <form  method=post name=goo action='insert.php' enctype='multipart/form-data'
      onSubmit='return ValidateForm()'>";
// --------------------------------------
$sqlcont='SELECT DISTINCT field1 FROM table2';

$result=mysql_query("$sqlcont");
if (!$result) 
{
  echo "No results found ".mysql_error(); 
  exit();
} 

echo "<br>".$rowlbl['field1']."  <select name=field1>";
while($row = mysql_fetch_array($result))
  { 
    echo "<option>".$row['field1']."</option>";
  }
echo "</select >";
echo "  or new <input type=text name=anothercont  size=20 onkeypress='return dont(event)' >  ";
echo "   Year <input type=text name=yr  size=6 maxlength=4 onkeypress='return dont(event)' >  ";
// -------------------------------

echo $rowlbl['field2']." 
<select name=field2>
<option>external<option>
<option>local<option>
<option>bond<option>
<option>msci<option>
</select>
<br><br>".$rowlbl['field3']." <input type=text name=field3  size=75> <br><br>
 Document File <input type='file' name='uploaded_file'>
<br><br>".$rowlbl['field4']." <input type=text name=field4  size=75>
<br><br>".$rowlbl['field5']." <input type=text name=field5  size=30>";
// --------------------------------------

$sqlco='SELECT DISTINCT field6 FROM table2';

$result=mysql_query("$sqlco");
if (!$result) {echo "No results found ".mysql_error(); exit();} 

echo "<br><br>".$rowlbl['field6']." <select name=field6>";
while($row = mysql_fetch_array($result))
  { echo "<option>".$row['field6']."</option>";}
echo "</select >";
echo "   or new <input type=text name=newco  size=44>";


// --------------------------------------
$sqlemp='SELECT DISTINCT field7 FROM table2';

$result=mysql_query("$sqlemp");
if (!$result) {echo "No results found ".mysql_error(); exit();} 

echo "<br><br>".$rowlbl['field7']." <select name=field7> ";
while($row = mysql_fetch_array($result))
  { echo "<option>".$row['field7']."</option>";}
echo "</select >";
echo "  or new<input type=text name=anotheremp  size=24> ";
echo $rowlbl['field8']." <input type=text name=field8  size=12 value='".date('Y-m-d')."' readonly>
<p align=center><input type=submit value='SUBMIT' ></p></form>";
echo "</div></div> <br>";
echo $_SESSION['user'];
echo " | <a style='color: white; text-decoration: none; font-size:20;' href='out'>Logout</a><b> | ";
if ($_SESSION['user']==$admin) {
echo " <a style='color: white; text-decoration: none; font-size:20;' href='reg'>Users</a> | ";
// echo $_SESSION['level'];
echo " <a style='color: white; text-decoration: none; font-size:20;' href='labels'>Labels translation</a><br><br>ITSOURCECODE"; } } else {include "log.html";}

?>

