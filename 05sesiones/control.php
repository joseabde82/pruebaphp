<?php
if($_POST["usuario_txt"]=="jose" && $_POST["password_txt"]=="123"){
    //inicio la sesión
    session_start();

    //Declaro mis variables de sesión

    $_SESSION["autentificado"]=true;
    $_SESSION["usuario"]=$_POST["usuario_txt"];

    header("Location: archivo-protegido.php");
}else{
    header("Location: index.php?error=si");
}
?>