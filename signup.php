<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];

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


		$stmt = $conn->prepare("insert into signup(name, email, country, uname, pword) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $name, $email, $country, $uname, $pword);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registered Succefully";
		$stmt->close();
		$conn->close();
	}
?>