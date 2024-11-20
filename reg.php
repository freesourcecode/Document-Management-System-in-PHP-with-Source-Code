<?php
session_start();

require_once"config.php";


?>
<html>
<head><title>Document Management System</title>
<style>

table{
text-align:left;
padding:4;
border:10px solid white;
border-radius:8px;
background-color: rgb(0, 128, 128);
}

</style>
<script language='JavaScript'>
    <!--
    function ValidateForm() {
        var Check = 0;
if (document.gooreg.password.value != document.gooreg.password2.value) { Check = 1; }
if (document.gooreg.username.value == '') { Check = 1; }
if (document.gooreg.password.value == '') { Check = 1; }
if (document.gooreg.password2.value == '') { Check = 1; }
        if (Check == 1) {
            alert(" some field empty or passowrd do not match");
            return false;
        } else {
            document.gooreg.submit.disabled = true;
            return true;
        }
    }
    //-->
    </script>


<body bgcolor=gray>
<center><br><br><table bgcolor=skyblue cellpadding=7  >
<h2 style="color: white;"><center>ADD USERS</center></h2>
<tr><td><form method=post name=gooreg action="register.php" onSubmit='return ValidateForm()'>
<label style="color: white;">Username:</label>  <input type=text name=username size=40><br><br>
<label style="color: white;">Password :</label> <input type=text name=password size=40><br><br>
<label style="color: white;">Confirm Passowrd:</label> <input type=text name=password2 size=31><br>
<p align=left><input type=submit value="Register"><br>
</p>
</form></td></tr><tr><td><hr>
<?php

if ($_SESSION['user']==$admin) {

echo "<form  method=post name=deluser action='deluser.php'>";
 

$sql='SELECT * FROM members';

$result=mysql_query("$sql");
if (!$result) {echo "No results found ".mysql_error(); exit();} 

echo "<select name=user2del>";
while($row = mysql_fetch_array($result))
  { echo "<option>".$row['username']."</option>";}
echo "</select > 
<input type=submit value='delete user'>
</form></td></tr></table></h3>"; }

?>
<style> 
body{
background-image: url('img/sil.jpg');}
</style>
</center></body></html>