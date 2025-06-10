<?php

require_once 'Conexao.php';

$email = $_POST['emailFormulario'];

if(!empty($email)){
    $sql = "SELECT*FROM usuarios WHERE email = :email";
    $requisicao = $conexao->prepare($sql);
    $requisicao->bindParam(':email',$email);

    try{
        $requisicao->execute();
        //Especificar como queremos o retorno da consultas no bd
        //FETCH_ASSOC indica que queremos retornar um array indexado
        $usuario = $requisicao->fetch(PDO::FETCH_ASSOC);
        if($usuario){
            echo "Nome: " . $usuario['nome'] . "<br>";
            echo "Email: " . $usuario['email'] . "<br>";
        }else{
            echo "Usuário não existe";
        }
    }catch(PDOException $e){
        echo "Erro ao localizar o usuário." . $e->getMessage();
    }

}else{
    echo"Digite um email para consultar";
}

?>