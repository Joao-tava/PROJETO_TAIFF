<?php

require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST" ){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];   
}

$sql = "SELECT * FROM users WHERE name = ? AND email = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $name, $email);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows === 1){
    $row = $result->fetch_assoc();
    
    if(password_verify($password, $row['password'])){
        $_SESSION["loggedin"] = true;
        
        header("Location: site.php");
        exit;
    }
    else{
    $erro = "Usuário ou senha incorretos";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
             <img src="img/logo-taiff.png" alt="logo">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <form action="/login.php" method="POST">
            <div class="textfield">
                <label for="Usuario">Usuário</label>
                <input type="text" placeholder="Usuário" name="Usuario" required>
            </div>
            <div class="textfield">
                <label for="Email">Email</label>
                <input type="email" placeholder="Email" name="Email" required>
            </div>
            <div class="textfield">
                <label for="Senha">Senha</label>
                <input type="password" placeholder="Senha" name="Senha" required>
            </div>
            <button type="submit" value="login">Login</button>
            <div>
            <a href="cadastrar.php">Não é cadastrado</a>
            </div>
                </form> <br>
        </div>
    </div>
</body>
</html>