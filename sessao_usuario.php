<?php 

    session_start();

    //$_SESSION['nome'] = 'Administrador';

    //session_unset();
    //session_destroy();
?>
<h3>Sessão do usuário</h3>
SID desta sessão é <?php echo session_id(); ?>
