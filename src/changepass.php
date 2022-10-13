<?php

session_start();
 

if (!(isset($_SESSION['user_name']) || $_SESSION['user_name'] == ''))
{
    header("location:log_in.php");
}

$dbcon = mysqli_connect("localhost", "root", "","test_db") or die(mysqli_error($dbcon));

$password1 = mysqli_real_escape_string($dbcon, $_POST['newPassword']);
$password2 = mysqli_real_escape_string($dbcon, $_POST['confirmPassword']);
$username = mysqli_real_escape_string($dbcon, $_SESSION['user_name']);

if ($password1 <> $password2)
{
    echo "your passwords do not match";
    header("Location: changepass.html?error=User Name is required&$user_data");
}
else if (mysqli_query($dbcon, "UPDATE users SET password='$password1' WHERE user_name='$username'"))
{
    echo "You have successfully changed your password.";
    
    header("Location: index.php");
}
else
{
    mysqli_error($dbcon);
}
mysqli_close($dbcon);

?>