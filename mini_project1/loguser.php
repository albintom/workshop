<?php
include 'dbcon.php';
 session_start();
if(isset($_POST['submit']))
{
	
$a=$_POST["uname"];
$b=$_POST["psw"];
}

$sql="SELECT * FROM `login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$i=$row['login_id'];
	$rid=$row['reg_id'];
	//SELECT `login_id`, `reg_id`, `username`, `password`, `user_type`, `status` FROM `login` WHERE 1
	
	?>
	
	<?php
	if($a==  $row['username']&&$b==$row['password']&&$row['user_type']=='user')
	     {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['utype']='2';
		 $_SESSION["id"]=$i;
		 
		 $sql1="UPDATE `login` SET `status`='1' WHERE login_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:userhome.php');
		 }
	elseif($a==  $row['username']&&$b==$row['password']&&$row['user_type']=='admin')
	     {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['utype']='2';
		 $_SESSION['id']=$i;
		 
		 $sql1="UPDATE `login` SET `status`='1' WHERE login_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:admin_home.php');
		 }
		 
	else{
		echo "<script>if(confirm('Username and Password are incorect!!!!')){document.location.href='login.php'}else{document.location.href='index.php'};</script>";
	     }
		//echo($_SESSION['id']); 
	?>	
	
	<?php

}
?> 