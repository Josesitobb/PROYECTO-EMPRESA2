function ValidacionEditarUsuarios() {
    var nombre = document.getElementById("Nombre").value;
    var correo = document.getElementById("Email").value;
    var contraseña = document.getElementById("Contraseña").value;
    var identificacion = document.getElementById("Identificacion").value;
    var imagen = document.getElementById("Imagen").value;

    var expresion = /^[a-zA-Z]+(?:\s[a-zA-Z]+){0,2}$/; 
    var correoExpresion = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (nombre === "" || correo === "" || contraseña === "" || identificacion === "" || imagen === "") {
        alert("Algun campo está vacío");
        return false;
    }

    if (nombre.length > 100) {
        alert("Nombre muy largo");
        return false;
    }

    if (!expresion.test(nombre)) {
        alert("Solo letras y hasta 2 espacios en el campo nombre");
        return false;
    }

    if (!correoExpresion.test(correo)) {
        alert("Correo electrónico no válido");
        return false;
    }

    if (contraseña.length < 8) {
        alert("La contraseña debe tener al menos 8 caracteres");
        return false;
    }

    if (isNaN(identificacion) || identificacion.length <= 5) {
        alert("La identificación debe ser un número y tener más de 5 dígitos");
        return false;
    }

    return true; 
}
