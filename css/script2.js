window.onload=function() {
    var search = document.querySelector("nav ul li:last-child");
    if (search) {
        search.addEventListener("click", onSearchToggle);
    }
}

function onSearchToggle(e) {
    e.preventDefault();
    
    
}