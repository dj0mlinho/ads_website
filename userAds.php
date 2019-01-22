<?php require("config/boot.php") ?>
<?php $title = "User Ad" ?>



<?php
$full_name = $_GET['user'];

$sql = "SELECT * FROM ads WHERE full_name='$full_name'";
$query = mysqli_query($db, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

 ?>

<?php require("index.view.php") ?>
