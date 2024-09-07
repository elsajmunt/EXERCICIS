<!DOCTYPE html>
<html> 
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Per Disseny RESPONSIU?? -->
        <link rel="stylesheet" href="../public/css/styles.css"> 
        <title>Cero Residuo > Inicia Sesión</title>    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"><!-- ICONES? -->
    </head>
    <body>
        <?php require "header.php"?>  <!-- HEADER -->   
        <div class="content">
            <div>
                <form onsubmit="return validarFormulari_Login()" id="formulario"><!-- id formulario d'estils CSS. Funció JS -->   
                    <h2>Inicia Sesión</h2>

                    <!-- Entrada NOM USUARI ------------------------------>
                    <div>
                        <label>Nombre de Usuario</label>
                        <i class="fas fa-user"></i> <!-- Icona Usuari (de Biblioteca stylesheet)-->
                        <input
                                type="text"
                                name="username"
                                id="nombreDeUsuario"
                                placeholder="Introducir nombre"
                        />
                        <div id="nombreError_id" class="error"></div><!-- Mostra Avís CAMPS OBLIGATORIS. ESTIL amb Classe -->
                        <i class="fas fa-exclamation-circle failure-icon"></i><!-- Icona Exlamació ! Quan surt??-->
                        <i class="far fa-check-circle success-icon"></i><!-- Icona V Quan surt?? -->
                        <div class="error"></div><!-- No sé què fa ?? -->
                    </div>

                    <!--   Entrada CONTRASENYA ----------------------------------------->
                    <div>
                        <label for="contrasena">Contraseña</label>
                        <i class="fas fa-lock"></i>
                        <input
                                type="password"
                                name="password"
                                id="contrasenaDeUsuario"
                                placeholder="Introducir contraseña"
                        />
                        <div id="contrasenaError_id" class="error"></div>
                        <i class="fas fa-exclamation-circle failure-icon"></i>
                        <i class="far fa-check-circle success-icon"></i>
                        <div class="error"></div>
                    </div>
                    <!-- BOTÓ ------------------------------------------->
                    <button id="btn" type="submit">ENTRAR <i class="fa-solid fa-chevron-right"></i></button>
                </form>
            </div>

        </div>
        <?php require "footer.php"?> <!-- FOOTER -->
        <script src="../public/js/scripts.js"></script> 
    </body> 
    <script>  // Poso aquí l'Script perquè al document scrip.js No Funciona! -----------------------------------------------
        function validarFormulari_Login(){            
            let nombre = document.getElementById("nombreDeUsuario").value.trim() // Cambio "nombre" per "nombreDeUsuario" 
            let nombreError = document.getElementById("nombreError_id") //accedo al elemento nombreError_id.     
            let onlyLetters = /^[A-Za-z]+$/;   
            console.log(nombre)


            let contrasena = document.getElementById("contrasenaDeUsuario").value.trim()           
            let contrasenaError = document.getElementById("contrasenaError_id") //accedo al elemento edadError_id.
            let LettersNumbers = /[A-Za-z0-9]+$/; /* Obliga posar PRIMER LLETRES i després NÚMEROS */

            let NoError= true // Per Acceptar Enviar
            
            if(nombre.length==0){ // NOM OBLIGATORI --------------
                nombreError.innerHTML = "El campo nombre es obligatorio"
                NoError = false
            }else if (!(onlyLetters.test(nombre))){ // formato
                nombreError.innerHTML = "El campo solo permite letras."
                NoError = false // No envia Formulari
            }else{
                nombreError.innerHTML =""
            }

            if(contrasena.length==0){ // CONTRASENYA OBLIGATORI --------------
                contrasenaError.innerHTML = "El campo Contraseña es obligatorio"
                NoError = false
            }else if (!(LettersNumbers.test(contrasena))){ // formato
                contrasenaError.innerHTML = "El campo debe tener letras y números." // Sempre surt Avís! amb lletres i números també!!!?
                NoError = false
            }else{
                contrasenaError.innerHTML ="Contrasenya Correcta!!!!"
            }
        
            return NoError //Si no hay ningun error ENVIAR el formulario. (NoError=true)          
        }
    </script>
</html>