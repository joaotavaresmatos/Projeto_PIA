let cartIcon=document.querySelector('#cart-icon')
let cart =document.querySelector('.cart')
let closeCart=document.querySelector('#close-cart')
cartIcon.onclick=()=>{
    cart.classList.add('active')
}
closeCart.onclick=()=>{
    cart.classList.remove('active')
}

//cart working js
if(document.readyState=='loading'){
document.addEventListener('DOMContentLoaded',ready)
}else{
    ready();
}
function ready(){
    //remove items from cart
    let removeCartBtn= document.getElementsByClassName('cart-remove')
    console.log(removeCartBtn)
    for(let i=0;i<removeCartBtn.length;i++){
    let button =removeCartBtn[i]
    button.addEventListener('click', removeCartItem)
    }
//add to cart
let addCart= document.getElementsByClassName('add-cart')
for(let i=0; i<addCart.length; i++){
    let carts =addCart[i]
    carts.addEventListener('click',addCartClicked)
}

//quantity changes 
let quantityInputs = document.getElementsByClassName('cart-quantity')
for(let i=0;i<quantityInputs.length;i++){
let input = quantityInputs[i]
input.addEventListener('change',quantityChanged)
}
//buy button work
document.getElementsByClassName('btn-buy')[0].addEventListener('click',buyButtonClicked)

    }
    function removeCartItem(e){
        let  btnClicked = e.target
        console.log(btnClicked)
        btnClicked.parentElement.remove()
        updatetotal()
        }



function buyButtonClicked(){
    alert('Your Order is placed')
    let cartContent = document.getElementsByClassName('cart-content')[0]
while (cartContent.hasChildNodes()) {
    cartContent.removeChild(cartContent.firstChild)
    
}
updatetotal()
}

function addCartClicked(e){
    let btn=e.target
    let shopProducts = btn.parentElement;
    let title =shopProducts.getElementsByClassName('product-title')[0].innerText;
    let price =shopProducts.getElementsByClassName('price')[0].innerText;
    let productImg =shopProducts.getElementsByClassName('product-img')[0].src;
    console.log(price,productImg)
    console.log(title)
    
    addProductToCart (title,price,productImg)
    updatetotal()
    }
    function addProductToCart (title,price,productImg){
    let cartShopBox=document.createElement('div')
    cartShopBox.classList.add('cart-box')
    let cartItem =document.getElementsByClassName('cart-content')[0]
    let cartItemNames =cartItem.getElementsByClassName('cart-product-title')
    for(let i=0;i<cartItemNames.length;i++){
        if(cartItemNames[i].innerText ==title){
    alert('you have already add this item to cart');
     return;
    }
    }
    let cartBoxContent =`
    <img src="${productImg}" alt="" class="cart-img">
    <div class="detail-box">
      <div class="cart-product-title">${title}</div>
    <div class="cart-price">${price}</div>
    <input type="number" name="" id="" value="1" class="cart-quantity">
    </div>
    <i class="bx bxs-trash-alt cart-remove"></i>
    `
    cartShopBox.innerHTML=cartBoxContent
    cartItem.append(cartShopBox)
    cartShopBox.getElementsByClassName('cart-remove')[0].addEventListener('click',removeCartItem)
    cartShopBox.getElementsByClassName('cart-quantity')[0].addEventListener('change',quantityChanged)
    }


function quantityChanged(e){
let input = e.target
if(isNaN(input.value)||input.value<=0){

input.value=1;
}
updatetotal()
}
//update total
function updatetotal(){
    let cartContant =document.getElementsByClassName('cart-content')[0]
    let cartBoxes= cartContant.getElementsByClassName('cart-box')
    let total=0;
    for(let i=0; i<cartBoxes.length;i++){
let cartBox=cartBoxes[i]
let priceElment=cartBox.getElementsByClassName('cart-price')[0]
let quantityElement =cartBox.getElementsByClassName('cart-quantity')[0]
let quantity =quantityElement.value;
let price =parseFloat(priceElment.innerText.replace('$',""))
total=total+price*quantity;
total=Math.round(total*100)/100
document.getElementsByClassName('total-price')[0].innerText='$'+total;
    }
}


