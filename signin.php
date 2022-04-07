<?php
	$uname = $_POST['username'];
	$pword = $_POST['password'];


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
	} 
	
	else {

		$sql="SELECT * FROM signup where uname = '$uname' AND pword ='$pword'";

		if ($result=mysqli_query($conn,$sql))
			{
			// Return the number of rows in result set
			$rowcount=mysqli_num_rows($result);
			
			if($rowcount==1){  //session
				$_SESSION['session'] = $pword;
				header("Location: main.php");
			}
			else{
				header("Location: main.php?Invalid=Invalid user");
				$message = "inavlid password";
				echo "<script type='text/javascript'> alert('$message');</script>";
				
			}
			mysqli_close($conn);
		}

		// $stmt = $conn->prepare("insert into signin(uname, pword) values(?, ?,)");
		// $stmt->bind_param("ss", $uname, $pword);
		// $execval = $stmt->execute();
		// echo $execval;
		// echo "Signin Succefully";
		// $stmt->close();
		// $conn->close();
	}
?>