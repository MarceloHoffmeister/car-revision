<?php

    namespace Revision\Model;

    use \Revision\Model;
    use \Revision\DB\Sql;

    class Car extends Model {

        public function save() {

            $sql = new Sql();

            $results = $sql->select('INSERT INTO hoffmeister."tblCars" (deslicenseplate, descolor, desautomaker, desmodelcar)
                VALUES (:deslicenseplate, :descolor, :desautomaker, :desmodelcar)', array(
                ":deslicenseplate"=>strtolower($this->getdeslicenseplate()),
                ":descolor"=>strtolower($this->getdescolor()),
                ":desautomaker"=>strtolower($this->getdesautomaker()),
                ":desmodelcar"=>strtolower($this->getdesmodelcar())
            )); 

            $this->setData($results[0]);

        }

        public function update($idcar) {

            $sql = new Sql();

            $results = $sql->select('UPDATE hoffmeister."tblCars" 
                SET deslicenseplate = :deslicenseplate,
                    descolor = :descolor,
                    desautomaker = :desautomaker,
                    desmodelcar = :desmodelcar WHERE idcar = :idcar',
                array(":deslicenseplate"=>strtolower($this->getdeslicenseplate()),
                    ":descolor"=>strtolower($this->getdescolor()),
                    ":desautomaker"=>strtolower($this->getdesautomaker()),
                    ":desmodelcar"=>strtolower($this->getdesmodelcar()),
                    ":idcar"=>$idcar
            )); 

            $this->setData($results[0]);

        }

        public function delete($idcar) {

            $sql = new Sql();

            $results = $sql->select('DELETE FROM hoffmeister."tblCars" 
                WHERE idcar = :idcar', array(":idcar"=>$idcar)); 

            $this->setData($results[0]);

        }
    }

?>