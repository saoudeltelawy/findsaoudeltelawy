// 1-Select DOM Items
const menuBtn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu');
const menuNav = document.querySelector('.menu-nav');
const menuBranding = document.querySelector('.menu-branding');
const navItems = document.querySelectorAll('.nav-item');

// Set Initial State Of Menu (Default State == Closed)
let showMenu = false;  

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu() 
{
  if (!showMenu) {
    menuBtn.classList.add('close');
    menu.classList.add('show');
    menuNav.classList.add('show');
    menuBranding.classList.add('show');
    navItems.forEach(item => item.classList.add('show'));

    // Set Menu State (Reset!)
    showMenu = true;
  } else {
    menuBtn.classList.remove('close');
    menu.classList.remove('show');
    menuNav.classList.remove('show');
    menuBranding.classList.remove('show');
    navItems.forEach(item => item.classList.remove('show'));

    // Set Menu State
    showMenu = false;
  }
}


// Veno Box 
$(document).ready(function(){

  // Hover (Projects)
  $('.venobox').venobox({
    framewidth : 'auto',                            // default: ''
    frameheight: 'auto',                            // default: ''
    border     : '3px',                             // default: '0'
    bgcolor    : '#252934',                          // default: '#fff'
    titleattr  : 'data-title',                       // default: 'title'
    numeratio  : true,                               // default: false
    infinigall : true,                               // default: false
});



$('.venobox_custom').venobox({
  framewidth : '600px',                            // default: ''
  frameheight: '400px',                            // default: ''
  border     : '1px',                             // default: '0'
  titleattr  : 'data-title',                       // default: 'title'
  numeratio  : true,                               // default: false
  infinigall : true,                               // default: false
  share      : ['facebook', 'twitter', 'download'] // default: []
});





});



