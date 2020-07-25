<?php 

$hostName = "localhost";
$username = "root";
$password = "";
$dbname = "cr11_christophbarton_petadoption";

 
$conn = mysqli_connect($hostName, $username, $password, $dbname);

     if(!$conn){ 
     		echo "error";
} else {
    // echo "Successfully Connected";
}

?>