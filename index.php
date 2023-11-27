<?php   
    session_start();
    include("conexao.php");
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login3.php');
    }

function deletarArquivo($id, $path) {
    global $mysqli;
    if (unlink($path)) {
        $sql = "DELETE FROM arquivos WHERE id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    return false;
}

if (isset($_GET['deletar'])) {
    $id = intval($_GET['deletar']);
    $stmt = $mysqli->prepare("SELECT * FROM arquivos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $arquivo = $result->fetch_assoc();
        if (deletarArquivo($id, $arquivo['path'])) {
            echo "<p>Arquivo excluído com sucesso</p>";
        } else {
            echo "<p>Falha ao excluir o arquivo</p>";
        }
    }
}

function enviarArquivo($error, $size, $name, $tmp_name) {
    global $mysqli;
    // ... (restante do código da função enviarArquivo permanece o mesmo)
    include("conexao.php");
    if($error)
        die('Falha ao Enviar Arquivo');
    
    if($size > 2097152)
        die('Arquivo muito grande!! Max: 2MB');
    
    $pasta = "arquivos/";
    $nomeDoArquivo = $name;
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    
    if($extensao != "jpg" && $extensao != 'png')
        die('Tipo de arquivo não aceito');
    
    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    
    $deu_certo = move_uploaded_file($tmp_name, $path);
    if($deu_certo) {
        $mysqli->query("INSERT INTO arquivos (nome,path) VALUES('$nomeDoArquivo','$path')") or die($mysqli->error);
        return true;
    }else 
        return false;
}

if (isset($_FILES["arquivos"])) {
    $arquivos = $_FILES["arquivos"];
    $tudo_certo = true;
    foreach ($arquivos['name'] as $index => $arq) {
        $deu_certo = enviarArquivo($arquivos['error'][$index], $arquivos['size'][$index], $arquivos['name'][$index], $arquivos['tmp_name'][$index]);
        if (!$deu_certo) {
            $tudo_certo = false;
        }
    }

    if ($tudo_certo) {
        echo '<p>Todos os arquivos foram enviados com sucesso!</p>';
    } else {
        echo '<p>Falha ao enviar arquivos</p>';
    }
}

$sql_query = $mysqli->query("SELECT * FROM arquivos") or die($mysqli->error);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
    <link rel="icon" href="imagens/balao-sem-fundo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/admin-galeria">
</head>

<body>
<nav>
        <div class="nav-logo">
            <a href="sobre_nos.html">
                <img src="imagens/migs1-sem-fundo.png">
            </a>
        </div>

        <ul class="nav-links">
            <li class="link"><a href="index.php">Adicionar Imagem</a></li>
            <li id="link3" class="link"><a href="sistema.php">Sistema</a></li>
            <li id="link3" class="link"><a href="forms.php">Formularios</a></li>
        </ul>
        <button class="btn-festa"><a href="login3.php">Sair</a></button>
    </nav>
<div class="container">
    <div class="content">
<form method="POST" enctype="multipart/form-data" action="">
    <h1><label for="">Selecione o arquivo</label></h1>
    <div class="btn-arquivo">
        <input multiple name="arquivos[]" type="file">
    </div>
    <button class="btn" type="submit">Enviar arquivo</button>
</form>
    </div>
</div>
<div class="titulo"> <h1>Lista de arquivos</h1></div>
<div class="container2">

   <table class="table-style" border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Preview</th>
            <th>Arquivo</th>
            <th>Data de Envio</th>
            <th>Deletar</th>
        </tr>
    </thead>
        <tbody class="table-body">
            <?php
            while ($arquivo = $sql_query->fetch_assoc()) {
            ?>
                <tr>
                    <td><img height="50" src="<?php echo $arquivo['path']; ?>" alt=""></td>
                    <td><a target="_blank" href="<?php echo $arquivo['path']; ?>"><?php echo $arquivo['nome']; ?></a></td>
                    <td><?php echo date("d/m/Y H:i", strtotime($arquivo['data_upload'])); ?></td>
                    <td><a href="index.php?deletar=<?php echo $arquivo['id']; ?>">Deletar</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</body>

</html>
