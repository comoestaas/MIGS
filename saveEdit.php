<?php
    include_once('config.php');
    
    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
       

        // Use prepared statements para prevenir injeção de SQL
        $sqlUpdate = "UPDATE usuarios 
                      SET nome=?, senha=?, email=?
                      WHERE id=?";
        $stmt = $conexao->prepare($sqlUpdate);
        $stmt->bind_param('sssi', $nome, $senha, $email, $id);
        
        if($stmt->execute()) {
            // Redirecionamento após a atualização
            header('Location: sistema.php');
            exit();
        } else {
            echo "Erro ao atualizar usuário.";
        }
    } else {
        header('Location: sistema.php');
        exit();
    }
?>
