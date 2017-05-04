window.onload=function() {
    var i;
    
    var search = document.querySelector("nav ul li:nth-child(6)");
    if (search) {
        search.addEventListener("click", onSearchToggle);
    }
    
    var unilist = document.querySelectorAll(".unilist a");
    if (unilist) {
        for (i = 0; i < unilist.length; i++)
        {
            unilist[i].addEventListener("click", onUnilistClick);
        }
    }
}

function onSearchToggle(e) {
    e.preventDefault();
    
    var searchButton = document.querySelector("nav ul li:nth-child(6)");
    var searchBar = document.querySelector("nav ul li:last-child");
    
    searchButton.classList.toggle("active");
    searchBar.classList.toggle("active");
}

function onUnilistClick(event) {
    event.preventDefault();
    var i;
    
    var tabs        = document.querySelectorAll(".unilist a");
    var tabContents = document.querySelectorAll(".uniinfo div");
    var activeTab   = document.querySelector(".unilist a.active");
    var tabIndex    = 0;
    
    activeTab.classList.remove("active");
    
    event.currentTarget.classList.add("active");
    
    for (i = 0; i < tabs.length; i++)
    {
        if (tabs[i] == event.currentTarget)
        {
            tabIndex = i;
            break;
        }
    }
    
    document.querySelector(".uniinfo div.active").classList.remove("active");
    
    tabContents[i].classList.add("active");
}