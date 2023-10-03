<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => mrs
		$conn = mysqli_connect("localhost", "root", "", "mywebsite");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 14 values from the form data(input)
		$group_no = $_REQUEST['group_no'];
		$subject = $_REQUEST['subject'];
		$experiment_no = $_REQUEST['experiment_no'];
		$title = $_REQUEST['title'];
		$department = $_REQUEST['department'];
        $date = $_REQUEST['date'];
        $control_no = $_REQUEST['control_no'];
        $time = $_REQUEST['time'];
        $materials = $_REQUEST['materials'];
        $quantity = $_REQUEST['quantity'];
        $unit = $_REQUEST['unit'];
        $chemicals = $_REQUEST['chemicals'];
        $volume = $_REQUEST['volume'];
        $concentrated = $_REQUEST['concentrated'];
		
		// Performing insert query execution
		// here our table name is laboratory
		$sql = "INSERT INTO insertdata VALUES ('$group_no',
			'$subject','$experiment_no','$title','$department','$date','$control_no','$time',
            '$materials','$quantity','$unit','$chemicals','$volume','$concentrated')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$group_no\n $subject\n "
				. "$experiment_no\n $title\n $department\n $date\n $control_no\n $time\n $materials\n $quantity\n $unit\n $chemicals\n $volume\n $concentrated");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>