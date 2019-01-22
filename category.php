<?php require("config/boot.php") ?>
<?php $title = "Category" ?>



<?php
$category = $_GET['cat'];

$sql = "SELECT * FROM ads WHERE category='$category'";
$query = mysqli_query($db, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

 ?>

<?php require("index.view.php") ?>
