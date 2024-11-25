//----------VISOR DE IMAGENES----------------
// Get the modal
var modal = document.getElementById('myModal');

//Coger la imagen e insertarla en el modal utilizando alt como caption
var img1 = document.getElementById('img1');
var img2 = document.getElementById('img2');
var img3 = document.getElementById('img3');
var img4 = document.getElementById('img4');
var img5 = document.getElementById('img5');
var img6 = document.getElementById('img6');
var modalImg = document.getElementById("img01");

var captionText = document.getElementById("caption");
img1.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img2.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img3.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img4.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img5.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img6.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}


//---------ANIMACION RESPONSIVE VALORES-------------
document.addEventListener("DOMContentLoaded", function () {
    const svgElements = document.querySelectorAll(".img-valor"); // Selecciona todos los SVG con la clase

    // Crear el observador
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Agregar clase para la animación "explosión"
                    entry.target.classList.add("scroll-active");
                    entry.target.classList.remove("scroll-reverse");
                } else {
                    // Agregar clase para la animación inversa "implosión"
                    entry.target.classList.add("scroll-reverse");
                    entry.target.classList.remove("scroll-active");
                }
            });
        },
        {
            threshold: 0.5, // Activa la animación cuando el 50% del SVG esté visible
        }
    );

    // Observar todos los SVG
    svgElements.forEach((svg) => observer.observe(svg));
});
