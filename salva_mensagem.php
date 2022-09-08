<?php
    include_once('conexao.php');

    $nome = $_POST('nome');
    $email = $_POST('email');
    $mensagem = $_POST('comment');

    $msg_contato = "INSERT INTO visitantes(nome, email, mensagem, created) VALUES ('$nome', '$email', '$mensagem', NOW())";

    $resultado_msg_contato = mysqli_query($link, $msg_contato);

?>