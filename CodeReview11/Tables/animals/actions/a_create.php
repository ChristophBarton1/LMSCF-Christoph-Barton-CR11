<?php
	require_once 'db_connect.php';

	if($_POST){
		$name= $_POST["name"];
		$location= $_POST["location"];
		$adress= $_POST["adress"];
		$description=$_POST["description"];
		$type= $_POST["type"];
		$age=$_POST["age"];
		$hobbys= $_POST["hobbys"];
		$userEmail=$_POST["userEmail"];
		$contactnumber=$_POST["contactnumber"];

		$sql ="INSERT INTO `animals`(`name`, `location`, `adress`, `description`, `type`, `age`, `hobbys`, `userEmail`, `contactnumber`) VALUES ('$name', '$location', '$adress','$description','$type','$age','$hobbys','$userEmail','$contactnumber')";

		if(mysqli_query($conn, $sql)){
			echo "success <br>
				<a href='../index.php'>Back to the home page</a>
			";
		}else{
			echo "error";
		}
	}
?>