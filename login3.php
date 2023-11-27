<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/login3.css">
    <title>Login</title>
    <link rel="icon" href="imagens/balao-sem-fundo.png" type="image/x-icon">
</head>

<body>
<?php
    // Verifique se há mensagens de erro na URL e exiba-as
    if (isset($_GET['erro'])) {
        $erro = $_GET['erro'];
        if ($erro === 'login_invalido') {
            echo '<p style="color: red;">Dados de login inválidos. Verifique suas credenciais e tente novamente.</p>';
        } elseif ($erro === 'dados_invalidos') {
            echo '<p style="color: red;">Por favor, preencha todos os campos corretamente.</p>';
        } elseif ($erro === 'cadastro_invalido') {
            echo '<p style="color: red;">Erro ao cadastrar. Por favor, tente novamente mais tarde.</p>';
        } elseif ($erro === 'email_duplicado') {
            echo '<p style="color: red;">Este e-mail já está em uso. Tente outro e-mail.</p>';
        } elseif ($erro === 'cadastro=success') {
            echo '<p style="color: green;">Cadastro realizado com sucesso! Faça o login para acessar.</p>';
        }
    }
    ?>
    <br>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="processar_cadastro.php" method="POST">
                <h1>Criar uma conta</h1>
                <input type="text" name="nome" placeholder="Nome">
                <input type="email" name="email" placeholder="Email">
                <input type="password"name="senha" placeholder="Senha">
                <button type="submit" name="submit">inscrever-se</button>
            </form>
        </div>
        <div class="form-container sign-in">
        <button class="btn-voltar"><a href="sobre_nos.html">Voltar</a></button>
            <form action="testLogin.php" method="POST">
                <h1>Login</h1>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="senha" placeholder="Senha">
                <button name="submit" type="submit">Entrar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bem vindo de volta!</h1>
                    <p>Insira seus dados pessoais para usar todos os recursos do site</p>
                    <button class="hidden" id="login">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Olá amigo!</h1>
                    <p>Registre-se com seus dados pessoais para usar todos os recursos do site</p>
                    <button type="submit" name="submit" class="hidden" id="register">Inscrever-se </button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>