<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
$a=$_POST["name"];
//echo "<script> alert('hai');</script>";
$b=$_POST["address"];

$f=$_POST["email"];
$g=$_POST["phoneno"];
$h=$_POST["username"];
$i=$_POST["password"];

/*$sqll="SELECT `username` FROM `reg` WHERE username='$h'";
$result=mysqli_query($con,$sqll) or die("Connection Failed!");
$arr=mysqli_fetch_array($result);
if($arr)
{
	echo"<script>alert('Username already exist!!!');</script>)";
}
else{*/
$q1 = "SELECT `id` FROM `reg` WHERE username= '$h' ";
$result22 = $con->query($q1);
$row1 = $result22->fetch_assoc();
if($row1["id"]=="")
{
  $sql="INSERT INTO `reg`(`name`, `addres`, `email`, `phone`, `username`, `password`) VALUES ('$a','$b','$f','$g','$h','$i')";
//  $sql="INSERT INTO `register`( `name`, `address`,  `email`, `phoneno`, `username`, `password`) VALUES ('$a','$b','$f','$g','$h','$i')";
$result=mysqli_query($con,$sql);
$q = "SELECT `id` FROM `reg` WHERE email= '$f' ";
$result = $con->query($q);
$row = $result->fetch_assoc();
$rid=$row["id"];

//SELECT `id`, `name`, `addres`, `email`, `phone`, `username`, `password` FROM `reg` WHERE 1


$sql1="INSERT INTO `login`(`reg_id`, `username`, `password`, `user_type`, `status`) VALUES ('$rid','$h','$i','user','0')";
$result1=mysqli_query($con,$sql1);
$subject = "eworkshop";

$message = "hi welcome to eworkshop";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($f,$subject,"$message",$headers);
echo "<script>if(confirm('data inserted Successfully!!!')){document.location.href='Register.php'}else{document.location.href='index.php'};</script>";
}
else
  {
    echo "<script>if(confirm('$h already exist please try with another username!!!')){document.location.href='Register.php'}else{document.location.href='index.php'};</script>";
  }
}


?>




<!DOCTYPE html>
<html lang="en">
`
  <head>
<style>
.home-section-background1{
    position: relative;
    height: 100%;
    background: url(../images/bg/plane.jpg);
    background-size: cover;

}
.header-top-area {
    position:relative;
    width: 100%;
	height:10%;
	margin-top:-5px;
	border:2px solid black;
   z-index:-2;
	background: rgba(0, 0, 0, 0.8);
   	color:black;
}
.tr{
margin:30px;
}
</style>
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">


    <title>e workshop</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">

    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">

    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" type="text/css" href="css/work.css">



    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">


    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


 </head>

  <body>

    <!-- Home & Menu Section Start -->
    <header id="home" class="home-section">

        <div class="header-top-area">
            <div class="container">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index.php">E-WORKSHOP</a>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">

                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="index.php">Home <div class="ripple-wrapper"></div></a>
                                        </li>


                    <li><a class="smoth-scroll" href="Register.php">Register</a>
                                        </li>
                                        </li>
										<li><a class="smoth-scroll" href="login.php">Login</a>
                                        </li>




                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</style>


        <div class="home-section-background1" data-stellar-background-ratio="0.6" >
		 <div class="header-top-area1">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">

                        </div>

                    </div>
                </div>
            </div>

        </div>

	 </br><br>
	 <center><h2>REGISTER</h2></center>

<br>
	 <div class="dd">
	 <br>
<form name="myform" action="#" method="POST" id="form">
    <form action="">
  <center>
        <tr>
        &nbsp  &nbsp<td><b>Name</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="text"name="name" placeholder="Enter name" required></td></tr>
	  <br><br>
	  <tr>
      &nbsp  <td><b>Address</b></td>&nbsp&nbsp&nbsp&nbsp
	 <td><textarea rows="4" cols="23" style=height:30; width:50; name="address" placeholder="Enter Address" required></textarea></td></tr>
	 <br><br>
	  <tr>
      &nbsp  <td><b>Email</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="email" name="email" placeholder="Enter Email" required></tr>
	  <br><br>
	 <tr>
      &nbsp  <td><b>Phone</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="number" name="phoneno" placeholder="Enter Phone" required></tr>
	  <br><br>
	  <tr>
      &nbsp  <td><b>Username</b></td>
	  <td><input type="text" name="username" placeholder="Enter Username" required></tr>
	  <br><br>
	 <tr>
      &nbsp  <td><b>password</b></td>&nbsp
	  <td><input type="password" name="password" placeholder="Enter Password" required></tr>
	  <br><br>
	   <tr>
       <center>
       <button class="button" value="Submit" name="submit">Submitt</button>

     </center>

	 </div>
	 </form>
    </header>


    <!-- Home & Menu Section End-->






    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->


    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA"></script>

    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>


  </body>
 </html>
