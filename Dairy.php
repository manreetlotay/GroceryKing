<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Grocery King dairyProduct </title>

  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
  />

  <!-- font awesome link -->
  <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css>

  <!-- custom css file link -->
  <link rel="stylesheet" href="css\styleP2.css">

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

<!-- Dairy section starts -->
<section class="allproducts" id="allproducts">

  <h1 class="heading"> <span> Dairy </span> </h1>

    <div class="swiper product-slider">

      <div class="swiper-wrapper">

        <?php
                  $dairyProduct = simplexml_load_file("productInfo.xml");
                  foreach ($dairyProduct->dairy->product as $product){
                      $id = $product->id;
                      $image = $product->image;
                      $name = $product->name;
                      $inventory = $product->inventory;
                      $price = $product->price;
                      $description = $product->description;
              ?>

        <div class="swiper-slide box-container">
          <div class="box">
            <a href="dairyProduct.php?id=<?= $id ?>" class="logo"><img src="<?= $image ?>" alt="<?= $name ?>"></a>
            <a href="dairyProduct.php?id=<?= $id ?>" class="logo"><h3> <?= $name ?> </h3></a>
            <div class="price"> <?= $price ?>/Quantity </div>
          </div>
        </div>

          <?php } ?>

    </div>
    </div>

  </section>
  <!-- Dairy section ends -->

  <!-- footer section starts -->

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

<!-- footer section ends -->

<!-- slider link here -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js\script.js"></script>

</body>
</html>
