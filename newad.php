<?php require "config/boot.php"; ?>
<?php require "partials/head.php"; ?>
<?php require "partials/navbar.php"; ?>


<form action="addToDb.php" method="post">
  <h2 class="text-center">Ad Form</h2>
  <label for="full_name">Full Name</label>
  <input type="text" class="form-control" id="full_name" placeholder="full_name" name="full_name">

  <label for="ad_text">Ad text</label>
  <textarea class="form-control" id="ad_text" rows="3" name="ad_text"></textarea>

  <label for="category">Category</label>
  <select class="form-control" id="category" name="category">
    <option>Racunari</option>
    <option>Namestaj</option>
    <option>Bela tehnika</option>
    <option>Alat i oprema</option>
    <option>Ostalo</option>
  </select>

  <label class="control-label" for="price">Price</label>
  <div class="form-group">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">RSD</span>
      </div>
      <input name="price" type="text" aria-label="Amount (to the nearest dollar)">
    </div>
  </div>
  <button name="addBtn" type="submit" class="btn btn-primary">Add Ad</button>
</form>
<?php require "partials/end.php"; ?>
