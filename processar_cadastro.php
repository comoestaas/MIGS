<?php
// Conectar ao banco de dados (substitua pelos seus próprios detalhes de conexão)
$host = 'Localhost';
$usuario = 'root';
$senha = '';
$banco_de_dados = 'migseventoskids';
$conn = new mysqli($host, $usuario, $senha, $banco_de_dados);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Coletar os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Verificar se o e-mail já existe no banco de dados
$query = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // O e-mail já está em uso, redirecione de volta ao formulário com uma mensagem de erro
    header("Location: login3.php?erro=email_duplicado");
} else {
    // O e-mail é único, insira os dados no banco de dados
    $inserir_query = "INSERT INTO usuarios (nome, senha, email)
     VALUES ('$nome', '$senha', '$email')";
    if ($conn->query($inserir_query) === TRUE) {
        // Cadastro bem-sucedido, redirecione para uma página de sucesso
        header("Location: login3.php?cadastro=success");
    } else {
        // Erro ao inserir os dados, redireciona para o formulário com mensagem de erro
        header("Location: login3.php?erro=cadastro_invalido");
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
