//item total
function displayPrice() {

			//fetch quantity entered by user and price
            var price = document.getElementById('price').value;
            var quantity = document.getElementById('quantity').value;
			
			
			//convert to float and calculate price*quantity
            var total = parseFloat(price)*parseFloat(quantity);
			
			//round off total
			total = Math.round((quantity*price)*100) / 100;
			
			//to verify valid quantity input was enteres
            if (!isNaN(total) && total>0) {
                document.getElementById('total').value = total;
            }
			
        }
		
//description button
	//variables
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var content = this.nextElementSibling;
		if (content.style.maxHeight) {
		  content.style.maxHeight = null;
		} else {
		  content.style.maxHeight = content.scrollHeight + "px";
		}
	  });
	}

//preventing input field from being cleared when page is refreshed

	//fetch quantity and item total
	var qt = document.getElementById("quantity");
	var tot = document.getElementById("total");


	//source: https://developer.mozilla.org/en-US/docs/Web/API/Window/sessionStorage
	window.onbeforeunload = function() {
		if (qt.value) {
		  sessionStorage.setItem("sqt",qt.value);
		}
		if (tot.value) {
		  sessionStorage.setItem("stot",tot.value);
		}
		
	}

	window.onload = function() {
        var quantity = sessionStorage.getItem("sqt");
        if (quantity !== null) {
          qt.value = quantity;
        }

        var total = sessionStorage.getItem("stot");
        if (total !== null) {
          tot.value = total;
        }
	}
	