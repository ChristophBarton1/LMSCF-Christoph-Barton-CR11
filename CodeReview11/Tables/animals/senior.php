<!DOCTYPE html>

<html>
<body>
<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "cr11_christophbarton_petadoption";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}



$sql = "SELECT `type`,  FROM animals";
$result = mysqli_query($conn, $sql);
// fetch the next row (as long as there are any) into $row

echo  "Fetched data successfully\n";
// Free result set
mysqli_free_result($result);
// Close connection
mysqli_close($conn);
?>
</body>
</html>