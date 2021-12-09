<?php

//Classe que executa as conexões com o banco de dados
class DataBase {

        //Variaveis

        //Variavel de conexão
        public $connection;

        //Variavel de tabelas
        public $tableMarcas = 'marcas';
        public $tableCarros = 'carros';

        //Função que conecta ao banco de dados
        public function connect() {

                //Variaveis
                $host = '127.0.0.1'; //servidor
                $pw = ''; //Password
                $user = 'root'; //usuario para acesso ao banco de dados
                $dbname = 'prova'; //banco de dados

                //Verificação de exceção para erros
                try {
                        //tenta fazer a conexão com o banco de dados
                        $connection = new PDO('mysql:host='.$host.':dbname'.$dbname.';charset=utf8;',$user,$pw);
                        return $connection;
                        
                }
                
                //exceção
                catch(PDOException $e) {
                        return false;
                }

        }

        //Não sei qual o objetivo dessa função
        public function __construct() {
                $this ->connection = $this->connect();
        }

        //Trás todos os carros sem filtro
        //não entendi como funciona
        public function get() {

                //faz a busca de todos os carros na tabela carros
                $stmt = $this->connection->prepare("SELECT * FROM carros");
                
                $stmt->execute();
                return $stmt ? $stmt->fetchALL(PDO::FETCH_ASSOC) : false;
        }

        //pesquisa por marca ou nome
        //entendi mais ou menos
        public function search($str) {

                //string
                $str = '%'.$str. '%';

                //busca na tabela
                $sql = "SELECT c.* FROM carros c JOIN marcas m ON c.id = m.id WHERE c.nome like ? OR m.nome like?";
                $stmt = $this->connection->prepare($sql);
                $stmt->bindParam(1, $str, PDO::PARAM_STR);
                $stmt->bindParam(2, $str, PDO::PARAM_STR);

                $stmt->execute();
                return $stmt ? $stmt->fetchALL(PDO::FETCH_ASSOC) : false;
        }
}

?>
