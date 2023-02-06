let products = [];

if(localStorage.getItem('products')){
  products = JSON.parse(localStorage.getItem('products'));
}

function addProduct(event){
  event.preventDefault();

  let objIndex = products.findIndex((obj => obj.productName == document.getElementById('item').innerText));
  
  if(objIndex !== -1) {
    products[objIndex].productName = document.getElementById('item').innerText;
    products[objIndex].quantity = document.getElementById('quantity').value;
    products[objIndex].price = document.getElementById('price').value;
    products[objIndex].itemImgLink = document.getElementById('itemImgLink').getAttribute('src');
    products[objIndex].total = document.getElementById('total').value;
  } else {
    products.push({'productName' : document.getElementById('item').innerText, 'quantity': document.getElementById('quantity').value, 'total' : document.getElementById('total').value, 'price': document.getElementById('price').value, 'itemImgLink': document.getElementById('itemImgLink').getAttribute('src')});
  }
  localStorage.setItem('products', JSON.stringify(products));
}


function displayCart(){

  for(let i = 0; i< products.length; i++) {
    if(parseInt(products[i].quantity) !== 0){

    document.getElementById("list_cart").innerHTML += ('<li id="liNo_' + i + '"></li>');
    }
  }
  for(let i = 0; i< products.length; i++){
    if(parseInt(products[i].quantity) !== 0){
        document.getElementById("liNo_"+i).innerHTML = ('<img id="itemImgLink" src="' + products[i].itemImgLink + '" alt="image." height="20"/>'
        + ' ' + products[i].productName + ' '
         + '<input type="text" name="cart_item" id="quantity_'+ i + '" size="2" maxlength="2" value="'+ 
         products[i].quantity+'">' + ' ' + '<input type="submit" value="remove from cart" onclick="updateCart()"/>');
    }
  }
  
}

function updateCartDetails(){
  let total = 0;
  let totalItems = 0;
  if(localStorage.getItem('products')){
    products = JSON.parse(localStorage.getItem('products'));
  }

  products.forEach(function (product) {
    console.log(product.total);
  });

  for(let i = 0; i<products.length; i++){
    totalItems += parseInt(products[i].quantity);
  }

  for(let i = 0; i< products.length; i++){
    total += parseFloat(products[i].total);
  }

  console.log(total);

  let qst = 0.09975 * parseFloat(total);
  let gst = 0.05 * parseFloat(total);
  document.getElementById('noItems').innerText = totalItems;
  document.getElementById('qstTax').innerText = parseFloat(qst).toFixed(2);
  document.getElementById('gstTax').innerText = parseFloat(gst).toFixed(2);
  document.getElementById('totalPrice').innerText = (parseFloat( total) + gst + qst).toFixed(2) ;
}

function updateCart(){
  
  
  for(let i = 0; i< products.length; i++){
    if(products[i].quantity === 0){
        products.splice(i);
        localStorage.setItem('products', JSON.stringify(products));
    }
    else{
    products[i].quantity = document.getElementById("quantity_"+ i).value;
    console.log(products[i].quantity);
    console.log(products[i].price);
    products[i].total = products[i].quantity * products[i].price;
    localStorage.setItem('products', JSON.stringify(products));
    }
  }

  document.getElementById("list_cart").reset();
  for(let i = 0; i< products.length; i++){
    document.getElementById("liNo_"+i).reset();
  }
  displayCart();
  updateCartDetails();
}

