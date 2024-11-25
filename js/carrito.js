const tos = document.getElementById("tos");
const tosText = document.getElementById("background");
tos.addEventListener("click", displayTOS)
tosText.addEventListener("click", displayTOS)

function displayTOS() {
    tosText.classList.toggle("d-none");
    if (document.body.style.overflowY === 'hidden') {
        document.body.style.overflowY = 'scroll';
    } else {
        document.body.style.overflowY = 'hidden';
        window.scrollTo(0, 0);
    }
}

function clickDiv(e) {
    e.target.closest('.input-group').querySelector("input").checked = true;
}