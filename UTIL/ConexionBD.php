<?php

class ConexionBD{
    
    const SERVER = "localhost";
    const USER = "root";
    const PASS = "5309877";
    const DATABASE = "bdalumno";
    private $cn = null;
    
    public function getConexionBD(){
//        if($this->cn==null){
            try {
               
                $this->cn = @mysql_connect(self::SERVER, self::USER, self::PASS);
//                if (mysql_errno()!=0){
//                    throw new Exception("No se tiene acceso al servidor");
//                }
                @mysql_select_db(self::DATABASE, $this->cn);
 //               if(mysql_errno()!=0){
 //                   throw new Exception("Base de dato no existe");
//              }

            } catch (Exception $ex) {
//                throw $ex;
            }
//        }
        return $this->cn;
    }
      
}

?>