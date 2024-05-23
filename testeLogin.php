<?php
session_start();
require_once 'config.php';
// var_dump($_POST);
// exit();

if (!empty($_POST['Email']) && !empty($_POST['Senha'])) {
    // include_once 'config.php';
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];

    // Consulta SQL segura para evitar injeção SQL
    $sql = "SELECT * FROM user WHERE email = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $email, $senha);
    // var_dump($stmt);
    // exit();    
    $stmt->execute();
    $result = $stmt->get_result();


    // var_dump($result);
    // exit();

    if ($result->num_rows < 1) {
        // Usuário não encontrado, redireciona para a página de login
      //header('Location: login.php');
      echo "Agora não deu certo... não tá logado";   
    //   exit();
    } else {
        // Usuário encontrado, redireciona para a página principal
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: main.php');
        // exit();
        echo "Agora tá logado";   
    }
} else {
    // // Dados de login não foram enviados, redireciona para a página de login
    // header('Location: login.php');
    // exit();
}

echo "Acabou";
?>
