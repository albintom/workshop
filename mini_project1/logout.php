<<<<<<< HEAD
<?php
include 'dbcon.php';
 session_start();
$id=$_SESSION['id'];
$sql="UPDATE `login` SET `status`='0' WHERE `login_id`= '$id'";
$result=mysqli_query($con,$sql);
//UPDATE `login` SET `status`='0' WHERE `login_id=$_SESSION['id'];
session_destroy();
header('location:login.php');
?>
=======
<?php
include 'dbcon.php';
 session_start();
$id=$_SESSION['id'];
$sql="UPDATE `login` SET `status`='0' WHERE `login_id`= '$id'";
$result=mysqli_query($con,$sql);
//UPDATE `login` SET `status`='0' WHERE `login_id=$_SESSION['id'];
session_destroy();
header('location:login.php');
?>
>>>>>>> 2bafd65fad1e4671c1b6ddd38b6c8feb36989262
