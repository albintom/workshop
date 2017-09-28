<?php
session_start();
include 'dbcon.php';

if(isset($_POST['submit']))
{
$a=$_POST["uname"];
$b=$_POST["psw"];

$sql="SELECT * FROM `login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$i=$row['id'];
	?>

	<?php
	if($a==  $row['username']&&$b==$row['password'])
	{
$_SESSION['username']= $a;
			if($a==  $row['username']&&$b==$row['password']&&$row['usertype']=='user')
	{
$_SESSION['username']= $a;
		 header('location:user_home.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE id=$i";
         $result=mysqli_query($con,$sql1);
		 break;
	}

	if($a==  $row['username']&&$b==$row['password']&&$row['usertype']=='admin')
	{

		 header('location:adminhome.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE id=$i";
         $result=mysqli_query($con,$sql1);
		 break;
	}

	}
	else{

	//	echo <script> alert("inalid username and password");</script>;
		header('location:userlogin.php');
	}
	?>



	<?php
}
}
?>
