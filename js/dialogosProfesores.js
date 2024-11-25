
// Función para mostrar el cuadro de confirmación al enviar el formulario
function confirmSubmit(form, dialogId) {
    const confirmMessage = "¿Estás seguro de que deseas enviar este mensaje?";
    if (window.confirm(confirmMessage)) {
        // Si el usuario confirma, mostrar mensaje de éxito
        document.getElementById('successMessage' + dialogId.charAt(dialogId.length - 1)).style.display = 'block';

        // Después de 2 segundos, limpiar el formulario y cerrar el diálogo
        setTimeout(function () {
            clearForm(dialogId); // Limpiar el formulario
            document.getElementById(dialogId).close(); // Cerrar el diálogo
        }, 2000);

        return false; // No se envía el formulario realmente
    } else {
        return false; // No hacer nada si el usuario cancela
    }
}

// Función para limpiar el formulario
function clearForm(dialogId) {
    const form = document.getElementById('form' + dialogId.charAt(dialogId.length - 1));
    form.reset(); // Limpiar todos los campos del formulario
    // Ocultar el mensaje de éxito
    document.getElementById('successMessage' + dialogId.charAt(dialogId.length - 1)).style.display = 'none';
}

// Función para cerrar el diálogo y limpiar el formulario
function closeDialog(dialogId) {
    clearForm(dialogId); // Limpiar el formulario
    document.getElementById(dialogId).close(); // Cerrar el diálogo
}
