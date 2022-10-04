if(document.readyState == 'loading'){
    document.addEventListener('DOMConetentLoaded',ready())
}
else{
    ready();
}

function ready(){
    var removeCartItemButton = document.getElementsByClassName("btn-danger");

    for(var i =0; i<removeCartItemButton.length;i++){
        var button = removeCartItemButton[i];
        button.addEventListener('click', removeCartItem);
    }

    var quantityInputs = document.getElementsByClassName('item-qtn');

    for(var i =0; i<quantityInputs.length;i++){
        var input =quantityInputs[i];
        input.addEventListener('change',quantityChanged);
    }

    var addToCartButtons = document.getElementsByClassName('add-to-cart');

    for(var i =0; i<addToCartButtons.length;i++){
        var button = addToCartButtons[i];
        button.addEventListener('click',addToCartClicked);
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click',purchaseClicked);
}

function removeCartItem(e){
    var buttonClicked= e.target;
    buttonClicked.parentElement.remove();
    updateCartTotal();
}

function updateCartTotal(){
    var cartItemsContainer=document.getElementsByClassName('items')[0];
    var cartItems=cartItemsContainer.getElementsByClassName('item');
    var total=0;
    for(var i =0; i<cartItems.length;i++){
        var item = cartItems[i];
        var priceElement = item.getElementsByClassName('item-price')[0]
        var quantityElement = item.getElementsByClassName('item-qtn')[0];
        var price = parseFloat(priceElement.innerText.replace("$",""));
        var quantity = quantityElement.value;
        total+=price*quantity;
    }
    total = (Math.round(total*100))/100;
    document.getElementsByClassName('total-price')[0].innerText = total + "$";
}

function quantityChanged(e){
    var input = e.target;

    if(isNaN(input.value)||input.value<=0){
        input.value=1;
    }
    updateCartTotal();

}

function addToCartClicked(e){
    var button = e.target;

    var item = button.parentElement.parentElement;
    var itemTitleAndPriceContainer = item.getElementsByClassName('name-food')[0];
    var itemTitle= itemTitleAndPriceContainer.getElementsByClassName('name')[0].innerText;
    var itemPrice = itemTitleAndPriceContainer.getElementsByClassName('price')[0].innerText;
    var itemImgContainer = item.getElementsByClassName('image')[0];
    var itemImgSrc = itemImgContainer.getElementsByClassName('img')[0].src;

    addItemToCart(itemTitle,itemPrice,itemImgSrc);
    updateCartTotal();
    
}

function addItemToCart(title,price,imgSrc){
    var item =document.createElement('div');
    item.classList.add('item');
    var itemNames = document.getElementsByClassName('item-title');

    for(var i =0; i<itemNames.length;i++){
        if(itemNames[i].innerText==title){
            alert("the item is already in the cart");
            return;
        }
    }

    var itemContent = `
        <img class="item-img" src="${imgSrc}" alt="">
        <h3 class="item-title">${title}</h3>
        <p class="item-price">${price}</p>
        <div>Qtn: <input type="number"  class="item-qtn" value="1"></div>
        <button class="btn btn-danger">Remove</button>
    `;
    item.innerHTML = itemContent;
    var cartItems = document.getElementsByClassName('items')[0];
    cartItems.append(item);
    alert("Done");
    item.getElementsByClassName('btn-danger')[0].addEventListener('click',removeCartItem);
    item.getElementsByClassName('item-qtn')[0].addEventListener('change',quantityChanged);
}

function purchaseClicked(){
    alert("Thank you for your purchase");
    var items=document.getElementsByClassName('items')[0];
    while(items.hasChildNodes()){
        items.removeChild(items.firstChild);
    }
    updateCartTotal();
}








let tabs = document.querySelectorAll(".tabs li");
let tabsArray = Array.from(tabs);

let divs = document.querySelectorAll(".content > div");
let divsArray = Array.from(divs);

tabsArray.forEach(ele => {
    ele.addEventListener("click", function(e){
        tabsArray.forEach(ele => {
            ele.classList.remove("active");
        });
        e.currentTarget.classList.add("active");
        divsArray.forEach(ele => {
            ele.style.display="none";
        })
        document.querySelector(e.currentTarget.dataset.cont).style.display="grid";
    })
});