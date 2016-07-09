<?php

require_once "../DAO/AlumnoDAO.php";
require_once '../BEAN/AlumnoBean.php';

$objeto=new PersonaDAO();
$LISTA=$objeto->ListarPersonas();
header('Content-type: application/json');

echo json_encode($LISTA);

?>
