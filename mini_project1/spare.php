
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
< <!-- Meta Tag -->
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

	 </br></br>
<center><b>FIND PART BY VEHICLE</b>
<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp
   <select name="spare_vehicle_maker" onchange="getId(this.value);">
     <option value="">select Vehicle maker</option>
     <?php
     $query = "SELECT * FROM spare_vehicle_maker";
     $results = mysqli_query($con, $query);

     foreach ($results as $spare_vehicle_maker) {
       ?>
       <option value="<?php echo $spare_vehicle_maker["spare_id"]; ?>"> <?php echo $spare_vehicle_maker["spare_vehicle_maker"]; ?></option>

<?php
     }
     ?>
   </select>

&nbsp&nbsp&nbsp&nbsp&nbsp



      <select name="spare_vehicle_model" id="vehicle_modelList" onchange="getId1(this.value);" >
        <option value=" ">vehicle model</option>

      </select>





      &nbsp&nbsp&nbsp&nbsp&nbsp
      <select name="spare_vehicle_year" id="vehicle_yearList" onchange="getId2(this.value);">
        <option value=" ">Model Year</option>

      </select>


            &nbsp&nbsp&nbsp&nbsp&nbsp


                  <select name="spare_category" id="spare_categoryList" >
                     <option value=" ">Spare category</option>

                  </select>


    <script src="js/jquery.js"></script>



   <script>
function getId(val){

  $.ajax({
    type: "POST",
    url: "getdata.php",
    data: "spare_id="+val,
    success: function(data){
      $("#vehicle_modelList").html(data);

}
});
}
function getId1(val){

  $.ajax({
    type: "POST",
    url: "getdata2.php",
    data: "spare_id="+val,
    success: function(data){
      $("#vehicle_yearList").html(data);

}
});
}

function getId2(val){

  $.ajax({
    type: "POST",
    url: "getdata3.php",
    data: "spare_id="+val,
    success: function(data){
      $("#spare_categoryList").html(data);

}
});
}

</script>



  <button class="button" type="submit" name="submit">Go</button>

</center>
