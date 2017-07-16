<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="<?= base_url() ?>Resources/images/ZicaroPapel/LogoZicaroTransparent.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="theme-color" content="#8e24aa">

	<title>ZICARO PAPEL - ADM</title>
		<!-- Theme included stylesheets -->
		<link href="//cdn.quilljs.com/1.2.6/quill.snow.css" rel="stylesheet">
		<link href="//cdn.quilljs.com/1.2.6/quill.bubble.css" rel="stylesheet">
     <!-- Bootstrap core CSS     -->
    <link type='text/css' href="<?= base_url() ?>Resources/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link type='text/css' href="<?= base_url() ?>Resources/css/Dashboard.css" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link type='text/css' href="<?= base_url() ?>Resources/css/font-awesome.min.css" rel="stylesheet" />
    <link type='text/css' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet'/>
</head>
<?php $usuario = $this->session->userdata('logged_in');?>
<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="purple" data-background-color="black" data-image="<?= base_url() ?>Resources/images/ZicaroPapel/Background.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a class="simple-text">
                    ZICARO PAPEL
                </a>
            </div>
            <div class="logo logo-mini">
                <a class="simple-text">
                  	ZP
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="<?= base_url() ?>Resources/images/ZicaroPapel/LogoZicaroTransparent.png" />
                    </div>
                    <div class="info">
												<a class="collapsed"> <?=$usuario["correo"];?> </a>
                    </div>
                </div>
                <ul class="nav">

									<li <?php if (isset($URL) && $URL == "Productos") : ?> class="active" <?php endif ?>>
										<a href="<?= site_url('/Administrador/Productos'); ?>">
											<i class="fa fa-tags"></i>
											<p>PRODUCTOS</p>
										</a>
									</li>

									<li <?php if (isset($URL) && $URL == "Categorias") : ?> class="active" <?php endif ?>>
										<a href="<?= site_url('/Administrador/Categorias'); ?>">
											<i class="fa fa-bookmark"></i>
											<p>CATEGORIAS</p>
										</a>
									</li>

									<li <?php if (isset($URL) && $URL == "Publicaciones") : ?> class="active" <?php endif ?>>
										<a href="<?= site_url('/Administrador/Publicaciones'); ?>">
											<i class="fa fa-newspaper-o"></i>
											<p>PUBLICACIONES</p>
										</a>
									</li>

									<?php if ($usuario["tipo"] == 0): ?>
									<li <?php if (isset($URL) && $URL == "Usuarios") : ?> class="active" <?php endif ?>>
										<a href="<?= site_url('/Administrador/Usuarios'); ?>">
											<i class="fa fa-users"></i>
											<p>USUARIOS</p>
										</a>
									</li>
									<?php endif; ?>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
														<i class='fa fa-bars visible-on-sidebar-regular'></i>
														<i class='fa fa-list visible-on-sidebar-mini'></i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Bienvenido - <?=$usuario["nombres"];?> </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class='fa fa-user'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?= site_url('Login/logout') ?>">Salir</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
								<div class="container-fluid">
									<?php if (isset($_SESSION['Deshabilitar'])): ?>
										<div class="row">
											<div class="notificacion col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 pull-right">
													<div class="alert alert-rose alert-with-icon" data-notify="container">
														<i class="material-icons" data-notify="icon">notifications</i>
														<span data-notify="message"><?= $_SESSION['Deshabilitar'];?></span>
												</div>
											</div>
										</div>
									<?php endif; ?>

									<?php if (isset($_SESSION['Habilitar'])): ?>
										<div class="row">
											<div class="notificacion col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 pull-right">
												<div class="alert alert-info alert-with-icon" data-notify="container">
														<i class="material-icons" data-notify="icon">notifications</i>
														<span data-notify="message"><?= $_SESSION['Habilitar'];?></span>
												</div>
											</div>
										</div>
									<?php endif; ?>
											<?php echo $content_for_layout; ?>
								</div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="https://www.linkedin.com/in/christopher-quezada-409308124/"><span class="text-danger">CPQM07</span></a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="<?= base_url() ?>Resources/jsBack/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>Resources/jsBack/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>Resources/jsBack/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>Resources/jsBack/material.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>Resources/jsBack/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Main Quill library -->
<script src="//cdn.quilljs.com/1.2.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.2.6/quill.min.js"></script>
<!-- Forms Validations Plugin -->
<script src="<?= base_url() ?>Resources/jsBack/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?= base_url() ?>Resources/jsBack/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?= base_url() ?>Resources/jsBack/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?= base_url() ?>Resources/jsBack/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url() ?>Resources/jsBack/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="<?= base_url() ?>Resources/jsBack/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?= base_url() ?>Resources/jsBack/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?= base_url() ?>Resources/jsBack/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?= base_url() ?>Resources/jsBack/nouislider.min.js"></script>
<!-- Select Plugin -->
<script src="<?= base_url() ?>Resources/jsBack/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="<?= base_url() ?>Resources/jsBack/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="<?= base_url() ?>Resources/jsBack/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?= base_url() ?>Resources/jsBack/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?= base_url() ?>Resources/jsBack/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="<?= base_url() ?>Resources/jsBack/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?= base_url() ?>Resources/jsBack/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= base_url() ?>Resources/jsBack/demo.js"></script>


<script>
    $(document).ready(function() {
			$("#datatables").dataTable({
					lengthMenu: [5,10, 20, 50, 100],
					responsive: true,
					"language": {
					"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
					}
			});
		});
</script>

<script type="text/javascript">
$('.datetimepicker').datetimepicker({

		format: "YYYY/MM/DD",
		icons: {
				time: "fa fa-clock-o",
				date: "fa fa-calendar",
				up: "fa fa-chevron-up",
				down: "fa fa-chevron-down",
				previous: 'fa fa-chevron-left',
				next: 'fa fa-chevron-right',
				today: 'fa fa-screenshot',
				clear: 'fa fa-trash',
				close: 'fa fa-remove',
				inline: true
		}
 });
</script>

<script type="text/javascript">
$(function () {
    setTimeout(function() {
        $(".notificacion").fadeOut(3000);
    },2000);
});
</script>

</html>
