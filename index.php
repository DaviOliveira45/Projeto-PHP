<?php 

    //Pegando exatamente o que o usuário está digitando
  $url = strtoupper($_GET['url']);



    if($url=="CADASTRO")
    {
        require_once("view/registrar.php");
    }
    elseif($url=="CADASTRACLIENTE")
    {
        require_once("controller/controllerCliente.php");
        $controle = new controllerCliente();
        $controle->action("C");
    }
    elseif($url=="LISTACLIENTE")
    {
        require_once("controller/controllerCliente.php");
        $controle = new controllerCliente();
        $controle->action("R");
    }
    elseif($url=="EXCLUIR")
    {
        require_once("controller/controllerCliente.php");
        $controle = new controllerCliente();
        $id = $_SERVER['REQUEST_URI'];
        //var_dump($id);
        $teste = explode("=",$id);
        $idExcluir = $teste[1];
        $controle->actionDelete("E", $idExcluir);
    }
    elseif ($url == "EDITAR") 
    {
        require_once("controller/controllerCliente.php");
        $controle = new controllerCliente();
        $id = $_GET['id'];
        $controle->actionEdit("U", $id);
    } 
    elseif ($url == "ATUALIZARCLIENTE") 
    {
        require_once("controller/controllerCliente.php");
        $controle = new controllerCliente();
        $controle->actionUpdate("U");
    }


    elseif($url=="CADASTRAJOGO")
    {
        require_once("controller/controllerJogo.php");
        $controle = new controllerJogo();
        $controle->action("C");
    }
    elseif($url=="LISTAJOGO")
    {
        require_once("controller/controllerJogo.php");
        $controle = new controllerJogo();
        $controle->action("R");
    }
    elseif($url=="EXCLUIRJOGO")
    {
        require_once("controller/controllerJogo.php");
        $controle = new controllerJogo();
        $id = $_SERVER['REQUEST_URI'];
        //var_dump($id);
        $teste = explode("=",$id);
        $idExcluir = $teste[1];
        $controle->actionDelete("E", $idExcluir);
    }
    elseif ($url == "EDITARJOGO") 
    {
        require_once("controller/controllerJogo.php");
        $controle = new controllerJogo();
        $id = $_GET['id'];
        $controle->actionEdit("U", $id);
    } 
    elseif ($url == "ATUALIZARJOGO") 
    {
        require_once("controller/controllerJogo.php");
        $controle = new controllerJogo();
        $controle->actionUpdate("U");
    }


?>