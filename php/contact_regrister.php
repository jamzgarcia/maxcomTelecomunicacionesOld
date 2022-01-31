<?php

include_once ('utilidades.php');
include_once ('../db/utilidades_sql.php');

if(isset($_SESSION['email'])){

	if ($_SESSION['rol']=='cliente'){

		header('location:index.php');
		die();
	}
}

		if($_POST){

		$nombre=isset($_POST ['name'])?
			 $_POST['name']:'' ;	 

		$email=isset($_POST ['email'])?
			 $_POST['email']:'' ;

		$subject=isset($_POST ['subject'])?
			 $_POST['subject']:'' ;

		$message=isset($_POST ['message'])?
			 $_POST['message']:'' ;

 			$result = set_contacto($nombre,$email, $subject,  $message);
 			
 			if ($result) {
 				echo "<script>alert('Mensaje Enviado Con Éxito');</script>";	
 					ob_start();
					header("refresh:1;url=../contact.php");	
 			}else{
 				header('location: ../index.php');
 				die;
 			}
}


?>