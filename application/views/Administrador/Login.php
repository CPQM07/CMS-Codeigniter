<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="<?= base_url() ?>Resources/images/ZicaroPapel/LogoZicaroTransparent.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ZICARO PAPEL - ADM</title>


     <!-- Bootstrap core CSS     -->
    <link type='text/css' href="<?= base_url() ?>Resources/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link type='text/css' href="<?= base_url() ?>Resources/css/Dashboard.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link type='text/css' href="<?= base_url() ?>Resources/css/font-awesome.min.css" rel="stylesheet" />
    <link type='text/css' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet'>
</head>

<body>
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" filter-color="" data-image="<?= base_url('Resources/images/ZicaroPapel/Background.jpg') ?>">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
													<form action="<?=site_url('Login/Login')?>" method="POST">
                                <div class="card card-login card-hidden">
                                    <div class="card-header text-center" data-background-color="orange">
                                        <h4 class="card-title">Bienvenido</h4>
																				<img src="<?= base_url('Resources/images/ZicaroPapel/LogoZicaroTransparent.png') ?>" width="80px" alt="">
																				<?=(isset($error))? $error : ""; ?>
                                    </div>
                                    <div class="card-content">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class='fa fa-envelope-o'></i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Rut</label>
                                                <input type="text"  name="usuario" class="form-control">
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class='fa fa-key'></i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Contraseña</label>
                                                <input type="password"  name="clave" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer text-center">
                                        <button type="submit" class="btn btn-danger btn-red btn-simple btn-wd btn-lg">Ingresar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
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
<!-- Select Plugin -->
<script src="<?= base_url() ?>Resources/jsBack/jquery.select-bootstrap.js"></script>
<!-- Material Dashboard DEMO methods-->
<script src="<?= base_url() ?>Resources/jsBack/demo.js"></script>

<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>
