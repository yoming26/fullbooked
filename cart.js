if(document.readyState=='loading'){
    document.addEventListener('DOMContentLoaded', ready);
    
}else{
    ready();
    
}

function ready(){
    
var removeItemButton = document.getElementsByClassName('product-remove');
var i;
for(i = 0; i < removeItemButton.length; i++) {
    var button= removeItemButton[i];
    button.addEventListener('click',removeCartItem)
    
                            }
var quantityInputs=document.getElementsByClassName('cart-quantity-input');
   for(var i = 0; i < quantityInputs.length; i++) {
       var input=quantityInputs[i];
       input.addEventListener('change',quantityChanged);
       
       
   }     
    var addToCartButtons= document.getElementsByClassName('bi bi-shopping-bag4');
    var i;
for(i = 0; i < addToCartButtons.length; i++) {
    var button= addToCartButtons[i];
    button.addEventListener('click',addToCartClicked);
    
}
}
                            
function removeCartItem(event){
       var buttonClicked = event.target 
       buttonClicked.parentElement.parentElement.remove();
        updateCartTotal();
    
    
}

function quantityChanged(event){
    var input=event.target;
    if(isNaN(input.value)||input.value<=0){
       input.value=1;
       
       }
    updateCartTotal();
    
    
}
    
function addToCartClicked(event){
    var button= event.target;
    var shopItem=button.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
   var title=shopItem.getElementsByClassName('product__content')[0];
    var t=title.firstElementChild.firstElementChild.firstElementChild;
    var book=t.firstChild;
   var price=title.firstElementChild.nextElementSibling.firstElementChild.firstElementChild.firstElementChild.firstChild;
   
    var im=shopItem.getElementsByClassName('pic')[0].src;
  console.log(book,price,im);
    addToCart(book,price,im);
}    

function addToCart(book,price,im){
    var cartRow= document.createElement('div');
    cartRow.classList.add('item01 d-flex');
    var cartItems= document.getElementsByClassName('miniproduct')[0];
    var cartRowContents=`
        	
				<div class="thumb">
                        <a href="product-details.html"><img class="pic" src="${im}" alt="product images"></a></div>
				<div class="content">
                    <h6><a href="product-details.html">${book}</a></h6>
					<span class="prize">${price}</span>
                        <div class="product_prize d-flex justify-content-between">
						<input class="cart-quantity-input" type="number" value="1">
						<ul class="d-flex justify-content-end">
						<li><a href="#"><i class="zmdi zmdi-delete"></i></a>
						</li></ul></div></div>
						</div>`
    
    cartRow.innerHTML= cartRowContents;
    cartItems.append(cartRow);
    
    
    
    
}
    
function updateCartTotal(){
    
    var cartItemContainer = document.getElementsByClassName('cart-item')[0];
    var cartRows= cartItemContainer.getElementsByClassName('cart-row');
    var total=0;
    for(var i = 0; i < cartRows.length; i++) {
        var cartRow= cartRows[i];
        var priceElement=cartRow.getElementsByClassName('amount')[0];
        var quantityElement=cartRow.getElementsByClassName('cart-quantity-input')[0];
        var price =parseFloat(priceElement.innerText.replace('$',''));
        var quantity= quantityElement.value;
        total=total+(price*quantity);
        
    }
    total=Math.round(total * 100) /100;
    document.getElementsByClassName('total-cart')[0].innerText='$'+total;
}