<div class="card">
        <div class="card-header card-header-text" data-background-color="purple">
            <h4 class="card-title"><i class="fa fa-check fa-3x"></i></h4>
        </div>

        <div class="col-sm-12">
            <div class="card card-profile">
                <div class="card-avatar">
                    <a href="">
                        <img class="img" src="<?= base_url('Resources/images/ZicaroPapel/LogoZicaroTransparent.png'); ?>"/>
                    </a>
                </div>
                <div class="card-content">
                    <h6 class="category text-gray">ZICARO PAPEL</h6>
                    <h4 class="card-title"><?= $Mensaje ?></h4>
                    <p class="description">
                      <?= $Descripcion ?>
                    </p>
                    <a href="<?= site_url('/Administrador/'); ?><?= $Ir ?>" class="btn btn-rose btn-round">Volver</a>
                </div>
            </div>
        </div>

</div>
