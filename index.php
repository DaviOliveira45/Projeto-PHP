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

    elseif($url=="EXCLUIRCLIENTE")
    {
        require_once("controller/controllerCliente.php");
        $controle = new controllerCliente();
        $id = $_SERVER['REQUEST_URI'];
        //var_dump($id);
        $teste = explode("=",$id);
        $idExcluir = $teste[1];
        $controle->actionDelete("E", $idExcluir);
    }

?>