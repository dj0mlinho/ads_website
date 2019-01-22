<?php require "config/boot.php"; ?>
<?php $title = "Home Page"?>
<?php 
  $sql = "SELECT * FROM ads";
  $query = mysqli_query($db,$sql);
  $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<?php require "index.view.php"; ?>







