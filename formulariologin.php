<!DOCTYPE html>
<html>
<head>
  <title>Maxcom Telecomunicaciones</title>
    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous">      
    </script>
    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <script src="js/modernizr.custom.63321.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">        
      </script>
      <style> 
      @import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
      body {
        background: #7f9b4e url(img/indice.jpg) no-repeat center top;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
      }
      .container > header h1,
      .container > header h2 {
        color: #fff;
        text-shadow: 0 1px 1px rgba(0,0,0,0.7);
      }
      </style>
      <script>
        alert("Bienvenido!");
      </script>
    </head>
<body>
        <div class="container text-center">
      <header>
        <img src="img/logo2.jpg" style="width: 240px; height: 100px;">
        <h6 style="color: white;"><strong>MAXCOM TELECOMUNICACIONES</strong></h6>   
      </header>
      <section class="main">
        <form action="php/login.php" method="post" autocomplete="on">
            <h1 style="color: white;">Ingresar ó Registrarse</h1>
            <div class="container col-sm-3">
            <p>
                <strong><h3 for="login" style="color: white;">Correo Electronico</h3></strong>
                <input type="text" name="email" id="email" placeholder="Correo" required>
            </p>
            </div>
            <div class="container col-sm-3">
            <p>
                <strong><h3 for="password" style="color: yellow;">Contraseña</h3></strong>
                <input type="password" name="contrasena" id="contrasena" placeholder="contraseña" required> 
            </p>
            </div>
            <div class="container col-sm-3">
            <p>
                <input type="submit" name="submit" value="Enviar">
            </p>
                <div class="text-center">
                  <a href="formularioregistro.php" style="color: white;">Registrarse</a>
                  <br>
                  <a href="index.php" style="color: white;">Volver al Inicio</a>
                </div>      
            </div>
        </form>​
      </section>
      
        </div>
 <!-- JS here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/formulariologin.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
   
</body>

</html>


