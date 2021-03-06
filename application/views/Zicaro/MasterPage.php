
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="<?= base_url('Resources/images/ZicaroPapel/LogoZicaroTransparent.ico') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="theme-color" content="#4caf50">

	<title>ZICARO PAPEL</title>
	<meta name="theme-color" content="#00695C">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="<?= base_url('Resources/css/bootstrap.min.css"') ?>" rel="stylesheet" />
    <link href="<?= base_url('Resources/css/MaterialKitPro.min.css') ?>" rel="stylesheet"/>
		<link href="<?= base_url('Resources/css/flag-icon.min.css') ?>" rel="stylesheet"/>
</head>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102307312-1', 'auto');
  ga('send', 'pageview');
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<body class="pricing">

	<nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll="100">
	  <div class="container">
	      <!-- Brand and toggle get grouped for better mobile display -->
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>
	        <a href="<?= base_url(); ?>" class="navbar-brand">
	          <img src="<?= base_url('Resources/images/ZicaroPapel/LogoZicaroTransparent.png') ?>" alt="Zicaro Papel" width="90px">
	        </a>
	      </div>

	      <div class="collapse navbar-collapse" id="navigation-example">
	            <ul class="nav navbar-nav navbar-center">
	              <li>
	                <a href="<?= site_url('/Zicaro/Inicio') ?>">
	                <i class='fa fa-home'></i> INICIO
	                </a>
	              </li>
	              <li>
	                <a href="<?= site_url('/Zicaro/QuienesSomos') ?>">
	                <i class='fa fa-star-o'></i> QUIENES SOMOS
	                </a>
	              </li>
	              <li>
	                <a href="<?= site_url('/Zicaro/Catalogo') ?>">
	                <i class='fa fa-tags'></i> CATÁLOGO
	                </a>
	              </li>
	              <li>
	                <a href="<?= site_url('/Zicaro/Publicaciones') ?>">
	                <i class='fa fa-newspaper-o'></i> PUBLICACIONES
	                </a>
	              </li>
	              <li>
	                <a href="<?= site_url('/Zicaro/Contacto') ?>">
	                <i class='fa fa-comment-o'></i> CONTACTO
	                </a>
	              </li>
	            </ul>

	        <ul class="nav navbar-nav navbar-right">
	          <li>
	            <a href="https://twitter.com/zicaropapel" target="_blank" class="btn btn-just-icon btn-simple">
	              <i class="fa fa-twitter"></i>
	            </a>
	          </li>
	          <li>
	            <a href="https://www.facebook.com/zicaro.papel" target="_blank" class="btn btn-just-icon btn-simple">
	              <i class="fa fa-facebook-square"></i>
	            </a>
	          </li>
						<li>
							<a href="https://www.instagram.com/zicaropapel/" target="_blank" class="btn btn-just-icon btn-simple">
								<i class="fa fa-instagram"></i>
							</a>
						</li>
	        </ul>

	      </div>
	  </div>
	</nav>

<?php if ($TipeView == "DEFAULT"): ?>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<div class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="page-header header-filter" style="background-image: url('<?= base_url("Resources/images/ZicaroPapel/Background.jpg") ?>');">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-left">
									<h1 class="title"><?= $Enunciado ?></h1>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="page-header header-filter" style="background-image: url('<?= base_url("Resources/images/ZicaroPapel/Slide3.png") ?>');">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h1 class="title"><?= $Enunciado ?></h1>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="page-header header-filter" style="background-image: url('<?= base_url("Resources/images/ZicaroPapel/Slide4.png") ?>');">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-right">
									<h1 class="title"><?= $Enunciado ?></h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<i class="material-icons">keyboard_arrow_left</i>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<i class="material-icons">keyboard_arrow_right</i>
			</a>
		</div>
	</div><br><br>


