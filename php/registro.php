<?php
//incluimos el archivo Utilidades_sql.php realiza conexion a base de datos
include_once ('../db/utilidades_sql.php');
include_once ('validacion.php');
//IF -> condición para traer los datos ifes una sentencia de control
	//$_POST -> Variable constante, trae datos de labase de datos
	if ($_POST){
		$contrasena=isset($_POST['contrasena'])? $_POST['contrasena']:'';
		$contrasenaver=isset($_POST['contrasenaver'])? $_POST['contrasenaver']:'';
		$resultado=validacion($contrasena,$contrasenaver);
		if ($resultado==1) {
		// ? $_POST['ciudad']:''  --> Significa que el dato quedaría en blanco en caso de no ser ingresado nada, isset recupera la informacion que tenga en la variable $_POST
		$email=isset($_POST ['email'])?
		 $_POST['email']:'' ;

		$contrasena=isset($_POST ['contrasena'])? 
		$_POST['contrasena']:'' ;

		$fec_nac=isset($_POST ['fec_nac'])? 
		$_POST['fec_nac']:'' ;

		$pais=isset($_POST ['pais'])? 
		$_POST['pais']:'' ;

		$region=isset($_POST ['region'])?
		$_POST['region']:'' ;

		$ciudad=isset($_POST ['ciudad'])?
		$_POST['ciudad']:'' ;

		$rol=isset($_POST ['rol'])?
		$_POST['rol']:'' ;
		//echo $rol;
	$contrasena=password_hash($contrasena, PASSWORD_DEFAULT);
	/*hash es para encriptar la contraseña, se crea una variable contraseña y con ´PASSWORD_DEFAULT se encriptacompletamente de forma predeterminada
	*/
	//llamado a la función que va a recibir los datos
	$result = set_registro ($email, $contrasena, $fec_nac, $pais, $region, $ciudad, $rol);

	if(!$result){
		echo '<script>alert("User Creado con Exito!");</script>';
		print "<script>window.setTimeout(function() { window.location = '../formulariologin.php' }, 3000);</script>";
	}
	}else{

	//Redirecciona  al archivo establecido en el parámetro location si la condición no se cumple
		ob_start();
		//ob_start y ob_end_flush es un ciclo //
		
		echo '<H4> contraseña No cumple </H4>';
		ob_end_flush();
	}
	}else{

	//Redirecciona  al archivo establecido en el parámetro location si la condición no se cumple
		
		//ob_start y ob_end_flush es un ciclo //
		header("location:../formularioregistro.php");

		die();	
		
	}

?>