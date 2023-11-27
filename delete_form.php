<?php
    include_once('config.php');

    if(!empty($_GET['id'])) {
        $id = $_GET['id'];
        
        // Use prepared statements para prevenir injeção de SQL
        $sqlDelete = "DELETE FROM formulario WHERE id=?";
        $stmt = $conexao->prepare($sqlDelete);
        $stmt->bind_param('i', $id);
        
        if($stmt->execute()) {
            // Redirecionamento após a exclusão
            header('Location: forms.php');
            exit();
        } else {
            echo "Erro ao deletar usuário.";
        }
    } else {
        header('Location: forms.php');
        exit();
    }
?>
