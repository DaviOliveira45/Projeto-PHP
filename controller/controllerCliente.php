<?php 

    require_once('../model/cliente.php');

    class controllerCliente{

        public function action($acao){
            if($acao == "C") {
                
                $novoCliente = new Cliente();

                $cpfAux = str_replace(".", "", $_POST['cpf']);
                $_POST['cpf'] = str_replace("-", "", $cpfAux);

                

                $novoCliente->setNomeCliente($_POST['nome']);
                $novoCliente->setCpf($_POST['cpf']);
                $novoCliente->setEmail($_POST['email']);
                $novoCliente->setSenha($_POST['senha']);

                $novoCliente->cadastraCliente();
            }
        }
    }

?>