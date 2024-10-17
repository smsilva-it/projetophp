<?php

    $value = 'aluno';

    setcookie("ocupacao", $value);

    setcookie("ocupacao", $value, time()+60);

    echo $_COOKIE['ocupacao'];

?>