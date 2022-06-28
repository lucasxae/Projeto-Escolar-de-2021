<?php
require_once 'conexao.php';
class produtos {
    public $ID; 
    public $NOME; 
    public $PRECO; 
    public $MARCA; 
    public $SISTEMA;
    
    public function listarTodos(){
        
        try {
            $bd =  new Conexao();
            $con= $bd->conectar();
            $sql = $con->prepare("select * from produtos1 ");
            $sql->execute();
            if ($sql->rowCount() > 0) {
                return $result = $sql->fetchAll(PDO::FETCH_CLASS);
    }
            }catch(PDOException $msg){
            echo "Não  foi  possivel listar  os dados dos alunos {$msg->getMessage()} ";


}

}


    public function inserir() {
        try {
            if(isset($_POST["id"])&&($_POST["nome"])){

                //preencher os campos
                $this->ID = $_POST["id"];
                $this->NOME = $_POST["nome"];
                $this->PRECO = $_POST["preco"];
                $this->MARCA = $_POST["marca"];
                $this->SISTEMA = $_POST["sistema"];

            }

            $bd= new Conexao();
            $con = $bd  ->conectar();
            $sql = $con->prepare("insert into produtos1(id,nome,preco,marca,sistema)
           values(null,?,?,?,?,?)");

            $sql->execute(array($this->NOME,$this->DATA,$this->ROUPA,$this->QUANTIDADE, $this->VALOR));

            if($sql->rowCount()>0){header("location:listar.php");}

        


    }catch (PDOException $msg){echo "Não foi possivel acessar o site";}}
}

?>
