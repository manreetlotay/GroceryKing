<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Products List</title>
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
      <h1 class="page-header text-center" style="color: orange;">Products List </h1>
      <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
              <a href="addProduct.php" class="btn btn-primary" style="margin-left:1rem;"><span class="fa-solid fa-plus"></span> Add</a>
              <?php
                  session_start();
                  if(isset($_SESSION['message'])){
                      ?>
                      <div class="alert alert-info text-center" style="margin-top:20px; background-color:orange; color:green; ">
                          <?php echo $_SESSION['message']; ?>
                      </div>
                      <?php
                      unset($_SESSION['message']);
                  }
              ?>
              <table class="table table-bordered table-striped" style="margin-top:30px;">
                  <thead>
                      <th style="text-align: center;">Product</th>
                      <th style="text-align: center;">ID</th>
                      <th style="text-align: center;">Name</th>
                      <th style="text-align: center;">Category</th>
                      <th style="text-align: center;">Inventory</th>
                      <th style="text-align: center;">Price</th>
                      <th style="text-align: center;">Description</th>
                      <th style="text-align: center;">Action</th>
                  </thead>
                  <tbody>
                      <?php
                      //load xml file
                      $file = simplexml_load_file('productInfo.xml');

                      foreach($file->children() as $category){
                        foreach ($category->product as $row) {
                          ?>
                          <tr>
                              <td><?php echo "<img src= $row->image , height=100, width=100>";?></td>
                              <td><?php echo $row->id; ?></td>
                              <td><?php echo $row->name; ?></td>
                              <td><?php echo $category; ?></td>
                              <td><?php echo $row->inventory; ?></td>
                              <td><?php echo $row->price; ?></td>
                              <td><?php echo $row->description; ?></td>
                              <td>
                                  <a href="editProduct.php?id=<?php echo $row->id; ?>" class="btn btn-success btn-sm"><span class="fa-solid fa-pen-to-square"></span> Edit</a>
                                  <a href="#delete_<?php echo $row->id; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="fa-solid fa-trash-can"></span> Delete</a>
                              </td>
                            <?php include('delProduct_modal.php'); ?>
                          </tr>
                          <?php
                        }
                      }
                      ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  </main>

<!-- custom js file link -->
<script src="js/script.js"></script>

<!-- slider link here -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>



</body>
</html>
