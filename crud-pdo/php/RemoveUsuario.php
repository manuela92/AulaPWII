<?php

require_once 'Conexao.php';

$email = $_POST['emailFormulario'];

if(!empty($email)){

    $sql = "DELETE FROM usuarios WHERE email = :email";

    //preparar remoção de dado
    $requisicao = $conexao->prepare($sql);
    //pegar o email do form e passar por parametro
    //O bindParam serve para evitar SQLInjection, é uma proteção da aplicação no banco de dados
    $requisicao->bindParam(':email', $email);
    try{
        $requisicao->execute();
        if($requisicao->rowCount() > 0){
            echo "Usuário removido!";
        }else{
            echo"Usuário não existe";
        }
    }catch(PDOException $e){
        echo"Erro ao remover: " . $e->getMessage();
    }

}else{
    echo "Digite um email para remover algum usuário.";
}

?>