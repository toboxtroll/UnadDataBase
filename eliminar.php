<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/materialize.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="Lectura1.html">MySQL</a></li>
    <li><a href="Lectura2.html">Conexión BD</a></li>
    <li><a href="Lectura3.html">Guardar Registros</a></li>
    <li><a href="Lectura4.html">Consultar Registros</a></li>
    <li><a href="Lectura5.html">Eliminar Registros</a></li>
  </ul>
    <nav style="background-color: #005883;">
      <div class="nav-wrapper" style="margin-left: 20px; ">
        <a href="index.html" class="brand-logo" ><b>ECBTI</b></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="index.html">Inicio</a></li>
          <li><a class="dropdown-trigger" href="#" data-target="dropdown1">Lecturas<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="sass.html">Autor</a></li>
        </ul>
      </div>
    </nav>
        
  <div class="container">
    <div class="row">

      <div class="col s9">
      <!-- Grey navigation panel -->

        <div class="col s12">
          <h5 style="color:  #F47920;">Ingrese la cedula de estudiante a eliminar:</h5>
          <form class="col s12" action="eliminar_reg.php" method="post">
            <div class="row">
              <div class="input-field col s12">
                <input name="cedula" type="text" class="validate">
                <label for="nombre">Cedula</label>  
                <button style="background-color:  #F47920;" class="btn waves-effect waves-light" type="submit" value="cedula">Buscar</button>
              </div>
            </div>
          </form>
        </div>
      </div>




      <!--menu sidebar-->
      <div class="col s3">

        <h2><img src="img/logo_vertical.png"></h2>
        <a href="https://www.contadorvisitasgratis.com" title="contador de visitas gratis"><img src="https://counter11.allfreecounter.com/private/contadorvisitasgratis.php?c=ny27wpzpfeuqwydnzqtb8zt5z2nqcndq" border="0" title="contador de visitas gratis" alt="contador de visitas gratis"></a>
      </div>

    </div>

  </div>


<!-- pie de pagina-->
<footer class="page-footer" style="background-color: #005883;">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h5 class="white-text" style="color:  #F47920;">Universidad Nacional Abierta y a Distancia</h5>
        <p class="grey-text text-lighten-4">Escuela de Ciencias Básicas, Tecnología e Ingeniería</p>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">© 2014 Copyright Text
      <a class="grey-text text-lighten-4 right" href="https://www.unad.edu.co/">Visitenos</a>
    </div>
  </div>
</footer>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.materialboxed').materialbox();
  });
      
</script>
</body>
</html>