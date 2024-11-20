<?php
session_regenerate_id(TRUE);
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: '.mysql_error());
  }
mysql_select_db('documentdb',$con);

$table='table2';

//-----------------user level in members table not in use this is why I set admin here--
$admin="admin";
//-------------------------------------------------
$title="Document Management System";

?>