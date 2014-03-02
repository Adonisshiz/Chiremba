var Cart = 
{ 
init: function()
{
var link = document.getElementById("cart_button");
link.onclick = Cart.clickHandler;
},
clickHandler: function()
{
alert("This would add an item to the Cart!");
} 
}; 
Core.start(Cart); 