<html>
	<head>
		<link rel = "stylesheet" href = "style.css">
		
		<style>
			body{
				background-image:url('indiana-dunes-state-park.jpg');
				background-size:cover;
				background-repeat:no-repeat;
			}
		
			.payform{
				padding :5%;
				color:white;
				width :97%;
				background-color:black;
				opacity :0.6;
				background-size:cover;
			}
			
			table,h2{
				margin-left:30%;
			}
			
			h2{
				color:blue;
				font-weight:800;
				font-size:28px;
			}
			
			td{
				color:white;
			}
			
			.button1{
				margin-left:10%;
			}
		</style>
	</head>
	<body>
		<!--booking form-->
		<div class = "payform">
			<h2>Booking Confirmation</h2>
			
			<table>
				<form method = "post" action = "pdf.php">
					<tr><td>First Name</td><td><input type = "text" name = "fname" required></td></tr>
					<tr><td>Last Name</td><td><input type = "text" name = "lname" required></td></tr>
					<tr><td>Email</td><td><input type = "email" name = "email" required></td></tr>
					<tr><td>Phone Number</td><td><input type = "tel" name = "numb" required></td></tr>
					<tr><td>Select Currency</td><td><input type = "radio" name = "currency" value = "USD">USD
													<input type = "radio" name = "currency" value = "LKR">LKR</td></tr>
					<tr><td>Selected Package</td>
						<td>
							<select name = "package">
									<option name = "package" value = "package 0"> </option>
									<option name = "package" value = "Cool Kandy">Cool Kandy</option>
									<option name = "package" value = "Freezing Nuwara-Eliya">Freezing Nuwara-Eliya</option>
									<option name = "package" value = "Amazing Down South">Amazing Down South</option>
									<option name = "package" value = "Sunny Jaffna">Sunny Jaffna</option>
									<option name = "package" value = "Ancient Anuradhapura">Ancient Anuradhapura</option>
									<option name = "package" value = "Thrilling Trinco">Thrilling Trinco</option>
							</select>
						</td>
					</tr>
					<tr><td>Number of Guests</td><td><input type = "text" name = "gcount" required></td></tr>
					<tr><td></td><td>&nbsp &nbsp <input type = "checkbox">Children(age under 8) &nbsp <input type = "text" name = "ccount" class = "guestCount"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type = "checkbox"> Adults &nbsp <input type = "text" name = "acount" class = "guestCount"></td></tr>
					<tr><td>Check-in Date</td><td><input type = "date" name = "day" required></td></tr>
					<tr><td>Time Arriving</td><td><input type = "time" name = "time" required></td></tr>
					<tr><td>Additional Requirements</td><td><textarea name = "message" cols = "30" rows = "5"></textarea></td></tr>
					<tr><td>Advance Amount</td><td><input type = "text" name = "advance"></td></tr>
					<tr><td></td>
						<td><input type = "checkbox" required>I have read and I agree to the Payment Policy and Privacy Policy.</td></tr>
					<br><br>
					<tr><td colspan = "2"><input type = "Submit" value = "Create PDF" class = "button1"><input type = "Reset" value = "Clear All" class = "buttons"><input type = "button" value = "Another Booking" class = "buttons"></td></tr>
				</form>
			</div>	<!--End of payform div-->
			</table>
		
	</body>
</html>