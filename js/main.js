const menuBtn = document.querySelector('#open-menu-btn');
const closeBtn = document.querySelector('#close-menu-btn');
const menu = document.querySelector('.nav__menu');


//open nav menu
menuBtn.addEventListener('click', () => {
    menu.style.display = 'block';
    closeBtn.style.display = 'inline-block';
    menuBtn.style.display = 'none';
})
 

// close nav menu
const closeNav = () => {
    menu.style.display = 'none';
    closeBtn.style.display = 'none';
    menuBtn.style.display = 'inline-block';
}

closeBtn.addEventListener('click', closeNav);

//close nav menu klikkeleskor

if(window.innerWidth < 1024) {
    document.querySelectorAll(".nav__menu li a").forEach(navItem => {
        navItem.addEventListener('click', closeNav)
    })
}


//navbar style on scroll

window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 0)
})




// ászf
/*
const modal = document.querySelector('#simpleModal');

const modalOff = modal.style.display = "none"

window.onload = function(){
  setTimeout(function(){
    modal.style.display = "block"
  }, 2000)
}

var closebtn = document.getElementById('closebtn'); 
closebtn.addEventListener('click', closeModal);

  function closeModal(){
    modal.style.display = 'none';
}
  
*/
