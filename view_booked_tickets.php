<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Booked Tickets
		</title>
		<link rel="stylesheet" type="text/css" href="css/navbar.css"/>
		<link rel="stylesheet" type="text/css" href="css/table.css"/>
		
	</head>
	<body>
	<div>
			<ul>
				<li><a href="customer_homepage.php"> Home</a></li>
				<li><a href="customer_homepage.php"> Order</a></li>
				<li><a href="aboutus.html"> About US</a></li>
				<li><a href="view_booked_tickets.php"> View my tickets</a></li>
				<li><a href="logout_handler.php"> Logout</a></li>
			</ul>
		</div>
		<h2>VIEW BOOKED FLIGHT TICKETS</h2>
		<h3 class='set_nice_size'><center><u>Upcoming Trips</u></center></h3>
		<?php
			$todays_date=date('Y-m-d');
			$thirty_days_before_date=date_create(date('Y-m-d'));
			date_sub($thirty_days_before_date,date_interval_create_from_date_string("30 days")); 
			$thirty_days_before_date=date_format($thirty_days_before_date,"Y-m-d");
			
			$customer_id=$_SESSION['login_user'];
			require_once('Database Connection file/mysqli_connect.php');
			$query="SELECT pnr,date_of_reservation,flight_no,journey_date,class,booking_status,no_of_passengers,payment_id FROM Ticket_Details where customer_id=? AND journey_date>=? AND booking_status='CONFIRMED' ORDER BY  journey_date";
			$stmt=mysqli_prepare($dbc,$query);
			mysqli_stmt_bind_param($stmt,"ss",$customer_id,$todays_date);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$pnr,$date_of_reservation,$flight_no,$journey_date,$class,$booking_status,$no_of_passengers,$payment_id);
			mysqli_stmt_store_result($stmt);
			if(mysqli_stmt_num_rows($stmt)==0)
			{
				echo "<h3><center>No upcoming trips!</center></h3>";
			}
			else
			{
				echo "<table cellpadding=\"10\"";
				echo "<tr><th>PNR</th>
				<th>Date of Reservation</th>
				<th>Flight No.</th>
				<th>Journey Date</th>
				<th>Class</th>
				<th>Booking Status</th>
				<th>No. of Passengers</th>
				<th>Payment ID</th>
				</tr>";
				while(mysqli_stmt_fetch($stmt)) {
        			echo "<tr>
        			<td>".$pnr."</td>
        			<td>".date("d-m-Y", strtotime($date_of_reservation))."</td>
					<td>".$flight_no."</td>
					<td>".date("d-m-Y", strtotime($journey_date))."</td>
					<td>".$class."</td>
					<td>".$booking_status."</td>
					<td>".$no_of_passengers."</td>
					<td>".$payment_id."</td>
        			</tr>";
    			}
    			echo "</table> <br>";
			}

			$query="SELECT pnr,date_of_reservation,flight_no,journey_date,class,booking_status,no_of_passengers,payment_id FROM Ticket_Details where customer_id=? and journey_date<? and journey_date>=? ORDER BY  journey_date";
			$stmt=mysqli_prepare($dbc,$query);
			mysqli_stmt_bind_param($stmt,"sss",$customer_id,$todays_date,$thirty_days_before_date);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$pnr,$date_of_reservation,$flight_no,$journey_date,$class,$booking_status,$no_of_passengers,$payment_id);
			mysqli_stmt_store_result($stmt);
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		?>
	</body>
</html>