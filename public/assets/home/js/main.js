
window.addEventListener("scroll", () => {
    let nav = document.querySelector('nav');
    let scrollTop = window.pageYOffset;
    if(scrollTop > 0) {
        nav.classList.add('scrolling')
    } else {
        nav.classList.remove('scrolling')
    }
    
});
