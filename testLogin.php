<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica na tabela 'usuario'
    $sql_usuario = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result_usuario = $conexao->query($sql_usuario);

    if (mysqli_num_rows($result_usuario) > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sobre_nos.html'); // Redireciona para a página do sistema após o login bem-sucedido
    } else {
        // Se não encontrar na tabela 'usuario', verifica na tabela 'administrador'
        $sql_admin = "SELECT * FROM administrador WHERE email = '$email' AND senha = '$senha'";
        $result_admin = $conexao->query($sql_admin);

        if (mysqli_num_rows($result_admin) > 0) {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php'); // Redireciona para a página do administrador após o login bem-sucedido
        } else {
            // Acesso Inválido - Redireciona para a página de login com mensagem de erro
            header('Location: login3.php?erro=login_invalido');
        }
    }
} else {
    // Dados não fornecidos corretamente - Redireciona para a página de login com mensagem de erro
    header('Location: login3.php?erro=dados_invalidos');
}
?>
