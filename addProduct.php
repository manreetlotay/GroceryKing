<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Add Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="p11-style.css">
</head>
<body>

  <!-- header section starts -->
  <header class="header">

    <a href="index.php" class="logo"> <i class="fas fa-shopping-basket"> </i> Grocery King </a>

    <nav class="navbar">
      <a href="AllProducts.php">All Products</a>
      <a href="Categories.html">Categories</a>
    </nav>

  <div class="icons">
    <div class="fas fa-bars" id="menu-btn"></div>
    <div class="fas fa-search" id="search-btn"></div>
    <a href="cart.html"><div class="fas fa-shopping-cart" id="cart-btn"></div></a>
    <a href="login.php"><div class="fas fa-user" id="login-btn"></div></a>
  </div>

  <form action="" class="search-form">
    <input type="search" id="search-box" placeholder="Search">
    <label for="search-box" class="fas fa-search"></label>
  </form>

  </header>
  <!-- header section ends -->

<main>
  <div class="container">
      <h1 class="page-header text-center" style="color: orange;">Add or Edit Product </h1>

<!-- Add New -->
			<form method="POST" action="add.php">
        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Image:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="image">
            <h6>Please type in the image in the following format: images\[product_name].jpg</h6>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name">
					</div>
				</div>
        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
            <select name="category" id="category">
              <option value="fruits">Fruits</option>
              <option value="vegetables">Vegetables</option>
              <option value="dairy">Dairy</option>
              <option value="meat">Meat</option>
            </select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Inventory:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="inventory">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="price">
            <h6>Please type in the price in the following format: 0.00</h6>
					</div>
				</div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px;">Description:</label>
          </div>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="description">
          </div>
        </div>
			</div>
            <div class="footer" style="margin-left:126rem;">
                <a href="P7.php" button type="button" class="btn btn-default"><span class="fa-solid fa-xmark"></span> Cancel </button></a>
                <button type="submit" name="add" class="btn btn-primary"><span i class="fa-solid fa-floppy-disk"></span> Save </button>
			</form>
            </div>
<!-- Add ends here -->

</main>

<!-- slider link here -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- custom js file link -->
<script src="js\script.js"></script>

</body>
</html>
