<?php 
$db= mysqli_connect("localhost","root","","railways");

if(! $db)
{
	echo 'Not connected to the server';
}
if(! mysqli_select_db($db,  'railways'))

{
	echo 'Database not selected';
}
 if(isset($_POST['Submit']))
 {
 // var_dump($_POST);
$id=$_POST["ID_passport"];
$depart=$_POST["Departing"];
$arrival=$_POST["Destination"];
$Depdate= ($_POST["Depature_date"]);
//$Depdate=mysqli_real_escape_string($Depdate);
$Depdate=date('Y/m/d',strtotime($Depdate));

//$arrdate= mysqli_real_escape_string($arrdate);
$class=$_POST["class"];
$adults=$_POST["adults"];
$child=$_POST["Children"];
$infant=$_POST["Infants"];

$sql="INSERT INTO travel (Pass, Leaving, Arrival, Depature_dt, P_class, Adults, Children, Infants) VALUES ('$id', '$depart', '$arrival', '$Depdate', '$class', '$adults', '$child', '$infant')";

//echo $sql;if
if (!mysqli_query($db,$sql)) {
  # code...
  echo 'not inserted';
}
else {
  echo 'inserted';
}
 }

 ?>
