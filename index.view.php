<?php require "partials/head.php"; ?>
<?php require "partials/navbar.php"; ?>
<?php foreach ($result as $ad): ?>
  <div class="card text-white bg-primary m-1" style="max-width: 20rem;">
    <div class="card-header text-center">
      <a href="category.php?cat=<?php echo $ad['category'] ?>" type="button" class="btn btn-success"><?php echo $ad['category']; ?></a>
    </div>
    <div class="card-body text-center">
      <p class="card-text"><?php echo $ad['ad_text']; ?></p>
    </div>
    <div class="card-footer">
      <a href="userAds.php?user=<?php echo $ad['full_name'] ?>" type="button" class="btn btn-danger float-left m-1"><?php echo $ad['full_name']; ?></a>
      <a type="button" class="btn btn-warning float-right m-1"><?php echo $ad['price']; ?></a>
    </div>
</div>
<?php endforeach ?>
<?php require "partials/end.php"; ?>
