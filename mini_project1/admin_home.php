<<<<<<< HEAD
<?php
include 'dbcon.php';
session_start();
if(!(isset($_SESSION['user_name'])))
{
  header('location:login.php');
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
                                        <li class="active"><a class="smoth-scroll" href="admin_home.php">Home <div class="ripple-wrapper"></div></a>
                                        </li>

                                        <!--editing started-->

                              <li class="dropdown">

                          <a href class="dropbtn" >ADD</a>
                        <div class="dropdown-content">
                    <a href="add_spare.php">add spare</a>
                            <a href="second_type.php">add second type</a>
                            <a href="second_model.php">add second model</a>

                                </div>
                            </li>



                                <li class="dropdown">

                                  <a href class="dropbtn">VIEW</a>
                                          <div class="dropdown-content">
                                      <a href="admin_view_reg.php">Reg Details</a>
                                        <a href="admin_view_feedback.php">Feedback</a>
                                          <a href="admin_view_appointment.php">Appointment</a>

                                                                      </div>
                                                                    </li>

                                               </li>
                                        <li><a class="smoth-scroll" href="logout.php">Logout</a>
                                                            </li>


<!--edit ended-->

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
	 <center><h2><b>WELCOME<b></h2></center>
<center>
	 <p><h2><font color="black">
	 <?php
echo($_SESSION['user_name']);
?>
</h3></p><font></center>

	 <div class="dd1">
	 <br>
<form name="form" action="#" method="POST" id="form">





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
if(!(isset($_SESSION['user_name'])))
{
  header('location:login.php');
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
                                        <li class="active"><a class="smoth-scroll" href="admin_home.php">Home <div class="ripple-wrapper"></div></a>
                                        </li>

                                        <!--editing started-->

                              <li class="dropdown">

                          <a href class="dropbtn" >ADD</a>
                        <div class="dropdown-content">
                    <a href="add_spare.php">add spare</a>
                            <a href="second_type.php">add second type</a>
                            <a href="second_model.php">add second model</a>

                                </div>
                            </li>



                                <li class="dropdown">

                                  <a href class="dropbtn">VIEW</a>
                                          <div class="dropdown-content">
                                      <a href="admin_view_reg.php">Reg Details</a>
                                        <a href="admin_view_feedback.php">Feedback</a>
                                          <a href="admin_view_appointment.php">Appointment</a>

                                                                      </div>
                                                                    </li>

                                               </li>
                                        <li><a class="smoth-scroll" href="logout.php">Logout</a>
                                                            </li>


<!--edit ended-->

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
	 <center><h2><b>WELCOME<b></h2></center>
<center>
	 <p><h2><font color="black">
	 <?php
echo($_SESSION['user_name']);
?>
</h3></p><font></center>

	 <div class="dd1">
	 <br>
<form name="form" action="#" method="POST" id="form">





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
