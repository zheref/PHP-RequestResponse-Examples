<?php
    require_once("funcs.php"); // Cargamos definiciones de load, renderinc y render
    load("auth-config"); // Se carga el nombre de usuario y contrasena definidos

    $usuario = $_REQUEST['username']; // Se captura el nombre de usuario que ingreso el usuario en el campo de texto
    $contrasena = $_REQUEST['password']; // Se captura la contrasena que ingreso el usuario

    if( $usuario == constant('USER') && $contrasena == constant('PASSWORD') ) // Validamos si el nombre de usuario y contrasena son correctos
    {
        session_start();
        $_SESSION['username'] = $usuario;
        $_SESSION['password'] = $contrasena;
        redirect("index");
    }
    else
    {
        redirect("logon", "error");
    }
?>