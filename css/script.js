window.onload=function() {
    var search = document.querySelector("nav ul li:nth-child(6)");
    if (search) {
        search.addEventListener("click", onSearchToggle);
    }
}

function onSearchToggle(e) {
    e.preventDefault();
    
    var searchButton = document.querySelector("nav ul li:nth-child(6)");
    var searchBar = document.querySelector("nav ul li:last-child");
    
    searchButton.classList.toggle("active");
    searchBar.classList.toggle("active");
}