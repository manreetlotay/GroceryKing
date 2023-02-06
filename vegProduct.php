<?php session_start();

$xml = simplexml_load_file("productInfo.xml");
if(isset($_GET['id'])){
  foreach ($xml->vegetables->product as $product) {
      if ($product->id == $_GET['id']) {
        $id = $product->id;
        $image = $product->image;
        $name = $product->name;
        $inventory = $product->inventory;
        $price = $product->price;
        $description = $product->description;
        break;
      }
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?></title>
    <link rel="Stylesheet" href="AllProducts.css">
    <!-- font awesome link -->
	<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css>
</head>

<body>
	<!--header starts-->
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
	<!--header ends-->

	</br></br></br></br></br></br></br></br></br></br></br>

	<!--Product section-->
	<div class="vegProduct">
    <img src="<?= $image?>" alt="image of <?= $image?>" height="250"/>

		<h2 id="item"><?= $name?></h2>
		<h4>1 <?= $name?> / Unit</h4>

		<!--Price of product-->
		<div style="display: flex;">
		<span> Price: </span>
		<input type="text" id="price" value="<?= $price?>" disabled="disabled" onkeyup="displayPrice()"/><span style="display: block; padding-left: 10px;">$</span>
		</div> </br></br>
		<!--Get user to enter quantity-->
		<form id="add-form" action ="" method = "get">
		<span>Enter quantity: </span>
		<input type="text" name="vegetables" id="quantity"  maxlength="2" onkeyup="displayPrice()" window.onload = function()> </br>

		<!--display item total-->
		<div style="padding-top:10px">
		    <div style="display: flex;">
			 <span>Item Total: </span>
			 <input type="text" id="total" readonly="readonly"/>
			 <span style="display: block; padding-left: 10px;">$</span>
			</div>
		</div></br>

		<!--Add to cart btn-->
		<input type="submit" id="cart" value="Add to Cart" onclick="addProduct(event)"/> </br></br>
		</form>

		<!--Description button for Vegetable-->
		<button class="accordion"> More Description </button>
		<div class="content">
		  <p><?= $description?></p>
		</div>
	</div>

	<!--Product section ends here-->


	<!-- footer-->
	<br></br>
		<div id="div_foot">
		<section class="footer">

		  <div class="box-container">

			<div class="box">
			  <h3><i class="fa-solid fa-square-share-nodes"></i> <span class="green"> Find Us </span></h3>
			  <div class="share">
				<a href="#" class="fab fa-facebook"></a>
				<a href="#" class="fab fa-instagram"></a>
				<a href="#" class="fab fa-twitter"></a>
			  </div>
			</div>

			<div class="box">
				<h3><i class="fas fa-id-badge"></i> <span class="green"> Customer Service </span></h3>
				<a href="#" class="links"><i class="fas fa-phone"></i><span class="green"> +1 (514) 123-4567 </span></a>
				<a href="#" class="links"><i class="fas fa-envelope"></i><span class="green"> gk_inquiries@gmail.com </span></a>
				<a href="#" class="links"><i class="fa-solid fa-map-location-dot"></i><span class="green"> Montreal, Canada </span></a>
			</div>

			<div class ="box">
			  <h3><i class="fa-solid fa-newspaper"></i><span class="green"> Newsletter </span></h3>
			  <p><span class="green"> Subscribe For Latest Updates </span></p>
			  <input type="email" placeholder="Email Address" class="email">
			  <input type="submit" value="subscribe" class="btn">
			  <img src="images/Payments.png" class="payments-img" alt="Card Payment Options">
			</div>

			</div>

		  <div class="credit"> Created By <span> Team:) </span> | All Rights Reserved </div>

		</section>
		</div>

		<!--js file-->
		<script src="add_cart.js"></script>
		<script src="AllProducts.js"></script>

</body>
</html>
