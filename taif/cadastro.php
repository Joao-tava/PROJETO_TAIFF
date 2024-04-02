<?php

require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se as variáveis POST estão definidas
    if (isset($_POST["name"], $_POST["email"], $_POST["password"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        // Hash da senha
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Prepare a consulta SQL
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        
        // Preparar e executar a consulta
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            // Vincular parâmetros e executar
            $stmt->bind_param("sss", $name, $email, $hashed_password);
            if ($stmt->execute()) {
                echo "Usuário criado com sucesso";
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