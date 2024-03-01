<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Hotel Online Reservation</a>
			</div>
		</div>
	</nav>	
	<ul id = "menu">
		<li><a href = "index.php">Home</a></li> |
		<li><a href = "aboutus.php">About us</a></li> |
		<li><a href = "contactus.php">Contact us</a></li> |
		<li><a href = "gallery.php">Gallery</a></li> |
		<li><a href = "dineandlounge.php">Dine and Lounge</a></li> |
		<li><a href = "hotels.php">hotels</a></li> |			
		<li><a href = "reservation.php">Make a reservation</a></li> |
		<li><a href = "rulesandregulation.php">Rules and Regulation</a></li>
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>Select your preferred hotel</h3></strong>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `hotel` ORDER BY `rating` DESC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
<div class="well" style="height:300px; width:100%; overflow: hidden;">
    <div style="float:left;">
        <img src="photo/<?php echo $fetch['photo']?>" height="250" width="350" alt="<?php echo $fetch['name']?> Photo"/>
    </div>
    <div style="float:left; margin-left:10px;">
        <h3><?php echo $fetch['name']?></h3>
        <p><?php echo $fetch['address']?></p>
        <p>Rating: <?php echo $fetch['rating']?></p>

        <!-- Adjust styling for better spacing -->
        <div style="margin-top: 20px;">
        <a href="reservation.php?h_id=<?php echo $fetch['h_id']; ?>" class="btn btn-primary" style="margin-left: 580px;">Select</a>


        </div>
    </div>
    <div style="clear: both;"></div> <!-- Clear the float to ensure proper layout -->
</div>

				<?php
					}
				?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright Osthir 2023 </label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>