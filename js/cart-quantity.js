function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

let quantity = getCookie("quantity");

let carrito = document.getElementById("cantidad-carrito");
let counter = document.getElementById("counter");

if (quantity) {
    carrito.textContent = quantity;
} else {
    counter.classList.add('d-none');
}