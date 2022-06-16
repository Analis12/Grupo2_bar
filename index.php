<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="login__container">
       <div class="login__top">
          <img  class="login__img" src="./img/iconLogin.png" alt="">
          <h2 class="login__title">Bar <span>Productos</span></h2>
       </div>
        
        <form class="login__form">
            <input type="text" placeholder="Usuario" required autofocus>
            <input type="password" placeholder="Contraseña" required>
            <input class="btn__submit" type="submit" value="ENTRAR">
            <a class="form__recover" href="">Olvidaste la contraseña?</a>
        </form>
    </div>
    <?php
    require "class_conection.php"
    ?>
</body>
</html>