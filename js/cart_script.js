
var noOfProduce = new Array(document.getElementById("list_cart").getElementsByTagName("li").length);
var startValue = 0;
var eachPrice = new Array(document.getElementById("list_cart").getElementsByTagName("li").length);



var items;
var prices;

var first = document.getElementById("quantity_1");
var second = document.getElementById("quantity_2");
var third = document.getElementById("quantity_3");




for(var i = 1 ; i <= noOfProduce.length ; i++){
    noOfProduce[i-1] = parseInt(document.getElementById("quantity_" + i).value);
}

for(var k = 1 ; k <= eachPrice.length ; k++){
    eachPrice[k-1] = parseFloat(document.getElementById("span_" + k).innerText);
}

var saveArray = new Array(noOfProduce.length);



sessionStorage.setItem("saved1",noOfProduce[0]);
sessionStorage.setItem("saved2",noOfProduce[1]);
sessionStorage.setItem("saved3",noOfProduce[2]);


//displays total items at start of page opening
function startingTotalItems(){
    var totalNoItems = 0;
    for(var i = 0 ; i < noOfProduce.length ; i++ ){
        totalNoItems += noOfProduce[i];
    }
    document.getElementById("noItems").innerText = totalNoItems;
    

}
//tax value when page is loaded
function startingTax(){
    var qst = 0;
    var gst = 0;
    for(var i = 0 ; i < eachPrice.length ; i++){
        qst += eachPrice[i];
    }
    qst = Math.round((qst*0.09975)*100)/100;
    document.getElementById("qstTax").innerText = qst;
    
    for(var k = 0 ; k < eachPrice.length ; k++){
        gst += eachPrice[k];
    }
    gst = Math.round((gst*0.05)*100)/100;
    document.getElementById("gstTax").innerText = gst;

    

}
//changes amount of items
function allItems(iteration){
    
    var totalNoItems = 0;
    noOfProduce[iteration-1] = parseInt(document.getElementById("quantity_" + iteration).value);

    for(var i = 0 ; i < noOfProduce.length ; i++ ){
        totalNoItems += noOfProduce[i];
    }
    items = totalNoItems;
    document.getElementById("noItems").innerText = items;

    
}
//increases qst tax when items change
function qst(iteration){
    var tax = 0;
    eachPrice[iteration-1] = parseFloat(document.getElementById("span_" + iteration).innerText);

    for(var i = 0 ; i < eachPrice.length ; i++ ){
        tax = tax + parseFloat(noOfProduce[i]*eachPrice[i]);
    }
    tax = (tax*0.09975).toFixed(2);
    document.getElementById("qstTax").innerText = tax;

}
//increases gst tax when items change
function gst(iteration){
    var tax = 0;
    var taxOnly = 0;
    eachPrice[iteration-1] = parseFloat(document.getElementById("span_" + iteration).innerText);

    for(var i = 0 ; i < eachPrice.length ; i++ ){
        tax = tax + parseFloat(noOfProduce[i]*eachPrice[i]);
    }

    taxOnly = (tax*0.05).toFixed(2);

    document.getElementById("gstTax").innerText = taxOnly;
    
}
//original price array setter
function startingTotalPrice(){
    var totalPrice = 0;
    for( var i = 0 ; i < noOfProduce.length ; i++){
        totalPrice += noOfProduce[i]*eachPrice[i];
    }
    totalPrice = (totalPrice*1.14975).toFixed(2);

    document.getElementById("totalPrice").innerText = totalPrice;
}
// total price updater
function updateTotalPrice(iteration){
    var priceTotal = 0 ;
    totalPrice = noOfProduce[iteration-1]*eachPrice[iteration-1];

    for( var i = 0 ; i < noOfProduce.length ; i++){
        priceTotal += noOfProduce[i]*eachPrice[i];
    }

    priceTotal = (priceTotal*1.14975).toFixed(2);
    
    document.getElementById("totalPrice").innerText = priceTotal;
}

//saving values in session
function useSavedData(){
  
}


