<div class="row">
  <div class="col-md-9">
    <?php if ($Publicaciones > 1): ?>
      <?php foreach ($Publicaciones as $key => $value): ?>
        <?php if ($value->get('PUB_ESTADO') == 1): ?>
          <div class="card card-plain card-blog">
            <div class="row">
              <div class="col-md-5">
                <div class="card-image">
                  <img class="img img-raised" src="<?= base_url("Resources/images/Publicaciones/".$value->get('PUB_IMAGEN')) ?>" />
                </div>
              </div>

              <div class="col-md-7">
                <h6 class="category text-primary"> <span class="text-rose"><i class="fa fa-map-marker"></i></span> <?= $value->get('PUB_UBICACION'); ?></h6>
                <h3 class="card-title">
                  <a href="<?= site_url('/Zicaro/PublicacionDetalle/'); ?><?= $value->get('PUB_ID'); ?>">
                    <?= $value->get('PUB_TITULO'); ?>
                  </a>
                </h3>
                <p class="card-description">
                  <?= $value->get('PUB_DESC_C'); ?><br>
                  <a href="<?= site_url('/Zicaro/PublicacionDetalle/'); ?><?= $value->get('PUB_ID'); ?>" class="btn btn-round btn-small btn-primary">Leer Más</a>
                </p>
                <p class="author">
                  por: <b><span><?= $value->get('USU_NOMBRES'); ?></span></b>,
                  <?= $value->get('PUB_FECHA'); ?>
                  </a>
                </p>
              </div>
            </div>
          </div>
          <hr>
        <?php endif; ?>
      <?php endforeach; ?>
      <?= $Paginacion ?>

    <?php else: ?>
    <div class="alert alert-primary">
      <div class="alert-icon">
        <i class="material-icons">error_outline</i>
      </div>
      <b>:(</b>
      <p>Momentaneamente no contamos con PUBLICACIONES en esta seccion</p>
    </div>
    <?php endif; ?>

    </div>

  <div class="col-md-3">
    <a class="twitter-timeline" data-height="1500px" data-dnt="true" data-theme="light" data-link-color="#981CEB" href="https://twitter.com/zicaropapel">Zicaropapel</a>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
</div>
