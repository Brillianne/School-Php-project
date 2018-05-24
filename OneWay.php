<?php
$link = mysqli_connect ("localhost","root","" ,"travel" );

if(! $link)
{
	echo 'Not Connected To server';
}

if(! mysqli_select_db ($link, 'travel'))
{
	echo 'Database Not Selected';
}

 if (isset($_POST['Submit'])) {	
$NumberId = $_POST["ID"];
$Name = $_POST["Name"];
$leave=$_POST["Town"];
$dest=$_POST["Destination"];
$departure_dt=($_POST["departure_dt"]);
$departure_dt=date('Y/m/d',strtotime($departure_dt));
$Time=$_POST["Time"];
$class=$_POST["class"];
$adults=$_POST["adults"];
$child=$_POST["children"];
$infant=$_POST["infants"];


$sql="INSERT INTO `departure`(`ID`, `Name`, `Leaving`, `ArrivalDest`, `DepDate`, `Time`, `Class`, `Adult`, `Child`, `Infant`) VALUES ('$NumberId','$Name','$leave','$dest','$depature_dt','$Time','$class','$adults','$child','$infant')";


if(!mysqli_query($link ,$sql))
{
	echo 'Not Inserted';
}
else 


	echo 'Inserted';



?>