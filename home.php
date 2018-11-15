<?php

  require_once 'autoload.php';

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartPet - Home</title>
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>
  <body>

    <?php require_once 'header.php'; ?>

    <div class="container-principal">

      <div class="container-secundario">
        <!-- Bootstrap Carousel STARTS -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/perro.jpeg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                  <h2>En <strong>SmartPet</strong></h2>
                  <h2>sabemos quienes son tus mejores amigos</h2>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/gato.jpeg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                  <h2>Es por esto que los queremos</h2>
                  <h2><strong>cuidar</strong> como si fueran nuestros hijos</h2>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/hamster.jpg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                  <h2>Brindandoles la <strong>mejor</strong></h2>
                  <h2>atención y productos del mercado</h2>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <!--<span class="sr-only">Previous</span>-->
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <!--<span class="sr-only">Next</span>-->
          </a>
        </div>
        <!-- Bootstrap Carousel ENDS -->

        <?php
        $productos = [
        "camas_mascotas"=>["titulo"=>"Cama Para mascotas", "precio"=>" ","imagen"=>"imgProductos/camas_mascotas.jpg"],
        "alimento_perros"=>["titulo"=>"Alimento Balanceado", "precio"=>" ","imagen"=>"imgProductos/alimento_perros.jpg"],
        "comedero"=>["titulo"=>"Comedero para mascotas", "precio"=>" ","imagen"=>"imgProductos/comedero.jpg"],
        "ropa_perros"=>["titulo"=>"Ropa para Mascotas", "precio"=>" ","imagen"=>"imgProductos/ropa_perros.jpg"],
        "arnes"=>["titulo"=>"Arnes de Paseo", "precio"=>" ","imagen"=>"imgProductos/arnes.jpg"],
        "cucha"=>["titulo"=>"Cucha para Perros", "precio"=>" ","imagen"=>"imgProductos/cucha.jpg"],
        "rascador_gatos"=>["titulo"=>"Rascador para Gatos", "precio"=>" ","imagen"=>"imgProductos/rascador_gatos.jpg"],
        "acuario"=>["titulo"=>"Acuario para Peces", "precio"=>" ","imagen"=>"imgProductos/acuario.jpeg"]
        ];
       ?>



        <section class="container-fluid seccion_productos">
          <h2 class="titular">Ofertas del día</h2>
          <div class="container-fluid container_productos">
            <?php foreach ($productos as $key => $value) {?>
              <div class="producto">
              <img src="<?php echo $productos[$key]["imagen"];?>" alt="" width="400">
              <h3><?php echo $productos[$key]["titulo"]; ?></h3>
              <h4><?php echo $productos[$key]["precio"]; ?></h4>
              </div>
            <?php } ?>
          </div>
        </section>


      </div>

      <?php require_once 'footer.php'; ?>

    </div>

    <script src="js/header.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </body>
</html>
