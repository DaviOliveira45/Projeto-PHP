<?php 

require_once('model/Jogo.php');

class controllerJogo {

    public function action($acao) {
        if ($acao == "C") {
            $novoJogo = new Jogo();

            $novoJogo->setNomeJogo($_POST['nomeJogo']);
            $novoJogo->setValor($_POST['valor']);

            $novoJogo->cadastraJogo();

        } else if ($acao == "R") {
            $Jogo = new Jogo();
            $Jogo->listarJogos();
        }  
    }

    public function actionDelete($acao, $id) {
        if ($acao == "E") { // Excluir (DELETE)
            $Jogo = new Jogo();
            $Jogo->deleteJogo($id);
        }
    }

    public function actionEdit($acao, $id) {
        if ($acao == "U") {
            $Jogo = new Jogo();
            $jogo = $Jogo->getJogoById($id);
            require_once('view/formEditarJogo.php');
        }
    }

    public function actionUpdate($acao) {
        if ($acao == "U") {
            $Jogo = new Jogo();

            $id = $_POST['idJogo'];
            $Jogo->setNomeJogo($_POST['nomeJogo']);
            $Jogo->setValor($_POST['valor']);

            $Jogo->updateJogo($id, $Jogo->getNomeJogo(), $Jogo->getValor());
            header('Location: index.php?url=LISTARJOGOS');
        }
    }
}
?>
