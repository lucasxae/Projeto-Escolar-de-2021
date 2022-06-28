<?php



class Conexao
{

    private $servidor;
    private $banco;
    private $usuario;
    private $senha;




    function __construct(){
        $this->servidor = "localhost";       // this  faz  referencia a classe
        $this->banco = "bd_prova1";
        $this->usuario = "root";
        $this->senha = "";


    }


    public function  conectar(){

        try{   //  tentar executar esse bloco
            //  criar  a conexao  com mysql  utilizando  o PDO  new -> criar uma  instancia  da classe
            $con = new PDO ("mysql:host={$this->servidor};dbname={$this->banco};charset=utf8;",
                $this->usuario,$this->senha);
            return $con;





        }catch (PDOException $msg ) {//  se der  erro , retornar msg
            echo "NÃ£o foi possivel  conectar  ao banco de dados {$msg->getMessage()}";
        }
    }
}
?>