document.addEventListener('DOMContentLoaded', () => {
    // Selecciona todos los carruseles
    const sliders = document.querySelectorAll('.slider-wrapper');

    sliders.forEach((sliderWrapper, idx) => {
        const slider = sliderWrapper.querySelector('.slider');
        const buttons = sliderWrapper.querySelectorAll('.slider-nav button');
        const slides = slider.children;

        const intervalTime = parseInt(sliderWrapper.getAttribute('data-interval'), 10) || 3000;

        let index = 0;

        // Actualiza el estado activo del botón
        function updateActiveButton() {
            buttons.forEach((button, btnIndex) => {
                if (btnIndex === index) {
                    button.classList.add('active');
                } else {
                    button.classList.remove('active');
                }
            });
        }

        /* Funcion para el autoscroll */
        function autoScroll() {
            index = (index + 1) % slides.length; // Avanza al siguiente slide, vuelve al inicio si es el último
            slider.scrollTo({
                left: slides[index].offsetLeft,
                behavior: 'smooth'
            });
            updateActiveButton(); // Actualiza el botón activo
        }

        // Inicia el autoscroll con el intervalo definido
        setInterval(autoScroll, intervalTime);

        /* Funcionalidad de los botones */
        buttons.forEach((button, btnIndex) => {
            button.addEventListener('click', () => {
                index = btnIndex; // Actualiza el índice cuando el botón es clickeado
                slides[btnIndex].scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest',
                    inline: 'start'
                });
                updateActiveButton(); // Actualiza el botón activo
            });
        });

        // Inicializa el estado del botón activo
        updateActiveButton();
    });
});
