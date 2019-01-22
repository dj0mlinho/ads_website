<?php
require "config/boot.php";
if(isset($_POST['addBtn'])){
  if(
      isset($_POST['full_name']) && !empty($_POST['full_name']) &&
      isset($_POST['ad_text']) && !empty($_POST['ad_text']) &&
      isset($_POST['category']) && !empty($_POST['category']) &&
      isset($_POST['price']) && !empty($_POST['price'])
    ){
      $full_name = $_POST['full_name'];
      $ad_text = $_POST['ad_text'];
      $category = $_POST['category'];
      $price = $_POST['price'];

      $sql = "INSERT INTO ads VALUES(NULL, '$full_name', '$ad_text', '$category', '$price')";
      $query = mysqli_query($db, $sql);
        if ($query) {
          header("Location: index.php");
        } else {
          echo "Query is not good!" . $sql;
        }
  }else{
  header("Location: newad.php?error=1");
  }
}else{
  header("Location: newad.php");
}










?>
