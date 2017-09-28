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
