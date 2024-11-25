const radio = document.querySelectorAll(".item-div")
radio.forEach((item) => (
    item.querySelectorAll("button").forEach(
        (boton) => (boton.addEventListener("click",changeQuantity))
    )
))

function changeQuantity(e) {
    const button = e.target.closest('button')
    const input = button.parentElement.querySelector('input')
    let change = parseInt(input.value) + parseInt(button.value);
    if (change < 1) {
        change = 1;
    }
    if (change > 99) {
        change = 99;
    }
    input.value = change
}