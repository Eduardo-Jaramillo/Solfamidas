document.addEventListener('DOMContentLoaded', function () {
    const icon = document.getElementById('icon'); // Seleccionar el SVG

    // Función para agregar y quitar la clase de animación
    function triggerBounce() {
        icon.classList.add('animate'); // Agregar la clase para iniciar la animación

        // Esperar el final de la animación para quitar la clase
        setTimeout(() => {
            icon.classList.remove('animate');
        }, 2000); // Duración igual a la animación
    }

    // Detectar el scroll
    window.addEventListener('scroll', function () {
        const scrollPosition = window.innerHeight + window.pageYOffset;
        const documentHeight = document.body.offsetHeight;

        // Verificar si hemos llegado al final de la página
        if (scrollPosition >= documentHeight - 1) {
            console.log("oleee");
            triggerBounce(); // Iniciar la animación

        }
    });
});