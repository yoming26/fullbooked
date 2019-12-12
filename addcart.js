function addtocart(pinasa){
  var naipasa = pinasa;
	   var xhttp = new XMLHttpRequest();
      
    /*  xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) { 
          var buongObject = JSON.parse(this.responseText);

          document.getElementById('subtotal').innerHTML = buongObject.product;
          document.getElementById('showQty').innerHTML = buongObject.quantity;
          document.getElementById('pimage').innerHTML = buongObject.subtotal;
          document.getElementById('pname').innerHTML = buongObject.si;
          document.getElementById('pquantity').innerHTML = buongObject.si;
          }
        };  */
    
    
    var token ="addtocart";
    xhttp.open("GET", "addtocart.php?forIpinasa="+naipasa+"&token="+token, true);
    xhttp.send();

  }
    

