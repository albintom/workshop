<?php
include_once "dbcon.php";

if (!empty($_POST["spare_id"])) {
  $spare_id = $_POST["spare_id"];

  $query = "SELECT * FROM `spare_model_year` WHERE spare_id = $spare_id";

  $results = mysqli_query($con, $query);
  ?>
  <option >Model year</option>
  <?php

  foreach($results as $spare_vehicle_model){
    ?>

    <option value="<?php echo $spare_vehicle_model["year_id"]; ?>"><?php echo $spare_vehicle_model["model_year"]; ?></option>

     <?php
}
}
?>
