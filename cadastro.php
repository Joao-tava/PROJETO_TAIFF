<?php
session_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se as variáveis POST estão definidas
    if (isset($_POST["Id"], $_POST["Email"], $_POST["Senha"])) {
        $name = $_POST["Id"];
        $email = $_POST["Email"];
        $password = $_POST["Senha"];
        
        // Hash da senha
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Prepare a consulta SQL
        $sql = "INSERT INTO user (id, email, senha) VALUES (?, ?, ?)";
        
        // Preparar e executar a consulta
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            // Vincular parâmetros e executar
            $stmt->bind_param("sss", $name, $email, $hashed_password);
            if ($stmt->execute()) {
                header('Location:cadastrar.php');
                echo "<script type= 'text/javascript'> alert('Usuário criado com sucesso')</script>";
            } else {
                echo "Erro ao executar a consulta: " . $stmt->error;
            }
            
            // Fechar o statement
            $stmt->close();
        } else {
            echo "Erro na preparação da consulta: " . $conn->error;
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}

?>