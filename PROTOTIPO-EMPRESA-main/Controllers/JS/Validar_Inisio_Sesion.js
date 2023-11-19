function validarlogin() {
    var correo, contrasena;
    // SE TRAE LOS DATOS DEL FORMULARIO
    correo = document.getElementById("floatingInput").value;
    contrasena = document.getElementById("floatingPassword").value;
    // SE CREA LA EXPRESIÓN PARA COMPARAR EL FORMATO DEL CORREO
    var CorreoExpresion = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    // SE MIRA SI LOS CAMPOS ESTÁN VACÍOS
    if (correo === "" || contrasena === "") {
        alert("Debes completar ambos campos (correo y contraseña).");
        return false;
    }
    // SE MIRA SI EL CORREO TIENE UN FORMATO VÁLIDO
    else if (!CorreoExpresion.test(correo)) {
        alert("El correo electrónico no tiene un formato válido.");
        return false;
    }
    // SE MIRA SI LA CONTRASEÑA TIENE AL MENOS 8 CARACTERES
    else if (contrasena.length < 8) {
        alert("La contraseña debe tener al menos 8 caracteres.");
        return false;
    }
    // Puedes agregar más validaciones para la contraseña si lo deseas
}
