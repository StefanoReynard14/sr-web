document.addEventListener('DOMContentLoaded', function() {
    var successMessage = document.getElementById('success-message');
    if (successMessage) {
        setTimeout(function() {
            successMessage.style.display = 'none';
        }, 2000); // Ocultar después de 2 segundos (2000 milisegundos)
    }
});

