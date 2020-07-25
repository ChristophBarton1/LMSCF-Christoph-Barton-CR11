<?php
	require_once 'db_connect.php';

	if($_POST){
		$animalId = $_POST["animalId"];
		$name= $_POST["name"];
		$location= $_POST["location"];
		$adress= $_POST["adress"];
		$description=$_POST["description"];
		$type= $_POST["type"];
		$age=$_POST["age"];
		$hobbys= $_POST["hobbys"];
		$userEmail=$_POST["userEmail"];
		$contactnumber=$_POST["contactnumber"];


		$sql = "UPDATE `animals` SET `name`='$name',`location`='$location',`adress`='$adress',`description`='description',`type`='type',`age`='age',`hobbys`='hobbys',`userEmail`='userEmail',`contactnumber`='contactnumber'
			WHERE animalId= $animalId";

		if(mysqli_query($conn, $sql)){
			echo "success <br> <a href='../index.php'>Back to Home page</a>";
		}else {
			echo "error";
		}
	}


?>