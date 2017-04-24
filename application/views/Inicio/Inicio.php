<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DIRTYllasChile</title>
    <link rel="shortcut icon" href="<?= base_url() ?>Resources/images/Dirtyllas/DIRTYllasLogo.ico">
    <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <!-- Stylesheet -->
    <link href="<?= base_url() ?>Resources/css/gallery-materialize.min.css" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="<?= base_url() ?>Resources/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="<?= base_url() ?>Resources/css/gradients.min.css" rel="stylesheet">
  </head>
  <body>

    <!-- Navbar and Header -->
    <div class="navbar-fixed">
        <nav class="grey lighten-5">
          <div class="nav-wrapper container">
            <a href="#" class="black-text" id="logo-container"><em>DIRTYLLAS CHILE</em></a>
            <ul class="right hide-on-med-and-down">
              <li class="active"><a class='dropdown-button black-text' href='#' data-activates='feature-dropdown' data-belowOrigin="true" data-constrainWidth="false">Siguenos <i class='fa fa-flag-o'></i></a></li>
            </ul>
            <!-- Dropdown Structure -->
            <ul class='dropdown-content' id='feature-dropdown'>
              <li><a href="https://www.instagram.com/_dirtyllas/"><i class='fa fa-instagram orange-text'></i><span class="grey-text"> _Dirtyllas</span></a></li>
              <li><a href="https://www.facebook.com/DirtyllasCL/"><i class='fa fa-facebook orange-text'></i><span class="grey-text"> DIRTYllasChile</span></a></li>
            </ul>

            <ul class="side-nav" id="nav-mobile">
              <li><img src="<?= base_url() ?>Resources/images/Dirtyllas/DIRTYllasLogo.png" width="100px" alt=""></li>
              <li class="active"><a>Siguenos <i class='fa fa-flag-o'></i></a></li>
              <li><a href="https://www.instagram.com/_dirtyllas/"><i class='fa fa-instagram orange-text'></i><span class="grey-text"> _Dirtyllas</span></a></li>
              <li><a href="https://www.facebook.com/DirtyllasCL/"><i class='fa fa-facebook orange-text'></i><span class="grey-text"> DIRTYllasChile</span></a></li>
            </ul>

            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons orange-text">menu</i></a>
          </div>
        </nav>
    </div>

    <!-- Parallax -->
    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <br>
          <div class="header center">
            <img class="responsive-img" src="<?= base_url() ?>Resources/images/Dirtyllas/DIRTYllasLogo.png" width="300px" alt="">
          </div>
          <div class="row center">
            <h5 class="header col s12 light white-text"><?= $Frase ?></h5>
          </div>
        </div>
      </div>
      <div class="parallax"><img src="<?= base_url() ?>Resources/images/Dirtyllas/Banner3.jpg"></div>
    </div><br>

    <!-- Modal Structure -->
    <div id="BuscarZapatilla" class="modal modal-fixed-footer">
        <div class="modal-content">
          <div class="center">
            <img src="<?= base_url() ?>Resources/images/Dirtyllas/DIRTYllasLogo.png" width="100px" alt="">
          </div><br>
          <h5 class="center"><em>DIRTYLLAS CHILE - MARCAS</em></h5>
            <div class="collection">
                <?php foreach ($Marcas as $key => $value) :?>
                  <a class="collection-item center" href="<?=site_url('FrontEnd/Marca/'.$value->get('marca_nombre'))?>"><span class="orange-text"><?= $value->get('marca_nombre') ?></span></a>
                <?php endforeach ?>
            </div>
        </div>
      </div>

    <!-- DIRTYllasChile Categorias-->
    <div class="container generos">
      <nav class="nav-extended grey darken-3">
        <div class="nav-wrapper">
          <ul class="left ">
            <li <?php if (isset($AddActive) and $AddActive == "Todas"): ?> class="active" <?php endif ?>><a href="<?= site_url('/FrontEnd/index') ?>">Todas</a></li>
            <li <?php if (isset($AddActive) and $AddActive == "hombre"): ?> class="active" <?php endif ?>><a href="<?= site_url('/FrontEnd/Genero/hombre') ?>">Hombre</a></li>
            <li <?php if (isset($AddActive) and $AddActive == "mujer"): ?> class="active" <?php endif ?>><a href="<?= site_url('/FrontEnd/Genero/mujer') ?>">Mujer</a></li>
            <li <?php if (isset($AddActive) and $AddActive == "unisex"): ?> class="active" <?php endif ?>><a href="<?= site_url('/FrontEnd/Genero/unisex') ?>">Unisex</a></li>
          </ul>
          <a class="btn-floating btn-large halfway-fab waves-effect waves-light deep-orange darken-4" href="#BuscarZapatilla">
            <i class="material-icons">search</i>
          </a>
        </div>
      </nav>
    </div><br>

    <!-- DIRTYllasChile Catalogo-->
    <div id="portfolio" class="section">
      <div class="container">
        <div class="gallery row">

          <?php foreach ($Zapatillas as $key => $value) :?>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src='<?=base_url("Resources/images/Modelos/ZapatillaPortada-".$value->get("zapatilla_id")).".jpg"?>'>
              </a>
              <div class="gallery-header">
                <span class="blue-text"><?=$value->get('marca_nombre')?></span>
                <span class="blue-text"><?=$value->get('zapatilla_modelo')?></span><br>
                <span class="deep-orange-text"><i class='fa fa-dollar'></i><span> <?=$value->get('zapatilla_precio')?></span></span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h4><span class="deep-orange-text"> <?=$value->get('marca_nombre')?> <?=$value->get('zapatilla_modelo')?></span></h4>
                  <h6><span class="blue-text"><?=$value->get('categoria_nombre')?></span></h6>
                </div>

                <div class="description">
                  <div>
                    <h5><i class='deep-orange-text fa fa-dollar'></i> <?=$value->get('zapatilla_precio')?></h5><br>
                    <span class="deep-orange-text">Tallas Desde: <?=$value->get('zapatilla_talla_desde')?></span><br>
                    <span class="deep-orange-text">Hasta: <?=$value->get('zapatilla_talla_hasta')?></span>
                  </div><br>
                  <p><?=$value->get('zapatilla_descripcion')?></p>
                </div>

                <div class="carousel-wrapper">
                  <div class="carousel">
                        <a class="carousel-item" href="#one!"><img src='<?=base_url("Resources/images/Modelos/ZapatillaPortada-".$value->get("zapatilla_id")).".jpg"?>'></a>
                        <a class="carousel-item" href="#two!"><img src='<?=base_url("Resources/images/Modelos/ZapatillaPortada-".$value->get("zapatilla_id")).".jpg"?>'></a>
                        <a class="carousel-item" href="#three!"><img src='<?=base_url("Resources/images/Modelos/ZapatillaPortada-".$value->get("zapatilla_id")).".jpg"?>'></a>
                        <a class="carousel-item" href="#four!"><img src='<?=base_url("Resources/images/Modelos/ZapatillaPortada-".$value->get("zapatilla_id")).".jpg"?>'></a>
                        <a class="carousel-item" href="#five!"><img src='<?=base_url("Resources/images/Modelos/ZapatillaPortada-".$value->get("zapatilla_id")).".jpg"?>'></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class='fa fa-whatsapp'></i></a>
              </div>
            </div>
          </div>
          <?php endforeach?>
        </div>
      </div>
    </div><!-- /.container -->

    <footer class="page-footer grey darken-3">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h6 class="white-text">DIRTYllas CHILE</h6>
            <p class="grey-text text-lighten-4"></p>
          </div>
          <div class="col l4 offset-l2 s12">
            <a class="white-text" href=""></a>
            <ul>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2017 Copyright <a href="https://www.instagram.com/c.pierre_" class="deep-orange-text">CPQM07</a>
        </div>
      </div>
    </footer>



    <!-- Core Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?= base_url() ?>Resources/jsFront/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url() ?>Resources/jsFront/masonry.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="<?= base_url() ?>Resources/jsFront/color-thief.min.js"></script>
    <script src="<?= base_url() ?>Resources/jsFront/galleryExpand.js"></script>
    <script src="<?= base_url() ?>Resources/jsFront/init.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
        $('.parallax').parallax();
        $(".button-collapse").sideNav();
        $('.modal').modal();
        $('select').material_select();
        });
    </script>

    <script type="text/javascript">
        var options = [
        {selector: '.generos', offset: 50, callback: customCallbackFunc } },
        {selector: '.other-class', offset: 200, callback: function() {
        customCallbackFunc();
        } },
        ];
        Materialize.scrollFire(options);
    </script>

  </body>
</html>
