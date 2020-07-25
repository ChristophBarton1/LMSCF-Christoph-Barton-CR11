<?php
	require_once 'db_connect.php';

	if($_POST){
		$first_name= $_POST["first_name"];
		$last_name= $_POST["last_name"];
		$date_of_birth= $_POST["date_of_birth"];

		$sql ="INSERT INTO `customer`(`first_name`, `last_name`, `date_of_birth`) VALUES ('$first_name', '$last_name', '$date_of_birth')";

		if(mysqli_query($conn, $sql)){
			echo "success <br>
				<a href='../index.php'>Back to the home page</a>
			";
		}else{
			echo "error";
		}
	}
?>