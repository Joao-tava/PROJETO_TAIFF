<?php
require_once('config.php');

class Usuario {
public function __construct(){
//Selecionar dados
    public function selecionarDados()
    {
        $sql = "SELECT * FROM 'user'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        return $stmt->fecthALL();
    }
//Inserir dados
    public function inserirDados(){
        $sql = "INSERT INTO user (id, email, senha) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
    }
    //Atualizar dados
    function atualizarDados(){
        $sql = "UPDATE `user` SET `id`='[value-1]',`email`='[value-2]',`senha`='[value-3]' WHERE 1";
        $stmt = $conn->prepare($sql);
        
    }
    //Deletar dados
    function deletarDados(){
        $sql = "DELETE FROM `user` WHERE ";
        $stmt = $conn->prepare($sql);
    }
}
}
