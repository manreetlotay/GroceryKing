<head>
    <meta charset="utf-8">
    <title>p11</title>
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="p11-style.css">
  </head>
<body>
    <header class="header">
      <a href="../index.php" class="logo"> <i class="fas fa-shopping-basket"> </i> Grocery King </a>
        <nav class="navbar">
          <a href="../index.php"> Home </a>
          <a href="../Categories.html">Categories</a>
        </nav>
          <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <a href="../cart.html"><div class="fas fa-shopping-cart" id="cart-btn" ></div></a>
            <a href="../login.html"><div class="fas fa-user" id="login-btn"></div></a>
          </div>
      <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="Search">
        <label for="search-box" class="fas fa-search"></label>
      </form>
    </header>

    <main>
      <div class="space">
            <table border="border" class="List-of-orders">
                <tr>
                  <th colspan="2">Order Lists</th>
                </tr>
                 
<?php 
    // session_start();
   //load xml file 
	$orderFile = simplexml_load_file("orderInfo.xml");
    //display orders
    foreach($orderFile->order as $order) {
        $name = $order->username;
        $items = $order->products;
        $index = 0;
        echo '<tr>
        <td>
          <h1>'.$name.'</h1>
          <div class="Personal-Information">
            <table border="border" class="order">
                <tr>
                  <th>Quantity</th>
                  <th>Product</th>
                  <th>Price</th>
                </tr>';
                foreach($items->product as $product) {
                    $value = $product->value;
                    $quantity=$product->quantity;
                    $price=$product->price;
                    echo '<tr>
                  <td>'.$quantity.'</td>
                  <td>'.$value.'</td>
                  <td>'.$price.'</td>
                </tr>';
                }
                echo '
              </table>
          </div>
           <div class="buttons-1"><span> <a class="edit-action" href="order-edit.php?id='.$order->id.'"><input class="button1-user1" type="button" value="Edit" style="height:30px; width:50px; background-color: orange; name="button1"></a></span>
                                <span><a class="delete-action" href="order-delete.php?id='.$order->id.'"><input class="button2-user1" type="button" value="Delete" style="height:30px; width:50px; background-color: orange;name="button2"; onclick="onclickHandler()";></a></span>
           </div>
        </td>
      </tr>';
    }
?>

<tr><th colspan="2"><a href= "order-add.php"><input class="button1" type="button" value="add" style="height:30px; width:50px; background-color: orange;"></a></th></tr>
            </table>
      </div>
      <a href=../backstore.html><input type="button" value="Backstore" style="height:30px; width:100px; background-color: orange;"></a>
      <script>
          function onclickHandler() {
            echo("The button was clicked");
          }
        </script>
    </main>
  </body>
