
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
                <form action="testeLogin.php" method="post">
            <div class="textfield">
                <label for="Usuario">Usuário</label>
                <input type="text" id='username' placeholder="Usuário" name="Usuario" required>
            </div>
            <div class="textfield">
                <label for="Email">Email</label>
                <input type="email" id='email' placeholder="Email" name="Email" required>
            </div>
            <div class="textfield">
                <label for="Senha">Senha</label>
                <input type="password" id='password' placeholder="Senha" name="Senha" required>
            </div>
                   <input type="submit" value="Enviar" class="button">
            <div>
            <a href="cadastrar.php">Cadastre-se aqui</a>
            </div>
                </form> <br>
        </div>
    </div>
</body>
</html>