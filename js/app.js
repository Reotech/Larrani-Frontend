const hamburger = document.querySelector('.hamburger');
const navlinks = document.querySelector('.nav-links');
const links = document.querySelectorAll('.nav-links li');
const navs = document.querySelectorAll('.nav');

hamburger.addEventListener("click", ()=>{
    navlinks.classList.toggle("open");
    
    links.forEach(link =>{
        link.classList.toggle('fade');
        
    })
});


navlinks.addEventListener('click',()=>{
    console.log('clickidyclick');
    hamburger.click()
})