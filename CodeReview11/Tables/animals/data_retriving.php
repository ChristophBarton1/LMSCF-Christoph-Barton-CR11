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
/* sql to create table
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
*/
$sql = "SELECT `animalId`, `name`, `location`, `adress`, `description`, `type`, `age`, `hobbys`, `userEmail`, `contactnumber` FROM animals";
$result = mysqli_query($conn, $sql);
// fetch the next row (as long as there are any) into $row
while($row = mysqli_fetch_assoc($result)) {
       printf("ID=%s %s (%s)<br>",
                     $row[ "animalId"], $row["name"],$row["location"],$row["adress"],$row["description"],$row["type"],$row["age"],$row["hobbys"],$row["userEmail"],$row["contactnumber"]);
}
echo  "Fetched data successfully\n";
// Free result set
mysqli_free_result($result);
// Close connection
mysqli_close($conn);
?>
</body>
</html>