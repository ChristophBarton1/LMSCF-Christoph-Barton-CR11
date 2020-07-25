<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">



</head>
<body>
	<?php
		include ("actions/db_connect.php");

		$sql ="SELECT * FROM animals";
		$result = mysqli_query($conn, $sql);

		if($result->num_rows == 0){
			echo "No result";
		}elseif($result->num_rows == 1){
			$row = $result->fetch_assoc();
			echo $row["title"] ." ".
			$row["location"]." ".$row["adress"]." ".$row["description"]." ". $row["type"]." ". $row["age"]." ". $row["hobbys"]." ". $row["userEmail"]." ". $row["contactnumber"];
		}else {
			$rows = $result->fetch_all(MYSQLI_ASSOC);

			echo "<table class='table bg-light'>
  <thead>
    <tr>
      <th scope='col'>animalId</th>
      <th scope='col'>name</th>
      <th scope='col'>location</th>
      <th scope='col'>adress</th>
      <th scope='col'>description</th>
      <th scope='col'>type</th>
      <th scope='col'>age</th>
      <th scope='col'>hobbys</th>
      <th scope='col'>Owners email adress</th>
      <th scope='col'>Owners telephone number</th>
      
      
      
      
    </tr>
  </thead><tbody>";
			foreach ($rows as $key => $value)   {
				// echo $value["id"]. " &nbsp;&nbsp;&nbsp;&nbsp; " .$value["title"].";".$value["genre"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				// 	".$value["author"]."-------->".$value["ISBN_Code"]."---->
				// 	<a href='create.php?id=".$value["id"]."'>Create</a>  
				// 	<a href='update.php?id=".$value["id"]."'>Update</a> 
				// 	<a href='delete.php?id=".$value["id"]."'>Delete</a><br> <hr/ >" ;
						echo " <tr>
								      
								      <td>".$value["animalId"]."</td>
								      <td>".$value["name"]."</td>
								      <td>".$value["location"]."</td>
								      <td>".$value["adress"]."</td>
								      <td>".$value["description"]."</td>
								      <td>".$value["type"]."</td>
								      <td>".$value["age"]."</td>
								      <td>".$value["hobbys"]."</td>
								      <td>".$value["userEmail"]."</td>
								      <td>".$value["contactnumber"]."</td>
								  </tr>";

			};

			echo "</tbody></table>";

		}
	?>
	    
	<form action = "index.php_login.php">
		
	<h2><center><button  type="submit" class= "btn btn-block btn-primary" name = "btn-login">You can contact the owners of the animals with their thelphone number or email adress..if you are interested..</br>
	if not..just click this button and logout!</button>

		

     
</body>
</html>