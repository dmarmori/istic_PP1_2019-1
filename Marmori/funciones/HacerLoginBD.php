<?php
	session_start();


	//$archivo = fopen("usuarios.txt", "r") or die("Imposible arbrir el archivo");
	
		//while(!feof($archivo)) 
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select nombre,clave from usuario");
		$consulta->execute();

		foreach ($datos as $usuario) 
			{
				//var_dump($usuario);
				echo $usuario["nombre"]." - ".$usuario["clave"];
				
				echo "<br>";
			}
		{
			//$objeto = json_decode(fgets($archivo));
			if ($objeto->Usuario == $_GET['Usuario']) 
			{				 
				if ($objeto->Clave == $_GET['Clave'])
				{
					$usuariologin = $objeto->Usuario;
					session_start();
					$_SESSION['IdLogin']=$usuariologin;
					header("Location: page/ok.php?login=login");
					fclose($archivo);
					exit();
				}
				else
				{
					
					header("Location: page/nok.php");
					fclose($archivo);
					exit();
				}
			}
			 	
		}

		header("Location: page/UsuarioInexistente.php");
		fclose($archivo);
		exit();
		
		fclose($archivo);
	
	exit();

?>