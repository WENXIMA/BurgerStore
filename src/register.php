<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style_log.css">
</head>
<body>
     <form action="signUp.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Phone Number</label>
          <?php if (isset($_GET['pnum'])) { ?>
               <input type="text" 
                      name="pnum" 
                      placeholder="Phone Number"
                      value="<?php echo $_GET['pnum']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="pnum" 
                      placeholder="Phone Number"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>