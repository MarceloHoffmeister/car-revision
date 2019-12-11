<?php

    namespace Revision\Model;

    use \Revision\Model;
    use \Revision\DB\Sql;

    class Person extends Model {

        public function getgender() {

            if ($_POST['gender'] === 'm') {

                return 'm';

            } else {

                return 'f';
            }

        }

        public function save() {

            $sql = new Sql();

            $results = $sql->select('INSERT INTO hoffmeister."tblPersons" (desperson, gender, desemail, nrphone, dtbirth)
                VALUES (:desperson, :gender, :desemail, :nrphone, :dtbirth)', array(
                ":desperson"=>$this->getdesperson(),
                ":gender"=>$this->getgender(),
                ":desemail"=>$this->getdesemail(),
                ":nrphone"=>$this->getnrphone(),
                ":dtbirth"=>$this->getdtbirth()
            ));

            $this->setData($results[0]);

        }

        public function get($idperson) {

            $sql = new Sql();

            $results = $sql->select('SELECT * FROM hoffmeister."tblPersons" WHERE idperson = :idperson', [
                ':idperson'=>$idperson
            ]);

            $this->setData($results[0]);

        }

        public function update($idperson) {

            $sql = new Sql();

            $results = $sql->select('UPDATE hoffmeister."tblPersons" 
                SET desperson = :desperson,
                    gender = :gender,
                    desemail = :desemail,
                    nrphone = :nrphone,
                    dtbirth = :dtbirth WHERE idperson = :idperson',
                array(":desperson"=>$this->getdesperson(),
                    ":gender"=>$this->getgender(),
                    ":desemail"=>$this->getdesemail(),
                    ":nrphone"=>$this->getnrphone(),
                    ":dtbirth"=>$this->getdtbirth(),
                    ":idperson"=>$idperson
            )); 

            $this->setData($results[0]);

        }

        public function delete($idperson) {

            $sql = new Sql();

            $results = $sql->select('DELETE FROM hoffmeister."tblPersons" 
                WHERE idperson = :idperson', array(":idperson"=>$idperson)); 

            $this->setData($results[0]);

        }

    }

?>