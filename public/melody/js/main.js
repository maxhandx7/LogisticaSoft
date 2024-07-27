window.addEventListener("DOMContentLoaded", () => {
    setTimeout(function () {
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
        successMessage.style.opacity = '0';
        setTimeout(function () {
            successMessage.style.display = 'none';
        }, 1000);
    }
    }, 5000);

    /* const temaGuardado = localStorage.getItem("tema");
    if (temaGuardado === "oscuro") {
        temaOscuro();
    } else if (temaGuardado === "claro") {
        temaClaro();
    } */
});


function confirmDelete() {
    return confirm('¿Estás seguro de que deseas eliminar este registro?');
}