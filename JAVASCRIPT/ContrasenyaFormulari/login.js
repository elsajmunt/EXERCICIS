    // RESTRICCIONS, LLÒGICA VALIDACIÓ CONTRASENYA:  
    // function validarPassword(password)
    function validarPassword() { 

        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;

        // La contraseña debe tener al menos 8 caracteres de longitud
        if (password.length < 8) {
            return "La contraseña debe tener al menos 8 caracteres de longitud.";
        }
    
        // La contraseña debe contener al menos un número
        if (!/\d/.test(password)) {
            return "La contraseña debe contener al menos un número.";
        }
    
        // La contraseña debe contener al menos una letra minúscula
        if (!/[a-z]/.test(password)) {
            return "La contraseña debe contener al menos una letra minúscula.";
        }
    
        // La contraseña debe contener al menos una letra mayúscula
        if (!/[A-Z]/.test(password)) {
            return "La contraseña debe contener al menos una letra mayúscula.";
        }
    
        // La contraseña debe contener al menos un carácter especial
        if (!/[$&+,:;=?@#|'<>.^*()%!-]/.test(password)) {
            return "La contraseña debe contener al menos un carácter especial.";
        }   
    
      return "BRAVO! La contraseña es válida!!!"; 
    }

    function mostrarValidacio() {
        let resultat=validarPassword();
        console.log(resultat);
        document.getElementById('message').textContent = resultat;
    }
