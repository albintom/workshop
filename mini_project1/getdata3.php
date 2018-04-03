<<<<<<< HEAD
<?php
include_once "dbcon.php";

if (!empty($_POST["spare_id"])) {
  $spare_id = $_POST["spare_id"];

  $query = "SELECT * FROM `spare_category` WHERE spare_id = $spare_id";

  $results = mysqli_query($con, $query);
  ?>
  <option >Spare category</option>
  <?php

  foreach($results as $spare_category){
    ?>

    <option value="<?php echo $spare_category["category_id"]; ?>"><?php echo $spare_category["category"]; ?></option>

     <?php
}
}
?>
=======
<?php
include_once "dbcon.php";

if (!empty($_POST["spare_id"])) {
  $spare_id = $_POST["spare_id"];

  $query = "SELECT * FROM `spare_category` WHERE spare_id = $spare_id";

  $results = mysqli_query($con, $query);
  ?>
  <option >Spare category</option>
  <?php

  foreach($results as $spare_category){
    ?>

    <option value="<?php echo $spare_category["category_id"]; ?>"><?php echo $spare_category["category"]; ?></option>

     <?php
}
}
?>
>>>>>>> 2bafd65fad1e4671c1b6ddd38b6c8feb36989262
