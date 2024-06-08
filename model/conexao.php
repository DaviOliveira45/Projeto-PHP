<?php 
    class Conexao{

        public static function conectar(){
    
            try{
                $conn = new PDO("mysql:host=localhost;dbname=gamershop", 'root', 'Fabricio123@');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            }
            catch(PDOException $erro)
            { 
                $erro->getMessage() . "</p>";
                return null;
            }    
    
        }
    
    }
?>