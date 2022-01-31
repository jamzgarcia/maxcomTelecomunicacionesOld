<?php 

/*
establecer la recuperacion en las constantes para la conexion al motor 
de la base de datos y acceso a la base de datos que se necesita,
la funcion "require" recupera la informacion del archivo que esta establecido en los parametros 
*/

require ('credenciales_db.php');

/*
establecemos la conexion utilizando la clase MySqli estableciendo los datos recuperados anteriormente
*/

$MySqli = new MySqli (DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
mysqli_set_charset($MySqli, 'utf8');

/*

Si la conexion genera un error , lo recomendable es matar el proceso saliendo del archivo

*/

if ($MySqli -> connect_errno) {
	echo "No se pudo establecer la conexion";
	exit;
}

function set_registro ( $email, $contrasena, $fec_na,
$nacionalidad, $region , $ciudad , $rol ) {

	global $MySqli,$result;

	$datos_user = get_user_byid($email);

	

	// "!" Niega datos
	if(!$datos_user){

		$sql = "INSERT INTO cliente (email,fec_na,nacionalidad,region,ciudad,rol) VALUES ('{$email}', '{$fec_na}', '{$nacionalidad}', '{$region}', '{$ciudad}', '{$rol}')";
		//echo $sql;
				$MySqli -> query($sql);
		if ($MySqli)
		{
		// Funcion que genera la consulta
		if(!$rol)
		{
			$rol='cliente';
		}
		$result = set_user($email , $contrasena , $rol );
		}
	}
	else
	{
	echo "<SCRIPT language='javascript'>alert('El usuario ya existe');</SCRIPT>";
	}
	return $result;
}

function set_user ($email , $contrasena , $rol){

	global $MySqli;
	$sql = "INSERT INTO user (email , contrasena , rol) VALUES ('{$email}' , '{$contrasena}' , '{$rol}')";
	$MySqli -> query($sql);
}

function get_user_byid($email)
{
	global $MySqli;
	$sql = "SELECT email , contrasena , rol FROM user WHERE email='{$email}' "; 
	$result = $MySqli -> query($sql);
	return $result->fetch_assoc();
}

function set_eventos ($nombre , $uploadedpreview , $descripcion , $costo_evento , $fecha_entrada ) {
	
	global $MySqli;

	$sql = "INSERT INTO eventos (nombre ,uploadedpreview , descripcion , costo_evento , fecha_entrada  ) VALUES ( '{$nombre}' ,'{$uploadedpreview}' ,'{$descripcion}' ,'{$costo_evento}' ,'{$fecha_entrada}'  ) ";
	//echo $sql;	
	return $MySqli -> query($sql);

}

function get_eventos(){

	global $MySqli;
	$sql = "SELECT nombre, uploadedpreview , descripcion ,costo_evento ,fecha_entrada  FROM eventos  ORDER BY fecha_entrada DESC LIMIT 5";
	
	return 	$MySqli ->query($sql);

}


function set_contacto ($nombre , $email, $subject, $message   ) {

	global $MySqli;

	$sql = "INSERT INTO contacto ( nombre ,  email ,asunto , mensaje )
	VALUES ('{$nombre}' ,'{$email}','{$subject}','{$message}') ";
	//echo $sql;
	return $MySqli -> query($sql);

	

}

