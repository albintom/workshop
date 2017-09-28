<?php
include 'dbcon.php';
session_start();
if(!(isset($_SESSION['user_name'])))
{
  header('location:login.php');
}
//name,addres,email,phone
if(isset($_POST['submit']))
{
	
$a=$_POST["name"];
$b=$_POST["addres"];
$c=$_POST["email"];
$d=$_POST["phone"];
$e=$_POST["id1"];
//echo($d);
//UPDATE `reg` SET `id`=[value-1],`name`=[value-2],`addres`=[value-3],`email`=[value-4],`phone`=[value-5],`username`=[value-6],`password`=[value-7] WHERE 1
$sql2="UPDATE `reg` SET `name`='$a',`addres`='$b',`email`='$c',`phone`='$d' WHERE `id`='$e'";
$result2=mysqli_query($con,$sql2);

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
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  max-height: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
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

	 </br> </br>
	 <center><h2><b>Your Register Details</b></h2></center>
</br></br></br>
   <div class="card">
 <form action="#" method="post">
    <?php
  include 'dbcon.php';
  $dd=$_SESSION["id"];
  //echo ($dd);s
  //`reg_id``reg_id``login_id`SELECT * FROM `login` WHERE 1
  $result1=mysqli_query($con,"select `reg_id` from `login` WHERE `login_id`=$dd");
  $row1=mysqli_fetch_assoc($result1);
  $rid=$row1['reg_id'];
  $result=mysqli_query($con,"select * from reg WHERE `id`=$rid");

   while($row=mysqli_fetch_array($result))
   {
   	?>
   
    <p><b><h2><?php echo $row['name'];?></h2></b> </p>
     <p>name:<input type="text"  name="name"value="<?php echo $row['name'];?> " style="margin-left:10%;"></p>
	   <p>addres:<input type="text" name="addres" value="<?php echo $row['addres'];?> " style="margin-left:6%;"></p>
	     <p>email:<input type="text" name="email" value="<?php echo $row['email'];?> " style="margin-left:10%;"></p>
		   <p>phone:<input type="text" name="phone" value="<?php echo $row['phone'];?> " style="margin-left:8%;"></p>
	 <input type="hidden" name="id1" value="<?php echo $row['id'];?> " style="margin-left:8%;">
    <!--
     <p class="title">CEO & Founder, Example</p>
     <p>Harvard University</p>-->
     <div style="margin: 24px 0;">
       <!--<a href=""><i class="fa fa-dribbble"></i></a>
       <a href="#"><i class="fa fa-twitter"></i></a>
       <a href="#"><i class="fa fa-linkedin"></i></a>
       <a href="#"><i class="fa fa-facebook"></i></a> -->
   <?php
   }
   ?>
    </div>
    <div style="background-color:black;">
    <p><input type="submit" name="submit" value="Edit"></p>
	</form>
   </div>
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
