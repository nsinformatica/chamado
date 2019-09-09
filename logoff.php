<?php

        session_start();
        //echo '<pre>';
        //print_r($_SESSION);
        //echo '</pre>';        
        // remover índices do array de sessão
        // unset()


        // destruir a variável de sessão
        // session_destoy()
        session_destroy();
        header('Location: index.php');
?>
