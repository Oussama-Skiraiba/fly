var dropdownicon = document.querySelector(".dropdownicon");
var dropdown_meun_container = document.querySelector(".dropdown_meun_container");
var dropdown_meun = document.querySelector(".dropdown_meun");
var close_menu = document.querySelector(".close_menu");


dropdownicon.addEventListener("click", ()=>{
    dropdown_meun_container.style.display = "block";
    dropdown_meun.style.display = "block";
    
})
close_menu.addEventListener("click", ()=>{
    dropdown_meun_container.style.display = "none";
    dropdown_meun.style.display = "none";
})