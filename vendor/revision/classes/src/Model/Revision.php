<?php

    namespace Revision\Model;

    use \Revision\Model;
    use \Revision\DB\Sql;

    class Revision extends Model {

        public function save() {

            $sql = new Sql();

            $results = $sql->select('INSERT INTO hoffmeister."tblRevisions" (idcar, idperson, nrrevisions, nrkilometers, vlprice)
                VALUES (:idcar, :idperson, :nrrevisions, :nrkilometers, :vlprice)', array(
                ":idcar"=>$this->getidcar(),
                ":idperson"=>$this->getidperson(),
                ":nrrevisions"=>$this->getnrrevisions(),
                ":nrkilometers"=>$this->getnrkilometers(),
                ":vlprice"=>$this->getvlprice()
            ));

            $this->setData($results[0]);

        }

        public function update($idrevision) {

            $sql = new Sql();

            $results = $sql->select('UPDATE hoffmeister."tblRevisions" 
                SET nrrevisions = :nrrevisions,
                    nrkilometers = :nrkilometers,
                    vlprice = :vlprice WHERE idrevision = :idrevision',
                array(":nrrevisions"=>$this->getnrrevisions(),
                    ":nrkilometers"=>$this->getnrkilometers(),
                    ":vlprice"=>$this->getvlprice(),
                    ":idrevision"=>$idrevision
            )); 

            $this->setData($results[0]);

        }

        public function delete($idrevision) {

            $sql = new Sql();

            $results = $sql->select('DELETE FROM hoffmeister."tblRevisions" 
                WHERE idrevision = :idrevision', array(":idrevision"=>$idrevision)); 

            $this->setData($results[0]);

        }

    }

?>