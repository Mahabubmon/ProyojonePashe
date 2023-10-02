function textChange() {
    var button = document.getElementById("subscribe");
    button.innerHTML = "SUBSCRIBED";
  }
  
  var subscribeButton = document.getElementById("subscribe");
  subscribeButton.addEventListener("click", textChange);
  

  var searchbutton = document.querySelector(".searchbutton");

  searchbutton.addEventListener("mouseover", function(){
    searchbutton.classList.add("my-style");
  })


  searchbutton.addEventListener("mouseout", function(){
    searchbutton.classList.remove("my-style");
  })

// const addCartButton = document.querySelectorAll('.add-cart');
// addCartButton.addEventListener("click",function(){
// alert("hello");

// });

// Get all the buttons with class "add-cart"
const addCartButtons = document.querySelectorAll('.add-cart');

// Add a click event listener to each button
addCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        alert('Item added to cart!');
    });
});

  