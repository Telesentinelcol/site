<?php
include 'system/core/Controller';

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$celular = isset($_POST['celular']) ? $_POST['celular'] : "";
$telefono = isset($_POST['telefono_fijo']) ? $_POST['telefono_fijo'] : "";
$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : "";
$correoelectronico = isset($_POST['email']) ? $_POST['email'] : "";
$observaciones = isset($_POST['observaciones']) ? $_POST['observaciones'] : "";
$observaciones = isset($_POST['ncontrato']) ? $_POST['ncontrato'] : "";


$core= new CI_Controller();
$core->Send_email($nombre, $telefono, $celular, $direccion, $correoelectronico, $observaciones, $contrato);

