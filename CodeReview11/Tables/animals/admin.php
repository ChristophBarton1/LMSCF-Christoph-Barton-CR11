<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['admin' ]) ) {
 header("Location: register.php");
 exit;
}
// select logged-in users details
$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['admin']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);


$resCar = mysqli_query($conn, "SELECT * FROM animals WHERE available = 'yes'");

?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome - <?php echo $userRow['userEmail' ]; ?></title>
</head>
<body >	<?php
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
 
      
      
      
      
    </tr>
  </thead><tbody>";
			foreach ($rows as $key => $value)   {
				 echo $value["animalId"]. " &nbsp;&nbsp;&nbsp;&nbsp; " .$value["name"].";".$value["location"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				 	".$value["adress"]."-------->".$value["description"]."-------->".$value["age"]."-------->".$value["hobbys"]."-------->".$value["userEmail"]."-------->".$value["contactnumber"]."
				 	<a href='create.php?id=".$value["animalId"]."'>Create</a>  
					<a href='update.php?id=".$value["animalId"]."'>Update</a> 
				 	<a href='delete.php?id=".$value["animalId"]."'>Delete</a><br> <hr/ >" ;
						//echo " <tr>
								      
								//      <td>".$value["animalId"]."</td>
								  //    <td>".$value["name"]."</td>
								   //   <td>".$value["location"]."</td>
								    //  <td>".$value["adress"]."</td>
								     // <td>".$value["description"]."</td>
								  //    <td>".$value["type"]."</td>
								     // <td>".$value["age"]."</td>
								    //  <td>".$value["hobbys"]."</td>
								    //  <td>".$value["userEmail"]."</td>
								    //  <td>".$value["contactnumber"]."</td>
								//  </tr>";

			};

			echo "</tbody></table>";

		}
	?>
	  


           Hi <?php echo $userRow['userEmail' ]; ?>
           
           <a  href="index.php_login.php">Sign Out</a><br><hr>


 
</body>
</html>
<?php ob_end_flush(); ?>