<?php

$miobjeto=new stdClass();
$miobjeto->Usuario=$_GET['Usuario'];
$miobjeto->Clave=$_GET['Clave'];

	switch ($_GET['TipoUsuario'])
	{
		case '1':
			$Tusuario = "Empleado";
			break;
		case '2':
			$Tusuario = "Admin";
			break;
		default:
			$Tusuario = "";
			break;
	}

$miobjeto->Tusuario= $Tusuario;

$archivo=fopen('../archivos/usuarios.txt','a');
fwrite($archivo,json_encode($miobjeto)."\n");
fclose($archivo);


?>