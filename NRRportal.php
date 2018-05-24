  <!DOCTYPE html>
<html>
<head>
	<title>NORTH RIFT RAILWAYS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	
	<div class="header" style="background-color:#009933;">
	<h1> <img src="images/Logo.png" alt="NRR logo" height="150" width="150">NORTHRIFT RAILWAYS</h1>

	</div>
</div>


<div class="container"  style="background-color: #00933">
 	<div class="row">
	<header class="col-lg-offset-1 col-lg-6 col-md-4">
<nav class="navbar navbar-default">

	<ul class="nav nav-tabs">
		<li> <a href=""> Home</a> </li>
		<li><a href="">Time schedule</a></li>
		<li><a href="">Pricing</a></li>
		<li><a href="">About us</a></li>
		<li><a href="">Contact us</a></li>
		<div class="search-box-wrapper clearfloat">
            <input type="search" maxlength="50" placeholder="Search" />
            <button type="submit"  aria-label="Search Button"></button></div>
            
        </div>
	</ul>


</nav>
		
	</header>
		
	</div>

</div>
<div class="container-fluid" style="height:200px; width:100px;float:left;">
	<nav class="nav nav-pills">
<a href="return ticket.html"> Return</a><br>
<a href="oneWay.html"> One way</a><br>
</nav>
</div>


<div class="content container-fluid">
<div class="row">
	<div class="col-lg-offset-1 col-lg-6">
<form action="passenger.php" method="post">
	 <input type="text" placeholder="ID/Passport no" name="ID_passport"><br>
	Leaving from:
	<select name="Departing">
		<option value="">Eldoret</option>
		<option value="Lodwar">Lodwar</option>
		<option value="Eldoret">Eldoret</option>
		<option value="Nakuru">Nakuru</option>
		<option value="Gilgil">Gilgil</option>
		<option value="Naivasha">Naivasha</option>
	</select><br>
	Going to:
	<select name="Destination">
		<option value=""></option>
		<option value="Lodwar">Lodwar</option>
		<option value="Eldoret">Eldoret</option>
		<option value="Nakuru">Nakuru</option>
		<option value="Gilgil">Gilgil</option>
		<option  value="Naivasha">Naivasha</option>
		</select><br>
	Depature date: <input type="date" name="Depature_date"><br>
	Return date: <input type="date" name="Return_date"><br>
	Class:
	<select name="class">
		<option value=""></option>
		<option value="first">First</option>
		<option value="economy">Economy</option>
	</select><br>
	<span>
	Adults: <input type="number" name="adults" min="0" max="20">
	Children: <input type="number" name="Children" min="0" max="20">
	Infants: <input type="number" name="Infants" min="0" max="20">
	</span><br>
	<span>
		<input type="submit" name="Submit"  value="Submit">
		<input type="reset" name="Refresh" value="Refresh">
	</span>

</form>
</div>
</div>
</div>
</div>
</div>
<?php 
  if (isset($_POST['Submit'])) {
  	$id=$_POST['ID_passport'];
  	$depart=$_POST['Departing'];
  	$arrival=$_POST['Destination'];
  	$Depdate=$_POST['Depature_date'];
  	$arrdate=$_POST['Return_date'];
  	$class=$_POST['class'];
  	$adults=$_POST['adults'];
  	$child=$_POST['Children'];
  	$infant=$_POST['Infants'];
  	echo '<div class="row">
<span class="col-lg-3">ID/Passport no</span><span class="col-lg-3">'.$id.'</span>
 	<span class="col-lg-3">Dep ature</span><span class="col-lg-3">'. $depart.'</span>
 	<span class="col-lg-3">Destination</span><span class="col-lg-3">'. $arrival.'</span>
 	<span class="col-lg-3">Depature date</span><span class="col-lg-3">'. $Depdate.'</span>
 	<span class="col-lg-3">Return date</span><span class="col-lg-3">'. $arrdate.'</span>
    <span class="col-lg-3">Class</span><span class="col-lg-3">'. $class.'</span>
 	<span class="col-lg-3">Adults</span><span class="col-lg-3">'. $adults.'</span>
 	<span class="col-lg-3">children</span><span class="col-lg-3">'. $child.'</span>
 	<span class="col-lg-3">Infants</span><span class="col-lg-3">'. $infant.'</span>
 

 </div>';
  }














 ?>
 
</div>
















<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>