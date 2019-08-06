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
<link rel="stylesheet" href="flexslider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
        touch: true,
        pauseOnAction: false,
        pauseOnHover: false,
    });
  });
</script> 

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov" rel="stylesheet">
    
    <script src="https://unpkg.com/scrollreveal"></script>
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
        <a  href="index.php" class="active" >Inicio</a>
        <a  href="catalogo.php" <?php echo $estilo; ?> >Catalogo</a> 
        <a  href="login.php" <?php echo $estilo2; ?> >Login</a>    
        <a  href="registro.php" <?php echo $estilo2; ?> >Registro</a>
        <a  href="login.php" <?php echo $estilo; ?> id="link">Logout</a>
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
      <h1 class="dtitle dtitle-ani">SOLO LO MEJOR DE LO MEJOR</h1>
    </div>
  </div>
</div>
    
    <!--bloque de texto-->


    <div class="container dexep">
  <div class="row" >
    <div class="col-sm mr-md-5 dpad" >
      <table style="height: 100%;">
  <tbody>
    <tr>
      <td class="align-middle djust dfont dfont-ani">PopMovies  es un servicio de streaming que permite a nuestros clientes ver una amplia variedad de series, películas, documentales y otros contenidos galardonados en miles de dispositivos conectados a Internet.</td>
    </tr>
  </tbody>
</table>

  </div>
</div>
    <br>
        <br></div>
    
    <div class="carousel slide dslider" style="background-image: url(img/para1.jpg)">
<h1 class="dtitle2">Los mejores estrenos</h1>
    </div>

    
        <!--iconos de servicios-->
 
      <div class="container" style="margin-top: 5%">
          <h2 class="dtit" style="text-align: center">LO QUE OFRECEMOS</h2>
          <br>
 
  <div class="row">
    <div class="col-sm icon1" id="dicon-effect">
    <div style="padding: 20px">
        
        <div class="shadow" id="icont" style="margin: auto">
        <i class="fa fa-sellsy" style="font-size: 60px;margin: 20px 40px"></i>
    </div>
        <h3 class="dtit" id="dunder" style="text-align: center;margin: 15px">Amplia biblioteca</h3>
        <p style="text-align: center;font-size: 140%">Contamos con una nube de alto rendimiento<br>Por lo que tendras miles de opciones para elegir.</p>
    </div>
    </div>
      <div class="col-sm icon2" id="dicon-effect">
    <div style="padding: 20px">
        
        <div class="shadow" id="icont" style="margin: auto">
        <i class="fa fa-line-chart" style="font-size: 60px;margin: 25px 40px"></i>
    </div>
        <h3 class="dtit" id="dunder" style="text-align: center;margin: 15px">Alta velocidad</h3>
        <p style="text-align: center;font-size: 140%">Contamos con una banda de alta velocidad<br>Por lo que tus peliculas se cargaran de inmediato.</p>
    </div>
    </div>
      <div class="col-sm icon3" id="dicon-effect">
    <div style="padding: 20px">
        
        <div class="shadow" id="icont" style="margin: auto">
        <i class="fa fa-credit-card" style="font-size:60px;margin: 25px 40px"></i>
    </div>
        <h3 class="dtit" id="dunder" style="text-align: center;margin: 15px">Diversas forma de pago</h3>
        <p style="text-align: center;font-size: 125%">Aceptamos todo tipo de pago<br>Tarjeta de debito y credito, asi como pagos en efectivo en OXXO.</p>
    </div>
    </div>
  </div>
</div>
    
    <br>
    <br>

        <div class="carousel slide dslider" style="background-image: url(img/para2.jpg)">
<h1 class="dtitle2">Registrate ya!!!</h1>
    </div>
    
    

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

    
    
<script type="text/javascript" src="js/cookies.js"></script>     
<script type="text/javascript" src="js/scrollerincon.js"></script>     
<script type="text/javascript" src="js/burger.js"></script>    
<script type="text/javascript" src="js/top.js"></script>    
<script type="text/javascript" src="js/scroll.js"></script>
 
</body>
    
</html>