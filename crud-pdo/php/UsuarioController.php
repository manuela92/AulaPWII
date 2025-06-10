<?php

    $requisicao = $_POST['requisicao'];

    switch($requisicao){
        case 'Atualizar' :
            include 'AtualizaUsuario.php';
            break;
        case 'Cadastrar':
            include 'cadastroUsuario.php';
            break;
        case 'Consultar':
            include 'ConsultaUsuario.php';
        case 'Remover':
            include 'RemoveUsuario.php';
            break;
        default:
            echo "Ação inválida, por gentileza selecionar uma opção válida.";
            break;
    }

?>