<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>p12</title>
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="p12-style.css">
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
                  <th colspan="2">Order Edit</th>
                </tr>
                <?php 
    // session_start();
   //load xml file 
	$orderFile = simplexml_load_file("orderInfo.xml");
    //display orders
    foreach($orderFile->order as $order) {
        $name = $order->firstName.' '.$order->lastName;
        $items = $order->products;
        $index = 0;
        echo '<tr>
                  <td>
                    <h1>'.$name.'</h1>
                    <div class="Order-info">
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
                            if ($value!="") {
                            echo '<tr>
                            <td><select name="Quantity" id="Quantity" placeholder="'.$quantity.'">
                                <option value="None">None</option>
                                <option value="1x">1x</option>
                                <option value="2x">2x</option>
                                <option value="3x">3x</option>
                                <option value="4x">4x</option>
                                <option value="5x">5x</option>
                                <option value="6x">6x</option>
                                <option value="7x">7x</option>
                                <option value="8x">8x</option>
                                <option value="9x">9x</option>
                                <option value="10x">10x</option>
                              </select>
                            </td>
                            <td><input class="input-Product-Name" type="text" name="Product Name" placeholder="'.$value.'"></td>
                            <td><input class="input-Product-Price" type="text" name="$ Price" placeholder="'.$price.'" ></td>
                          </tr>';
                            }
                        }
                        echo '<tr>
                            <th colspan="3"><a href="add-product.php?id='.$order->id.'" method="post"><input class="button1" type="submit" value="add" style="height:30px; width:50px; background-color:orange;" onclick="addOrder()"></a></th>
                          </tr>
                        </table>
                    </div>
                     <div class="buttons-1"><span><input class="button1-user1" type="button" value="Save" style="height:30px; width:50px; background-color: orange;"></span>
                     </div>
                  </td>
                </tr>';
    }
    function addOrder() {
      $writer = new XMLWriter();  
      $writer->openURI('orderInfo.php'); 
    }
?>
                
                          
                          

                

                <tr><th colspan="2"><a href = order-add.php><input class="button1" type="button" value="add" style="height:30px; width:50px; background-color: orange;"></th></tr>
            </table>
      </div>
      <a href=../backstore.html><input type="button" value="Backstore" style="height:30px; width:100px; background-color: orange;"></a>
    </main>


  </body>
  <script>
    function addOrder() {
      console.log('hi');
    }
  </script>
</html>