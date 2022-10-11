<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['email'])){
    
    header("Location: mensagem.html");
    //die("Você não pode acessar esta pagina.<p><a href=\"login.php\">Entrar</a></p>");
}
?>