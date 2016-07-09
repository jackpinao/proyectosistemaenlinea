<?php

require_once '../UTIL/ConexionBD.php';
require_once '../BEAN/AlumnoBean.php';

class PersonaDAO{
    
    public function ListarPersonas(){
        try {
        
            $sql="select *  from estudiante ;";
            
            $objc = new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=  mysql_query($sql,$cn);
            
            $LISTA['estudiante']=array();
            
            while ($fila=  mysql_fetch_assoc($rs)){
                
                array_push($LISTA['estudiante'],
                array('codalumno'=>$fila['codalumno'],'nomalumno'=>$fila['nomalumno'],
                    'apealumno'=>$fila['apealumno'],'edad'=>$fila['edad'],'dni'=>$fila['dni'],
                    'sexo'=>$fila['sexo'],'estado'=>$fila['estado']));
            }
            
        } catch (Exception $ex) {
            
        }
        return $LISTA;
    }
    
}