<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Ingresar y Registrarse</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="logged.php" class="sign-in-form" method="post">
            <h2 class="title">Ingresar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario" name="usuario" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="pw" required/>
            </div>
            <input type="submit" value="Ingresar" class="btn solid"/>
            <?php
                //esto es por si devuelve un "fallo = true" en logged.php
                if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
                {
                    echo "<div style='color:red'>Usuario o contraseña invalidos </div>";
                }
                if (isset($_GET["crea"]) && $_GET["crea"] == 'true') {
                    echo "<div style='color:green'>Usuario creado correctamente </div>";
                }
            ?>
          </form>
          <form action="newuser.php" class="sign-up-form" method="post">
            <h2 class="title">Registrar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario" name="usuario" required/>
            </div>
            <div class="input-field">
            <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombres" name="name" required/>
            </div>
            <div class="input-field">
            <i class="fas fa-user"></i>
              <input type="text" placeholder="Apellidos" name="Lname" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="pw" required/>
            </div>
            <input type="submit" value="Registrar" class="btn"/>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Aún no estas registrado?</h3>
            <p>
              Registrate y se uno de los primeros en tener acceso al MetaUniverso
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrar
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Si, ya haces parte de nuestra comunidad</h3>
            <p>
                Ingresa para ver novedades<br><br>
                En este 2022 podrás vivir el lanzamiento oficial de nuestro MetaUniverso
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Ingresar
            </button>
          </div>
          <img src="img/signup.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
