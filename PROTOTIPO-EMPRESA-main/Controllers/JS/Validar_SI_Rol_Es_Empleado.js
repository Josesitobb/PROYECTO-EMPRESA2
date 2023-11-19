function habilitar() {
    var select = document.getElementById("Role_usuarios").value;
    var btnAyuda = document.getElementById("BTN");

    if (select === "Empleado") {
        btnAyuda.style.pointerEvents = "auto";
        btnAyuda.style.textDecoration = "underline";
    } else {
        btnAyuda.style.pointerEvents = "none";
        btnAyuda.style.textDecoration = "none";
    }
}

document.getElementById("Role_usuarios").addEventListener("change", habilitar);
// VALIDAR OPRIME EL EMPLEADO

document.getElementById("Role_usuarios").addEventListener("change", function() {
    var select = this.value;
    var formulario = document.getElementById("formulario");

    if (select === "Empleado") {
        formulario.style.display = "block";  // Mostrar el formulario
    } else {
        formulario.style.display = "none";   // Ocultar el formulario
    }
});

