// responsive css

const menu = document.getElementById('id-menu')
const list = document.getElementById('navbar-ul')

menu.addEventListener('click', () => {
    list.classList.toggle('active');
}, false);

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};
console.log('alfan');
// Get the navbar
var navbar = document.getElementById("id-navbar");
console.log(navbar)
// Get the offset position of the navbar
var sticky = navbar.offsetHeight;


// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
} 