<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome Administrator
		</title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>
		<!-- Sidebar -->
   <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
	<h3 class="w3-bar-item">Menu</h3>
	<a class="admin_func" href="" class="w3-bar-item w3-button">Home</a>
	<br>
	<a class="admin_func" href="admin_view_booked_tickets.php" class="w3-bar-item w3-button">View boooked ticket </a>
	<br>
	<a class="admin_func"href="add_flight_details.php" class="w3-bar-item w3-button">Add flight schedule </a>
	<br> 
	<a class="admin_func" href="delete_flight_details.php" class="w3-bar-item w3-button">Delete flight schedule</a>
	<br> 
	<a class="admin_func" href="logout_handler.php" class="w3-bar-item w3-button">Log out</a>
	</div>

<!-- Page Content -->
<div style="margin-left:15%">

<div class="w3-container w3-teal">
  <h1>Home </h1>
</div>

<div class="w3-container">
<h2>Welcome ADMIN</h2>
</div>

</div>
	</body>
</html>