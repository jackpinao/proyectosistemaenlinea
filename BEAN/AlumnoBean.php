<?php


class AlumnoBean {
    
    public $CODALUMNO;
    public $NOMALUMNO;
    public $APEALUMNO;
    public $EDAD;
    public $DNI;
    public $SEXO;
    public $ESTADO;
    
    public function getCODALUMNO() {
        return $this->CODALUMNO;
    }

    public function getNOMALUMNO() {
        return $this->NOMALUMNO;
    }

    public function getAPEALUMNO() {
        return $this->APEALUMNO;
    }

    public function getEDAD() {
        return $this->EDAD;
    }

    public function getDNI() {
        return $this->DNI;
    }

    public function getSEXO() {
        return $this->SEXO;
    }

    public function getESTADO() {
        return $this->ESTADO;
    }

    public function setCODALUMNO($CODALUMNO) {
        $this->CODALUMNO = $CODALUMNO;
    }

    public function setNOMALUMNO($NOMALUMNO) {
        $this->NOMALUMNO = $NOMALUMNO;
    }

    public function setAPEALUMNO($APEALUMNO) {
        $this->APEALUMNO = $APEALUMNO;
    }

    public function setEDAD($EDAD) {
        $this->EDAD = $EDAD;
    }

    public function setDNI($DNI) {
        $this->DNI = $DNI;
    }

    public function setSEXO($SEXO) {
        $this->SEXO = $SEXO;
    }

    public function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }


    
}
?>