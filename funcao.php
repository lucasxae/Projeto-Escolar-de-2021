<?php
    include_once "conexao.php";
    class Funcoes extends Conexao{
        public function listar(): array{
            $array_produtos = $this->connection->prepare("SELECT * FROM produtos1");
            $array_produtos->execute();
            return $array_produtos->fetchAll();
        }

        public function cadastrar(string $id, string $nome, string $preco, string $marca, string $sistema): bool{
            try{
                $sanitizate_numero = filter_var($id, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $sanitizate_nome = filter_var($nome, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $sanitizate_idade = filter_var($preco, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $sanitizate_sexo = filter_var($marca, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $sanitizate_sexo = filter_var($sistema, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $query = $this->connection->prepare("INSERT INTO produtos1 VALUES(NULL ,:id, :nome, :preco, :marca, :sistema)";
                $query_parms = ["id" => $sanitizate_id, "nome" => $sanitizate_nome, "preco" => $sanitizate_preco, "marca" => $sanitizate_marca , "sistema" => $sanitizate_sistema];
                $query->execute($query_parms);
                return true;
            }
            catch(Exception $e){
                echo "Erro: {$e}";
                return false;
            }
        }
    }
?>