<?php else: ?>
	<?php if ($TipeView == "PUB"): ?>
		<div class="page-header header-filter header-small" style="background-image: url('<?= base_url("Resources/images/Publicaciones/".$Detalles->get('PUB_IMAGEN')) ?>');">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="brand">
							<h1 class="title"><?= $Titulo ?></h1>
							<h3> <small><i class="fa fa-map-marker"></i></small> <?= $Ubicacion ?></h3>
							<h4 class="title"><?= $Fecha ?></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php else: ?>
		<div class="page-header header-filter header-small" style="background-image: url('<?= base_url("Resources/images/ZicaroPapel/Background.jpg") ?>');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h1 class="title"><?= $Enunciado ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php endif; ?>



	<div class="main main-raised">
		<div class="container">
			<div class="section section-text">
				<?php echo $content_for_layout;	 ?>
				<br>
			</div>
		</div>
	</div>

	<footer class="footer footer-black footer-big">
		<div class="container">

			<div class="content">
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<a href="<?= base_url(); ?>"><h5>ZICARO PAPEL</h5></a>
						<p></p>
					</div>

					<div class="col-sm-12 col-md-8">
						<ul class="social-buttons pull-right">
							<li>
								<a href="https://www.fairtrade.net/" target="_blank">
									<img width="80px" src="<?= base_url('/Resources/images/ZicaroPapel/FairTrade.png'); ?>">
								</a>
							</li>
							<li>
								<a href="https://simple.ripley.cl/tienda/zicaropapel-2244" target="_blank">
									<img width="80px" src="<?= base_url('/Resources/images/ZicaroPapel/MercadoRipley.png'); ?>">
								</a>
							</li>
						</ul>
					</div>

					<!--<div class="col-md-4">
						<ul class="social-buttons pull-right">
							<li>
								<a href="https://twitter.com/zicaropapel" target="_blank" class="btn btn-just-icon btn-simple">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/zicaro.papel" target="_blank" class="btn btn-just-icon btn-simple">
									<i class="fa fa-facebook-square"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/zicaropapel/" target="_blank" class="btn btn-just-icon btn-simple">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
						</ul>
					</div>-->

				</div>
			</div>


			<hr />

			<ul class="pull-left">
				<li>
					<a href="<?= site_url('/Zicaro/Inicio') ?>">
					<i class='fa fa-home'></i> INICIO
					</a>
				</li>
				<li>
					<a href="<?= site_url('/Zicaro/QuienesSomos') ?>">
					<i class='fa fa-star-o'></i> QUIENES SOMOS
					</a>
				</li>
				<li>
					<a href="<?= site_url('/Zicaro/Catalogo') ?>">
					<i class='fa fa-tags'></i> CATÁLOGO
					</a>
				</li>
				<li>
					<a href="<?= site_url('/Zicaro/Publicaciones') ?>">
					<i class='fa fa-newspaper-o'></i> PUBLICACIONES
					</a>
				</li>
				<li>
					<a href="<?= site_url('/Zicaro/Contacto') ?>">
					<i class='fa fa-comment-o'></i> CONTACTO
					</a>
				</li>
			</ul>

			<div class="copyright pull-right">
				<a href="https://github.com/CPQM07"><i class="fa fa-github"></i>   </a><a href="https://www.linkedin.com/in/christopher-quezada-409308124/"><i class="fa fa-linkedin"></i></a>    CPQM07  - <script>document.write(new Date().getFullYear())</script>
			</div>
		</div>
	</footer>

</body>
	<!--   Core JS Files   -->
	<script src="<?= base_url('Resources/jsFront/jquery.min.js') ?>" type="text/javascript"></script>
	<script src="<?= base_url('Resources/jsFront/bootstrap.min.js') ?>" type="text/javascript"></script>
	<script src="<?= base_url('Resources/jsFront/material.min.js') ?>"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="<?= base_url('Resources/jsFront/moment.min.js') ?>" type="text/javascript"></script>

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="<?= base_url('Resources/jsFront/nouislider.min.js" type="text/javascript') ?>" type="text/javascript"></script>

	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
	<script src="<?= base_url('Resources/jsFront/bootstrap-datetimepicker.js" type="text/javascript') ?>" type="text/javascript"></script>

	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
	<script src="<?= base_url('Resources/jsFront/bootstrap-selectpicker.js" type="text/javascript') ?>" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
	<script src="<?= base_url('Resources/jsFront/bootstrap-tagsinput.js') ?>" type="text/javascript"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
	<script src="<?= base_url('Resources/jsFront/jasny-bootstrap.min.js') ?>" type="text/javascript"></script>

	<!-- Plugin For Google Maps -->
	<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M') ?>" type="text/javascript"></script>

	<script src="<?= base_url('Resources/jsFront/atv-img-animation.js" type="text/javascript') ?>" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="<?= base_url('Resources/jsFront/material-kit.min.js?v=1.1.0" type="text/javascript') ?>" type="text/javascript"></script>

	<!-- Fixed Sidebar Nav - JS For Demo Purpose, Don't Include it in your project -->
	<script src="assets/assets-for-demo/modernizr.js" type="text/javascript') ?>" type="text/javascript"></script>
	<script src="assets/assets-for-demo/vertical-nav.js" type="text/javascript') ?>" type="text/javascript"></script>

</html>
