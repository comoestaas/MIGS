<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "migseventoskids";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if (isset($_POST['submit'])) {
    // Coletar os dados do formulário
    $primeiroNome = $_POST['primeiro_nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO formulario (primeiro_nome, sobrenome, email, telefone, mensagem)
    VALUES ('$primeiroNome', '$sobrenome', '$email', '$telefone', '$mensagem')";

    if ($conn->query($sql) === TRUE) {
        header("Location: formulario2.php?status=success");
        exit();
    } else {
        header("Location: formulario2.php?status=error");
        exit();
    }
}

// Fechar conexão com o banco de dados
$conn->close();
?>
