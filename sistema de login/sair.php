<?php
    // Inicializa a sessão.
    // Se estiver sendo usado session_name("something"), não esqueça de usá-lo agora!
    session_start();

    // Apaga todas as variáveis da sessão
    $_SESSION = array();
    header('location: index.php');

    // Por último, destrói a sessão
    session_destroy();  

    header('location: index.php');
?>