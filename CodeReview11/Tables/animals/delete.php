<?php
   require_once 'actions/db_connect.php';
   if($_GET["animalId"]){
      $id = $_GET["animalId"];

      $sql = "DELETE FROM animals WHERE animalId = $animalId";

      if(mysqli_query($conn, $sql)){
         echo "success <br> <a href='index.php' >Back to home page</a>";
      }else{
         echo "error";
      }
   }
   #$connect->close();
?>