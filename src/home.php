<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>USER-HOME</title>
	<link rel="stylesheet" type="text/css" href="style_log.css">
</head>
<body>
     <h1>Welcome, <?php echo $_SESSION['user_name']; ?></h1>
     <p>Here is your speical coupon for today:</p>
     <?php 
     $coupon = uniqid();  
     echo "Coupon Code:", $coupon, "\n";
     ?>
     
     <a href="index.html" style="color:white">Go back to Main page</a>
     <a class="changepass" href="changepass.html" style="color:white">Change your Password</a>
     <a href='delete.php' style="color:white">Deactive my account</a>
     <a class="fcc-btn" href="logout.php" style="color:black">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>