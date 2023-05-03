let profile = document.querySelector(".addbutton-icon");
let popup_container = document.querySelector(".popup_container");
profile.addEventListener("click", function() {
    popup_container.classList.add("active")
})



let toggle = document.getElementsByClassName('toggle');
let body = document.querySelector('body');

toggle.addEventListener('click', function() {
    body.classList.toggle('open');
})