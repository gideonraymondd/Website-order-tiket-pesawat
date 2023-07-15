<html>
	<head>
		<title>
			Register
		</title>
		<link rel="stylesheet" type="text/css" href="css/new_user.css"/>
	</head>
	<body>
		<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">
				<h2> SIGN UP FREE FOR ORDER THE TICKET</h2>
				<table cellpadding='10'>
					<strong>ISI DETAIL TENTANG LOGIN</strong>
					<tr>
						<td>Apa usernamemu?</td>
					</tr>
					<tr>
						<td><input type="text" name="username" required></td>
					</tr>
					<tr>
						<td>Isi passwordmu</td>
					</tr>
					<tr>
						<td><input type="password" name="password" required><br><br></td>
					</tr>
					<tr>
						<td>Apa emailmu?</td>
					</tr>
					<tr>
						<td><input type="text" name="email" required><br><br></td>
					</tr>
				</table>
				<br>
				<table cellpadding='10'>
					<strong>ISI DATA PERSONAL</strong>
					<tr>
						<td>Siapa namamu?</td>
					</tr>
					<tr>
						<td><input type="text" name="name" required><br><br></td>
					</tr>
					<tr>
						<td>Berapa nomor teleponmu?</td>
					</tr>
					<tr>
						<td><input type="text" name="phone_no" required><br><br></td>
					</tr>
					<tr>
						<td>Alamatmu dimana?</td>
					</tr>
					<tr>
						<td><input type="text" name="address" required><br><br></td>
					</tr>
				</table>
				<br>
				<input type="submit" value="Submit" name="Submit" >
			<br>
		</form>
	</body>
</html>