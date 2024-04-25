// Codi tret de: https://chat.openai.com/c/ab6a5c9b-00e2-4526-8cd2-0460c9f390e0
// Restriccions per Validar Contrasenya: 

function validarContraseña(contraseña) {
    // La contraseña debe tener al menos 8 caracteres de longitud
    if (contraseña.length < 8) {
        return "La contraseña debe tener al menos 8 caracteres de longitud.";
    }

    // La contraseña debe contener al menos un número
    if (!/\d/.test(contraseña)) {
        return "La contraseña debe contener al menos un número.";
    }

    // La contraseña debe contener al menos una letra minúscula
    if (!/[a-z]/.test(contraseña)) {
        return "La contraseña debe contener al menos una letra minúscula.";
    }

    // La contraseña debe contener al menos una letra mayúscula
    if (!/[A-Z]/.test(contraseña)) {
        return "La contraseña debe contener al menos una letra mayúscula.";
    }

    // La contraseña debe contener al menos un carácter especial
    if (!/[$&+,:;=?@#|'<>.^*()%!-]/.test(contraseña)) {
        return "La contraseña debe contener al menos un carácter especial.";
    }

    // La contraseña es válida
    return "La contraseña es válida.";
}

// Ejemplo de uso
var contraseña = "MiContraseña123!";
console.log(validarContraseña(contraseña));