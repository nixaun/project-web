window.onload=function() {
    var i;
    
    var menu = document.querySelector(".bars");
    if (menu) {
        menu.addEventListener("click", onMenuToggle);
    }
    
    var unilist = document.querySelectorAll(".unilist a");
    if (unilist) {
        for (i = 0; i < unilist.length; i++)
        {
            unilist[i].addEventListener("click", onUnilistClick);
        }
    }
    
    var profiletabs = document.querySelectorAll(".tab a");
    if (profiletabs) {
        for (i = 0; i < profiletabs.length; i++)
        {
            profiletabs[i].addEventListener("click", onTabsClick);
        }
    }
}

function onMenuToggle(e) {
    e.preventDefault();
    
    var nav = document.querySelector("nav");
    nav.classList.toggle("active");
    
    var button = document.querySelector(".bars");
    button.classList.toggle("active");
    
    var bars = document.querySelector(".bars i");
    bars.classList.toggle("fa-bars");
    bars.classList.toggle("fa-times");
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

function onTabsClick (event) {
    event.preventDefault();
    var i;
    
    var tabs        = document.querySelectorAll(".tab a");
    var tabContents = document.querySelectorAll(".tabcontent form");
    var activeTab   = document.querySelector(".tab a.active");
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
    
    document.querySelector(".tabcontent form.active").classList.remove("active");
    
    tabContents[i].classList.add("active");
}








function onDropDownPick(str) {
    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            var listitems = document.querySelectorAll(".unilist a");
            for (var i = 0; i < listitems.length; i++)
            {
                if(listitems[i].classList.contains("active"))
                {
                    listitems[i].classList = "";
                    listitems[i].classList.add("active");
                }
                else
                {
                    listitems[i].classList = "";
                }
                
                listitems[i].classList.add(xmlhttp.responseText);
            }
        }
    }
        
    xmlhttp.open("GET", "../php/uni_filter.php?q="+str, true);
    xmlhttp.send();
}