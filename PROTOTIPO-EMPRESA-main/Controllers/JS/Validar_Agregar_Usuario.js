function ValidacionAgregarUsuario() {
    var nombre = document.getElementById("Nombre").value;
    var correo = document.getElementById("Email").value;
    var contraseña = document.getElementById("Contraseña").value;
    var Identificacion = document.getElementById("Identificacion").value;
    var imagen = document.getElementById("Imagen").value;

    var correoExpresion = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    var nombreExpresion = /^[a-zA-Z\s]+$/; 
    var identificacionExpresion = /^[0-9]+$/; 

    if (nombre === "" || correo === "" || contraseña === "" || Identificacion === "" || imagen === "") {
        alert("Algun campo está vacío");
        return false;
    }

    if (!nombre.match(nombreExpresion)) {
        alert("El nombre solo puede contener letras y espacios.");
        return false;
    }

    if (correo.length <= 5 || !correoExpresion.test(correo)) {
        alert("Correo electrónico no válido o menor a 5 caracteres");
        return false;
    }

    if (contraseña.length < 8) {
        alert("La contraseña debe tener al menos 8 caracteres");
        return false;
    }

    if (!Identificacion.match(identificacionExpresion) || Identificacion.length <= 5) {
        alert("La identificación debe ser un número y tener más de 5 dígitos");
        return false;
    }

    return true; // Si todas las validaciones pasan, permite el envío del formulario
}
