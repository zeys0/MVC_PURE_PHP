// Navbar Fixed
window.onscroll = function(){
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;
    const toTop = document.querySelector('#to-top');
    if(window.pageYOffset > fixedNav){
        header.classList.add('navbar-fixed');
        header.classList.remove('hidden');
        header.classList.add('flex');
    }else{
        header.classList.remove('flex');
        header.classList.add('hidden');
        header.classList.remove('navbar-fixed');
    }
}


// Hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu= document.querySelector('#nav-menu')

hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});

