        <?php
        
        session_start();
        
        $servername = "localhost";
        $username = "joao";
        $password = "joao123";
        $dbname = "joao";
        
        $conn = new mysqli($servername , $username , $password , $dbname);
        
        //Verificando se der algum erro
        
        if($conn->connect_error){
            die("Falha na conexão :" . $conn->connect_error);
        }
        
        ?>

