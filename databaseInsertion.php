<!DOCTYPE html>
<html>
<head>
	<title>Database Insertion</title>
</head>
<body>
	<h1>Database Insertion</h1>

	<?php 

	$host = "localhost";
	$user = "t1";
	$pass = "1111";
	$db = "t1";

	$conn = new mysqli($host, $user, $pass, $db);

	if($conn->connect_error) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn->connect_error;
	}
	else {
		echo "Database Connection Successful!";
		
		$stmt = $conn->prepare("insert into user (fName, lName, gender,dob,religion, presentAddress,parmanentAddress,phone,email,personalUrl,userName,password(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssss", $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12);
		$p1 = $_POST['fname'];
		$p2 = $_POST['lname'];
		$p3 = $_POST['gender'];
		$p4 = $_POST['dob'];
		$p5 = $_POST['religion'];
		$p6 = $_POST['presentAddress'];
		$p7 = $_POST['parmanentAddress'];
		$p8 = $_POST['phone'];
		$p9 = $_POST['email'];
		$p10 = $_POST['personalUrl'];
		$p11= $_POST['userName'];
		$p12= $_POST['password'];
		$status = $stmt->execute();

		if($status) {
			echo "Data Insertion Successful.";
		}
		else {
			echo "Failed to Insert Data.";
			echo "<br>";
			echo $conn->error;
		}
	}

	$conn->close();

	?>

</body>
</html>