<?php 
session_start();
include "db_connect.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
}
 ?>



<?php
  $id=$_SESSION['id'];

     $sql = "DELETE FROM users WHERE id='$id'";




if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Delete your account successfully")</script>';
  header("Location: index.php");
  
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>