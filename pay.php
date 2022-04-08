<?php
	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$package = $_POST['package'];
    $guests = $_POST['guests'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $requirement = $_POST['reqirement'];
    $add_amount = $_POST['add_amount'];


	// Database connection
	  $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname="testDB7";

      //Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {


		$stmt = $conn->prepare("insert into pay(fname, lname, email, number, package, guests, date, time, requirements, add_amount) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssssss", $fname,$lname, $email, $number, $package, $guests, $date, $time, $requirement, $add_amount);
		$execval = $stmt->execute();
		echo $execval;
		echo "Message Sent Succefully";
		$stmt->close();
		$conn->close();
	}
?>