<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

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


		$stmt = $conn->prepare("insert into contact(name, email, subject, message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $name, $email, $subject, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Message Sent Succefully";
		$stmt->close();
		$conn->close();
	}
?>