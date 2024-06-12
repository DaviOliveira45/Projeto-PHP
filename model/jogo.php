<?php 

require_once('model/conexao.php');

class Jogo {

    private $idJogo;
    private $nomeJogo;
    private $valor;

    public function cadastraJogo() {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("INSERT INTO gamershop.jogos (nomeJogo, valor) VALUES (:nomeJogo, :valor)");
            $sql->bindParam(":nomeJogo", $nomeJogo);
            $sql->bindParam(":valor", $valor);
            
            $nomeJogo = $this->nomeJogo;
            $valor = $this->valor;

            $sql->execute();
            echo "<p style='color: green'> Cadastro realizado com sucesso! </p>";
        } catch (PDOException $erro) {
            echo "<p style='color: red'>Cadastro falhou! </p>";
        }
    }

    public function listarJogos() {
        $conn = Conexao::conectar();
        $sql = $conn->prepare("SELECT idJogo, nomeJogo, valor FROM gamershop.jogos");
        $sql->execute();
        $result = $sql->fetchAll();
        require_once('./view/listarJogos.php');
    }

    public function getJogoById($id) {
        $conn = Conexao::conectar();
        $sql = $conn->prepare("SELECT * FROM gamershop.jogos WHERE idJogo = :id");
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function updateJogo($id, $nome, $valor) {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("UPDATE gamershop.jogos SET nomeJogo = :nome, valor = :valor WHERE idJogo = :id");
            $sql->bindParam(":id", $id);
            $sql->bindParam(":nome", $nome);
            $sql->bindParam(":valor", $valor);
            $sql->execute();
            echo "<p style='color: green'> Atualização realizada com sucesso! </p>";
        } catch (PDOException $erro) {
            echo "<p style='color: red'>Atualização falhou! </p>";
        }
    }

    public function deleteJogo($id) {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("DELETE FROM gamershop.jogos WHERE idJogo = :id");
            $sql->bindParam(':id', $id, PDO::PARAM_INT);
            $sql->execute();
            echo "<p style='color: green'> Exclusão realizada com sucesso! </p>";
        } catch (PDOException $erro) {
            echo "<p style='color: red'>Exclusão falhou! </p>";
        }
    }

    public function getIdJogo() {
        return $this->idJogo;
    }

    public function getNomeJogo() {
        return $this->nomeJogo;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setIdJogo($idJogo) {
        $this->idJogo = $idJogo;
    }

    public function setNomeJogo($nomeJogo) {
        $this->nomeJogo = $nomeJogo;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

}
?>
