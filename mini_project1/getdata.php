<<<<<<< HEAD
<?php
include_once "dbcon.php";

if (!empty($_POST["spare_id"])) {
  $spare_id = $_POST["spare_id"];

  $query = "SELECT * FROM spare_vehicle_model WHERE spare_id = $spare_id";

  $results = mysqli_query($con, $query);
  ?>
  <option >select model</option>
  <?php

  foreach($results as $spare_vehicle_model){
    ?>

    <option value="<?php echo $spare_vehicle_model ["spare_vehicle_model_id"]; ?>"> <?php echo $spare_vehicle_model["spare_vehicle_model"]; ?></option>

     <?php
}
}
?>
=======
<?php
include_once "dbcon.php";

if (!empty($_POST["spare_id"])) {
  $spare_id = $_POST["spare_id"];

  $query = "SELECT * FROM spare_vehicle_model WHERE spare_id = $spare_id";

  $results = mysqli_query($con, $query);
  ?>
  <option >select model</option>
  <?php

  foreach($results as $spare_vehicle_model){
    ?>

    <option value="<?php echo $spare_vehicle_model ["spare_vehicle_model_id"]; ?>"> <?php echo $spare_vehicle_model["spare_vehicle_model"]; ?></option>

     <?php
}
}
?>
>>>>>>> 2bafd65fad1e4671c1b6ddd38b6c8feb36989262
