const priceMe = document.getElementById(`price-me`);
const addToCart = document.getElementById(`add-to-cart`);

addToCart.addEventListener(`click`, function(){
    priceMe.style.backgroundColor = `lawngreen`;
});