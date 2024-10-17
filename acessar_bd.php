<?php

    $HOST = "localhost";
    $DB = "dbloja";
    $LOGIN = "senac13";
    $SENHA = "123456";

    $con = mysqli_connect($HOST,$DB,$LOGIN,$SENHA);

    if(mysqli_connect_errno($con)){
        echo "Erro ao conectar banco de dados"
         . mysqli_connect_error();
    }else{
        echo "Banco de dados conectado.";
    }

    

?>