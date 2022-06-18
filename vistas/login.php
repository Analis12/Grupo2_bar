<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body class="body_login">
    <div class="contenedor" >
    <img  src="../imagenes/principal2.jpg" />
    <div class="Completo ">
    <div class="titulo_login">
        <h2>Inicio de Sesión</h2>
    </div>
    <div class="container_login">
    <form action="" method = "POST">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }

        ?>
        <p><img  class="icono" src="../imagenes/perfil.png" alt="">
            <input class="input" type="text" name= "username" placeholder="Usuario" >
        </p>
        <p><img  class="icono" src="../imagenes/bloqueado.png" alt="">
            <input class="input" type="password" name= "password" placeholder="Contraseña">
        </p> <br>
        <input class="button" type="submit" value ="Iniciar Sesión">
    </form>
    </div>
    </div>
    </div>
    
</body>
</html>