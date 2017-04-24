<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="<?= base_url() ?>Resources/images/Dirtyllas/DIRTYllasLogo.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>DIRTYLLAS CHILE - ADM</title>


     <!-- Bootstrap core CSS     -->
    <link type='text/css' href="<?= base_url() ?>Resources/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link type='text/css' href="<?= base_url() ?>Resources/css/Dashboard.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link type='text/css' href="<?= base_url() ?>Resources/css/font-awesome.min.css" rel="stylesheet" />
    <link type='text/css' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet'>
</head>
<?php $user = $this->session->userdata('logged_in');?>
<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="black" data-background-color="white" data-image="<?= base_url() ?>Resources/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="#" class="simple-text">
                    DIRTYllas CHILE
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="#" class="simple-text">
                  	DC
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="<?= base_url() ?>Resources/images/Dirtyllas/DIRTYllasLogo.png" />
                    </div>
                    <div class="info">
												<a class="collapsed"> <?=$user["correo"];?> </a>
                    </div>
                </div>
                <ul class="nav">
									<li <?php if (isset($AddActive) and $AddActive == "Zapatillas"): ?> class="active" <?php endif ?>>
										<a href="<?= site_url('/BackOffice/shoes')  ?>">
											<i class='fa fa-tag'></i>
											<p>Zapatillas</p>
										</a>
									</li>
									<li <?php if (isset($AddActive) and $AddActive == "Categorias"): ?> class="active" <?php endif ?>>
										<a href="<?= site_url('/BackOffice/category')  ?>">
											<i class="fa fa-bookmark"></i>
											<p>Categorias</p>
										</a>
									</li>
									<li <?php if (isset($AddActive) and $AddActive == "Marcas"): ?> class="active" <?php endif ?>>
										<a href="<?= site_url('/BackOffice/brands')  ?>">
											<i class='fa fa-tags'></i>
											<p>Marcas</p>
										</a>
									</li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
														<i class='fa fa-barsvisible-on-sidebar-regular '></i>
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
                        <a class="navbar-brand" href="#"> Bienvenido - <?=$user["nombre"];?> </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class='fa fa-user'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?= site_url('BackOffice/logout') ?>">Salir</a>
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
                        <a href="#"><span class="text-danger">CPQM07</span></a>, Coded with <i class='fa fa-heart text-danger'></i>
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
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
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
				$('#datatables').DataTable({
						"pagingType": "full_numbers",
						"lengthMenu": [
								[10, 25, 50, -1],
								[10, 25, 50, "All"]
						],
						responsive: true,
						language: {
								search: "_INPUT_",
								searchPlaceholder: "Buscar...",
						}

				});


				var table = $('#datatables').DataTable();

				// Edit record
				table.on('click', '.edit', function() {
						$tr = $(this).closest('tr');

						var data = table.row($tr).data();
						alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
				});

				// Delete a record
				table.on('click', '.remove', function(e) {
						$tr = $(this).closest('tr');
						table.row($tr).remove().draw();
						e.preventDefault();
				});

				//Like record
				table.on('click', '.like', function() {
						alert('You clicked on Like button');
				});

				$('.card .material-datatables label').addClass('form-group');
				});
</script>
</html>
