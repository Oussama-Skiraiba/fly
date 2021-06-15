let ul = document.querySelector("#ul");
let menu = document.querySelector("#menu");
let imagesUser = document.querySelector("#imagesUser");
let nameUser = document.querySelector("#nameUser");

menu.addEventListener("click",()=>{
    ul.classList.toggle('show');
    ul.style.display = "block";
    ul.style.opacity = 1;
    ul.style.Zindex = 1;
    imagesUser.classList.toggle('imagesUser');
    nameUser.classList.toggle("nameUser")
});
