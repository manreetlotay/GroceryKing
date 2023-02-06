<?php
	session_start();
 require_once("../register/functions.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>P9</title>
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="p9-style.css">
  </head>

    <body>
      <header class="header">
        <a href="#" class="logo"> <i class="fas fa-shopping-basket"> </i> Grocery King </a>
          <nav class="navbar">
            <a href="#Home"> Home </a>
            <a href="#Categories">Categories</a>
          </nav>
            <div class="icons">
              <div class="fas fa-bars" id="menu-btn"></div>
              <div class="fas fa-search" id="search-btn"></div>
              <div class="fas fa-shopping-cart" id="cart-btn"></div>
              <div class="fas fa-user" id="login-btn"></div>
            </div>
        <form action="" class="search-form">
          <input type="search" id="search-box" placeholder="Search">
          <label for="search-box" class="fas fa-search"></label>
        </form>
      </header>

      <main>
    
     <table>
     <th colspan="2">List of Users</br>
     </br>
     <a style="text-size:10px" class="add-user" href="user-edit.php">Add User</a>
    </th>
    <?php display_users() ?>
     </table>
     
     <a href=../backstore.html><input type="button" value="Backstore" style="height:30px; width:100px; background-color: orange;"></a>
      </main>


    </body>
  </html>
