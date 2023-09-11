<?php
    require_once '../auth/verifica-logado.php';
    require_once 'global.php';

    try
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $instituicao = new Instituicao();
        $instituicao -> setIdInstituicao($_SESSION['codUsuario']);

        $excluir = InstituicaoDao::excluir($email,$senha,$instituicao);

        if($excluir == true)
        {
            header('Location: ../opcao-cadastro.php');
            session_destroy();
        }


    }
    catch(Exception $e)
    {
        echo "Erro delete-instituição";
        echo '<pre>';
            echo($e);
        echo '</pre>';
         
    }

?>