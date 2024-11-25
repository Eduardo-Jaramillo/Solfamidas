const radio = document.querySelectorAll(".input-group")

radio.forEach((item) => (
    item.addEventListener("click", clickDiv)
))

function clickDiv(e) {
    e.target.closest('.input-group').querySelector("input").checked = true;
}