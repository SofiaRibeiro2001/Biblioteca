<?php
// 4 paramentros para a ligação (servidor, utilizador, senha e base de dados)
    $servidor="localhost";
    $user="root";
    $senha="";
    $bd="biblioteca";

    $ligacao = mysqli_connect($servidor, $user, $senha, $bd);
        if ($ligacao->connect_error){
            die(mysqli_connect_error($ligacao));
        }
?>