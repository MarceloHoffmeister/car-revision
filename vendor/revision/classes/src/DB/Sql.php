<?php

    namespace Revision\DB;

    class Sql {

        const HOSTNAME = "localhost";
        const USERNAME = "hoffmeister";
        const PASSWORD = "63823710";
        const DBNAME = "hoffmeister";

        private $conn;

        public function __construct() {
           
            // tenta conexão com BD via PDO
            try {

                $this->conn = new \PDO(
                    "pgsql:dbname=".Sql::DBNAME.";host=".Sql::HOSTNAME, 
                    Sql::USERNAME,
                    Sql::PASSWORD
                );

            } catch(PDOException $e) {

                echo 'ERROR: ' . $e->getMessage();

            }  

        }

        private function setParams($statement, $parameters = array()) {

            foreach ($parameters as $key => $value) {
                
                $this->bindParam($statement, $key, $value);

            }

        }
        
        private function bindParam($statement, $key, $value) {
            
            $statement->bindValue($key, $value);

        }

        // método para seleção de dados, com ou sem parâmetros. Retornando um array
        public function select($rawQuery, $params = array()):array {

            $stmt = $this->conn->prepare($rawQuery);

            $this->setParams($stmt, $params);

            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);

        }

    }

?>