document.getElementById("Role_usuarios").addEventListener("change", function() {
    var selectedValue = this.value;
    var empleadoDiv = document.getElementById("empleadoDiv");

    if (selectedValue === "Empleado") {
        empleadoDiv.style.display = "block"; // Muestra el div si se selecciona "Empleado"
    } else {
        empleadoDiv.style.display = "none"; // Oculta el div en caso contrario
    }
});