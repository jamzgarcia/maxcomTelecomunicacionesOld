<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=decive-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Licores El Templo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menu_estilos.css">
</head>
<body>


<?php

if(isset($_SESSION['email'])){

    if ($_SESSION['rol']=='cliente'){
        header('location:index.php');
        die();
    }
}
?>
<!-- Default form register -->
<form class="text-center border border-light p-5" action="php/registro.php" method="post">
    <br>
    <br>
    <br>
    <p class="h4 mb-4">Registrarse!</p>

  

    <!-- E-mail -->
    <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Contraseña" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <br>
    <input type="password" id="con_contrasena" name="con_contrasena" class="form-control" placeholder="Confirmar Contraseña" aria-describedby="defaultRegisterFormPasswordHelpBlock">
        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        minimo 8 Caracteres incluyendo Mayuscula AA - Minuscula zz +  Numeros
    </small>
    <br>
    <!-- Phone number -->
    <input type="date" id="fec_nac" class="form-control" placeholder="Fecha Nacimiento" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Fecha Nacimiento
    </small>

      <div class="form-row mb-4">
        <div class="col-sm-3">
            <!-- First name -->
            <input type="text" id="nacionalidad" name="nacionalidad" class="form-control" placeholder="Nacionalidad">
        </div>
          <div class="col-sm-3 mt-2">
            <!-- First name -->
            <input type="text" id="region" name="region" class="form-control" placeholder="Region">
        </div>
         <div class="col-sm-3 mt-2">
            <!-- First name -->
            <input type="text" id="ciudad" name="ciudad" class="form-control" placeholder="Ciudad">
        </div>
    </div>
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Enviar</button>
    <a href="formulariologin.php">volver</a>

    <!-- Social register -->
    <p>Redes Sociales</p>

    <a href="https://www.facebook.com/groups/557373944948414/?ref=share" target="_blank" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="https://api.whatsapp.com/send?phone=+573508005219&text=Hola, Deseo información?" target="_blank">Whatsapp
        <i class="fab fa-whatsapp"></i>
    </a>
    <hr>

    <!-- Terms of service -->
    <p>
        <a href="http://www.jamzonline.net/public/users/JamzPCS/" target="_blank">Developed By FSociety Deveploment Software 
        <i class="fa fa-registered"></i> 2020</a>
    </p>

</form>
<!-- Default form register -->

<script src="js/menujs.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</body>
</html>
