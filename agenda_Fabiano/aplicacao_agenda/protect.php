<?php 

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("Você não pode acessar esta página! Faça o <p><a href=\"index.php\">login</a></p> antes.");
    }

?>