<?php
error_reporting(E_PARSE );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link type="text/css" rel=stylesheet href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">   
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/burger.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">    
<link rel="icon" href="img/logo.png">    
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov" rel="stylesheet">
    
 <script src="https://unpkg.com/scrollreveal"></script>
  
 <script type="text/javascript" src="js/cookies.js"></script>
<title>PopMovies</title>   
</head>
    
<body>
    
    <!-- navbar-->
        <div class="dnavbar" id="top">
        <input type="checkbox" id="check-nav"> 
        <div class="logo">
            <img src="img/logo.png" class="icon">
            <div class="log">PopMovies</div>
        </div>
        
        <?php 
            //Se hace una creacion de variables para poder poner el atributo de displayt none 
            //cuando el valor de la cokkie es distinto a null
            if ($_COOKIE['nu']==NULL){
            $estilo="style=\"display:none;\" ";
            $estilo2="";
            }else{
            $estilo="";
            $estilo2="style=\"display:none;\" ";
            }
            
            ?>
            
        
        <div class="links">
        <a  href="#" class="yeslog"  style="color:cyan"><?php echo $_COOKIE["nu"]; ?></a>    
        <a  href="index.php"  >Inicio</a>
        <a  href="catalogo.php" <?php echo $estilo; ?> >Catalogo</a> 
        <a  href="login.php" class="active" <?php echo $estilo2; ?> >Login</a>    
        <a  href="registro.php" <?php echo $estilo2; ?> >Registro</a>
        <a  href="login.php" <?php echo $estilo; ?> >Logout</a>
        <div>
        <div class="container-social"> 
        <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook social2 socialnav" style="font-size:50px"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter social2 socialnav" style="font-size:50px"></i></a>
        <a href="https://www.google.com" target="_blank"><i class="fa fa-google social2 socialnav" style="font-size:50px"></i></a>
        </div>    
        </div>    
        </div>
        <label for="check-nav">
        <div class="check">
        <div class="burger" onclick="burger(this)">
            <div class="line1"></div>
            <div class="line2"></div>
        <div class="line3"></div>
            
        </div>    
            </div>  
            </label>
    </div>
    
    <!--header-->

        <header>    
        <div class="dcontainer">   
        <img src="img/logo.png" class="img1 dlogo">
            <p class="eslogan">Only the best for you</p>
            </div>
    </header>
    
    
    <div class="container">
  <div class="row">
    <div class="col-sm">
      <h1 class="dtitle dtitle-ani">Iniciar sesión</h1>
    </div>
  </div>
</div>
    
    <?php   
    if(isset($_GET['error'])==true){
        echo '<script language="javascript">';
        echo 'alert("El nombre de usuario o la contraseña no coinciden")';
        echo '</script>';
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    }
    
    if(isset($_GET['lol'])==true){
        echo '<script language="javascript">';
        echo 'alert("NO SOMOS PRINCIPIANTES, HAZ FAVOR DE REGISTRARTE, ES GRATIS!")';
        echo '</script>';
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    }
    if(isset($_GET['success'])==true){
        echo '<script language="javascript">';
        echo 'alert("Se han registrado tus datos correctamente, ya puedes iniciar sesion.")';
        echo '</script>';
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    }
    
    
    
    ?>
    
    <div class="container">
    
    <form action="catalogo.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control"  placeholder="Ingresa tu nombre de usuario" name="user_name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu contraseña" name="user_pass" required>
  </div>

        <p>No tienes cuenta,<a href="registro.php"> registrate aqui</a></p>
        <br><br>

  <button type="submit" class="btn btn-primary" >Ingresar</button>
</form>
        </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <footer class="page-footer font-small blue">
    <br>
    <div>
<div class="social-container"> 
        <a href="https://www.facebook.com" target="_blank">
            <i class="fa fa-facebook social s1" style="font-size:25px"></i></a>
        <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter social s2" style="font-size:25px"></i></a>
        <a href="https://www.google.com" target="_blank"><i class="fa fa-google social s2" style="font-size:25px"></i></a>
        </div>    
</div>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color:white">© 2019 Copyright:
    <a href="#"> popmovies.com</a>
    <br>
    <a>Reynoso Gálvez Ana Laura</a>
    <br>
    <a>Pérez Alvarado Luis Raymundo </a>
    <br>
    <a>Maceda Patricio Fernando</a>
  </div>
  <!-- Copyright -->


    
</footer>

    
    
  
<script type="text/javascript" src="js/scrollerincon.js"></script>    
<script type="text/javascript" src="js/burger.js"></script>    
<script type="text/javascript" src="js/top.js"></script>    
<script type="text/javascript" src="js/scroll.js"></script>
 
</body>
    
</html>