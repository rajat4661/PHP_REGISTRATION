<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
        $conn = mysqli_connect("localhost", "root", "root", "phptest");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$email = $_REQUEST['email'];
		$department = $_REQUEST['department'];
		$mobile_number = $_REQUEST['mobile_number'];
	

		
		$sql = "INSERT INTO rajat (first_name, last_name, email, department, mobile_number ) VALUES ('$first_name', '$last_name', '$email', '$department', '$mobile_number')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Data stored in the database successfully.</h3>";
			echo "<p>First Name: $first_name</p>";
			echo "<p>Last Name: $last_name</p>";
			echo "<p>Email: $email</p>";
			echo "<p>Department: $department</p>";
			echo "<p>Mobile Number: $mobile_number</p>";
		

		} else {
			echo "ERROR: Couldn't execute $sql. " . mysqli_error($conn);
		}

		mysqli_close($conn);
		?>
	</center>
</body>

</html>
