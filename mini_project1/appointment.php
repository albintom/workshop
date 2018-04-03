<<<<<<< HEAD
<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
$a=$_POST["type"];
//echo "<script> alert('hai');</script>";
$b=$_POST["brand"];

$f=$_POST["model"];
$g=$_POST["phoneno"];
$h=$_POST["millage"];
$i=$_POST["current_date"];
$j=$_POST["app_date"];
$k=$_POST["contact"];
$l=$_POST["service"];

$id1=$_SESSION["id"];
//echo($id1);
$sql4="SELECT `reg_id` FROM `login` where `login_id`='$id1'";
$result4=mysqli_query($con,$sql4);
$row4=mysqli_fetch_array($result4);
$rid=$row4['reg_id'];
//echo($rid);
$sql3="INSERT INTO `appointment`(`reg_id`, `vehicle_type`, `vehicle_brand`, `vehicle_model`, `vehicle_year`, `millage`, `crnt_date`, `apnt_date`, `cont_no`, `service`) VALUES ('$rid','$a','$b','$f','$g','$h','$i','$j','$k','$l')";

$result3=mysqli_query($con,$sql3);

echo"<script>alert('your appointment Successfull');</script>)";

}

 //header('location:appointment.php');
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
                                        <li class="active"><a class="smoth-scroll" href="userhome.php">Home <div class="ripple-wrapper"></div></a>
                                        </li>

                                                                                                                                            <li><a class="smoth-scroll" href="userprofile.php">Profile</a>
                                                                                                                                                                </li>

                                                            <li><a class="smoth-scroll" href="appointment.php">Service Appointment</a>
                                                                                </li>

                                                    <li><a class="smoth-scroll" href="spare.php">Buy Spare</a>
                                                              </li>

                              <li><a class="smoth-scroll" href="second.php">Buy Second</a>
                                                        </li>

                                          <li><a class="smoth-scroll" href="feedback.php">FeedBack</a>

                                        </li>
										<li><a class="smoth-scroll" href="logout.php">Logout</a>
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
		<br><br><br>
		<center><b><h2>
		SERVICE APPOINTMENT</h2></b></center>




	 <div class="dd3">
	 <br>
<form name="myform" action="#" method="POST" id="form">
    <form action="">
  <center>
        <tr>
      <td><b>Vehicle Type</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="text"name="type" placeholder="Enter vehicle Type" required></td></tr>
	  <br><br>
	  <tr>
     <td><b>Vehicle Brand</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	 <td><input type="text" name="brand" placeholder="Enter Vehocle brand" required></textarea></td></tr>
	 <br><br>
	  <tr>
     <td><b>Vehicle model</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="text" name="model" placeholder="Enter Vehicle Model" required></tr>
	  <br><br>
	 <tr>
      <td><b>Vehicle mft year</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="number" name="phoneno" placeholder="Enter Year" required></tr>
	  <br><br>
	  <tr>
       <td><b>Millage</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="text" name="millage" placeholder="Enter Millage" required></tr>
	  <br><br>
	 <tr>
       <td><b>Current date</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="date" name="current_date" placeholder="Enter date" required></tr>
	  <br><br>
	   <tr>
	     <td><b>Appointment date</b></td>&nbsp
	  <td><input type="date" name="app_date" placeholder="Enter date" required></tr>
	  <br><br>
	   <td><b>Contact No</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="Phone" name="contact" placeholder="Enter Phoneno" required></tr>
	  <br><br>
	  <td><b>Service Needed</b></td>&nbsp&nbsp&nbsp&nbsp
	  <td><input type="text" name="service" placeholder="Enter Service" required></tr>
	  <br><br>
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
=======
<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
$a=$_POST["type"];
//echo "<script> alert('hai');</script>";
$b=$_POST["brand"];

$f=$_POST["model"];
$g=$_POST["phoneno"];
$h=$_POST["millage"];
$i=$_POST["current_date"];
$j=$_POST["app_date"];
$k=$_POST["contact"];
$l=$_POST["service"];

$id1=$_SESSION["id"];
//echo($id1);
$sql4="SELECT `reg_id` FROM `login` where `login_id`='$id1'";
$result4=mysqli_query($con,$sql4);
$row4=mysqli_fetch_array($result4);
$rid=$row4['reg_id'];
//echo($rid);
$sql3="INSERT INTO `appointment`(`reg_id`, `vehicle_type`, `vehicle_brand`, `vehicle_model`, `vehicle_year`, `millage`, `crnt_date`, `apnt_date`, `cont_no`, `service`) VALUES ('$rid','$a','$b','$f','$g','$h','$i','$j','$k','$l')";

$result3=mysqli_query($con,$sql3);

echo"<script>alert('your appointment Successfull');</script>)";

}

 //header('location:appointment.php');
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
                                        <li class="active"><a class="smoth-scroll" href="userhome.php">Home <div class="ripple-wrapper"></div></a>
                                        </li>

                                                                                                                                            <li><a class="smoth-scroll" href="userprofile.php">Profile</a>
                                                                                                                                                                </li>

                                                            <li><a class="smoth-scroll" href="appointment.php">Service Appointment</a>
                                                                                </li>

                                                    <li><a class="smoth-scroll" href="spare.php">Buy Spare</a>
                                                              </li>

                              <li><a class="smoth-scroll" href="second.php">Buy Second</a>
                                                        </li>

                                          <li><a class="smoth-scroll" href="feedback.php">FeedBack</a>

                                        </li>
										<li><a class="smoth-scroll" href="logout.php">Logout</a>
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
		<br><br><br>
		<center><b><h2>
		SERVICE APPOINTMENT</h2></b></center>




	 <div class="dd3">
	 <br>
<form name="myform" action="#" method="POST" id="form">
    <form action="">
  <center>
        <tr>
      <td><b>Vehicle Type</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="text"name="type" placeholder="Enter vehicle Type" required></td></tr>
	  <br><br>
	  <tr>
     <td><b>Vehicle Brand</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	 <td><input type="text" name="brand" placeholder="Enter Vehocle brand" required></textarea></td></tr>
	 <br><br>
	  <tr>
     <td><b>Vehicle model</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="text" name="model" placeholder="Enter Vehicle Model" required></tr>
	  <br><br>
	 <tr>
      <td><b>Vehicle mft year</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="number" name="phoneno" placeholder="Enter Year" required></tr>
	  <br><br>
	  <tr>
       <td><b>Millage</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="text" name="millage" placeholder="Enter Millage" required></tr>
	  <br><br>
	 <tr>
       <td><b>Current date</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="date" name="current_date" placeholder="Enter date" required></tr>
	  <br><br>
	   <tr>
	     <td><b>Appointment date</b></td>&nbsp
	  <td><input type="date" name="app_date" placeholder="Enter date" required></tr>
	  <br><br>
	   <td><b>Contact No</b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <td><input type="Phone" name="contact" placeholder="Enter Phoneno" required></tr>
	  <br><br>
	  <td><b>Service Needed</b></td>&nbsp&nbsp&nbsp&nbsp
	  <td><input type="text" name="service" placeholder="Enter Service" required></tr>
	  <br><br>
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
>>>>>>> 2bafd65fad1e4671c1b6ddd38b6c8feb36989262
