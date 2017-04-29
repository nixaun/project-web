window.onload=function() {
    var nav = document.querySelector(".bars");
    if (nav) {
        nav.addEventListener("click", onMenuToggle);
    }
    
    var login = document.querySelector(".loginbutton a");
    if (login) {
        login.addEventListener("click", onLoginClick);
    }
    
    var blackscreen = document.querySelector("#blackscreen");
    if (blackscreen) {
        blackscreen.addEventListener("click", onLoginExit);
    }
}

function onMenuToggle(e) {
    e.preventDefault();
    
    var nav = document.querySelector("nav");
    nav.classList.toggle("active");
    
    var bars = document.querySelector(".bars");
    bars.classList.toggle("active");
    bars.classList.toggle("fa-bars");
    bars.classList.toggle("fa-times");
    
    var user = document.querySelector(".bars + a");
    user.classList.toggle("active");
    
    var search = document.querySelector(".bars + a + a");
    search.classList.toggle("active");
}

function onLoginClick(e) {
    e.preventDefault();
    
    var form = document.querySelector(".loginform");
    form.classList.add("active");
    
    var black = document.querySelector("#blackscreen");
    black.classList.add("active");
}

function onLoginExit(e) {
    e.preventDefault();
    
    var form = document.querySelector(".loginform");
    form.classList.remove("active");
    
    var black = document.querySelector("#blackscreen");
    black.classList.remove("active");
}