<html>
<head>
<title>Document Management System</title>
<style>
tr:hover {background:#bfbfbf;}

a {
	color:blue;  text-decoration: none;
  }
table {
text-align:center;
padding:2;
border:10px solid lightgrey;
border-radius:8px;
width:95%;
background-color: white;
}
td {padding:2;}
input {font-size:15;font-weight:bold}
body{
	font-size:14;
	font-weight:bold;
	background-color: rgb(0, 128, 128);
}
thead {background:grey;}
</style>

</head><body>
<?php
session_start();
require_once"config.php";

if (!isset($_SESSION['user'])) 
	{
		header("location:index.php");
	} 
	else 
	{
echo "<center><h1 style='color: white;'>$title <a href='index.php'><img src='img/favicon.ico'></a></h1></center>";
$sql='SELECT * FROM '.$table;

if (isset($_POST['condition'])) 
	{ 
		$sql .=' WHERE '.$_POST['condition'].' ';

if (!empty($_POST['criteriaa'])) 
	{
	 $sql .= $_POST['criteriaa'].' ';
	} 
else 
{
 echo "Please set a criteria"; exit();
}

if (!empty($_POST['value4comparison'])) 
{ 
$_POST['value4comparison']=trim($_POST['value4comparison']);

if ($_POST['criteriaa']==">" or $_POST['criteriaa']=="<") 
{
$sql .= $_POST['value4comparison']; 
}
else 
{
	$sql .= "'%".$_POST['value4comparison']."%'";
}


}

else 
{
 echo "Please set a value for search"; exit();
} 
}



$result=mysql_query("$sql");
if (!$result) {echo "No results found  ".mysql_error(); exit();} 
// ------------------import labels --------------------
$lbl='SELECT * FROM table1';

$labelz=mysql_query("$lbl");

$rowlbl = mysql_fetch_array($labelz);

// ----------------------------------------------
echo "<center><table >";
echo "<thead>
	  <tr>
	  <th>".$rowlbl['field1']."</th>
	  <th>file type</td>
	  <th>".$rowlbl['field2']."</th>
	  <th>".$rowlbl['field3']."</th>
	  <th>".$rowlbl['field5']."</th>
	  <th>".$rowlbl['field6']."</th>
	  <th>".$rowlbl['field7']."</th>
	  <th>".$rowlbl['field8']."</th>
	  <th>delete</th>
	  <th>edit</th>
	  </tr>
	  </thead>";
while($row = mysql_fetch_array($result))
  {
echo "<tr>";


if (!empty($row[9])) 
	{ 
		echo "
			<td><b>$row[1]</b></td>";
	} 
$fileasm='upload/'.$row[1].'/'.$row[8].'/'.$row[9];
 $ext = substr($fileasm, strrpos($fileasm, '.') + 1);
 echo "<td>
 		<a href='upload/$row[1]/$row[8]/$row[9]' target=new>$row[9]</a>
	   </td>";
if (!empty($row[2])) 
	{ 
		echo "<td>$row[2]</td>";
	} 
	else 
	{ 
		echo "<td>..</td>";
	}

if (!empty($row[3])) 
	{ 
		echo "<td>$row[3]</td>";
	} 
	else 
	{ 
		echo "<td></td>";
	}
// if (!empty($row[4])) { echo "<td>$row[4]</td>";} else { echo "<td></td>";}
if (!empty($row[5])) 
	{ 
		echo "<td>$row[5]</td>";
	}
	else 
	{ 
			echo "<td></td>";
	}
if (!empty($row[6])) 
	{ 
		echo "<td>$row[6]</td>";
	} 
	else 
	{ 
			echo "<td></td>";
	}
if (!empty($row[7])) 
	{ 
		echo "<td>$row[7]</td>"
		;
	} 
	else 
	{ 
			echo "<td></td>";
	}
if (!empty($row[8])) 
	{ 
		echo "<td> $row[8]</td>";
	} 
	else 
	{ 
			echo "<td></td>";
	}


if ($_SESSION['user']=="admin")
	{
		echo "<td>
			  <a href='dell.php?id=$row[id]&which=".$fileasm."'><img src='img/delete.png'></a>
			  </td>";
		echo "<td>
			  <a href='edit.php?id=$row[id]'><img src='img/edit.png'></a>
			  </td>
			  </tr>";
	}

}

echo "</table>";
mysql_close($con);

}
echo "<br><a style='color: white; font-size:20;' href='index.php'>Go Back</a>";
?> 
