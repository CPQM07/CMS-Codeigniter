<div class="row">
    <div class="col-md-3">
      <div class="panel-group" id="Categorias" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="heading">
          <a role="button" data-toggle="collapse" data-parent="#Categorias" href="#collapse" aria-expanded="true" aria-controls="collapse">
            <h4 class="panel-title">
            Categorías
            <i class="material-icons">keyboard_arrow_down</i>
            </h4>
          </a>
          </div>

          <div id="collapse" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading">
            <div class="panel-body">
              <?php foreach ($Categorias as $key => $value): ?>
                <a href="<?= site_url('/Zicaro/Categorias/'); ?><?= $value->get('CAT_ID'); ?>" class="btn btn-block btn-primary btn-sm btn-round" href=""><?= $value->get('CAT_NOMBRE'); ?></a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-9">
      <div class="row">
      <?php if ($Productos > 1): ?>
        <?php foreach ($Productos as $key => $value): ?>
          <?php if ($value->get('PROD_ESTADO') == 1): ?>
            <div class="col-sm-12 col-md-4">
              <div class="card card-product card-plain card-rotate">
                <div class="rotating-card-container">
                  <div class="card-image">
                    <div class="front">
                      <img class="img" src="<?= base_url('Resources/images/Productos/') ?><?= $value->get('PROD_IMAGEN'); ?>">
                    </div>

                    <div class="back back-background">
                      <div class="card-content">
                        <h5 class="card-title">
                        Acciones Rapidas
                        </h5>
                        <div class="footer text-center">
                          <a href="<?= site_url('/Zicaro/Producto/'); ?><?= $value->get('PROD_ID'); ?>" class="btn btn-round btn-rose">
                          <i class="material-icons">info</i> Detalles
                          </a>
                        </div>
                        <hr/>
                        <p class="card-description">
                          Puedes compartir este producto con tus amigos...
                        </p>

                        <a data-href="http://ZicaroPapel.cl/index.php/Zicaro/Producto/<?= $value->get('PROD_ID'); ?>" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2FZicaroPapel.cl%2Findex.php%2FZicaro%2FProducto%2F<?= $value->get('PROD_ID'); ?>&amp;src=sdkpreparse"
                        data-mobile-iframe="true" target="_blank" class="btn btn-just-icon btn-round btn-white btn-facebook">
                          <i class="fa fa-facebook"></i>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="card-content">
                  <h4 class="card-title">
                  <a href=""><?= $value->get('PROD_NOMBRE'); ?></a>
                  </h4>
                  <p class="card-description"><?= $value->get('PROD_DESC'); ?></p>
                  <div class="footer">
                    <div class="price-container">
                      <span class="price price-old"> &dollar;<?= $value->get('PROD_PRECIO'); ?></span>
                      <span class="price price-new"> &dollar;<?= $value->get('PROD_PRECIO'); ?></span>
                    </div>
                    <div class="stats">
                      <span><?= $value->get('CAT_NOMBRE'); ?> - <span class="flag-icon flag-icon-cl"></span></span>
                    </div>
                  </div>
                </div>

              </div>
              <hr>
            </div>
          <?php endif; ?>
          <?php endforeach; ?>

      <?php else: ?>
        <div class="alert alert-primary">
          <div class="alert-icon">
            <i class="material-icons">error_outline</i>
          </div>
          <b>:(</b>
          <p>Momentaneamente no contamos con PRODUCTOS en esta seccion</p>
        </div>
      <?php endif; ?>

      </div>
      <?= $Paginacion; ?>
    </div>
  </div>
