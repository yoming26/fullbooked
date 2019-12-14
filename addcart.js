function addtocart(){
	var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) { 
          var buongObject = JSON.parse(this.responseText);
                  //console.log("Response" + this.responseText);
            document.getElementById('pquantity').innerHTML = buongObject.product;
            document.getElementById('showQty').innerHTML = buongObject.quantity;
            document.getElementById('subtotal').innerHTML = buongObject.subtotal;
            document.getElementById('selectedItem').innerHTML = buongObject.si;
          }
        };
}