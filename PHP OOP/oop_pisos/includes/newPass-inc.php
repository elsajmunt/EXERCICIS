<?php

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])){

    // recoger datos del formulario
    $password = $_POST["password"];
    $repeatPassword = $_POST["repeatPassword"];
    $token = $_POST["token"];

    //instanciar las classes
    require "../model/connection.php";
    require "../model/user.php";
    require "../controler/userContr.php";

    $newPass = new UserContr();
    $newPass->setPassword($password);
    $newPass->setRepeatPwd($repeatPassword);
    $newPass->setToken($token);

    
    //ejecutar gestor de errores i crear nuevo password
    $newPass->newPassword();

    //rederigir a la pagina de login
    header("Location: ../view/login.php");

}