<div class="row">
  <div class="col-md-9">
      <?php foreach ($Publicaciones as $key => $value): ?>
        <?php if ($value->get('PUB_ESTADO') == 1): ?>
          <div class="col-md-6">
            <div class="card card-blog">
              <div class="card-image">
                <a href="<?= site_url('/Zicaro/PublicacionDetalle/'); ?><?= $value->get('PUB_ID'); ?>">
                <img class="img" src="<?= base_url("Resources/images/Publicaciones/".$value->get('PUB_IMAGEN')) ?>" />
                </a>
              </div>
              <div class="card-content">
                <h6 class="category text-success"><?= $value->get('PUB_UBICACION'); ?></h6>
                <h4 class="card-title">
                <a href="<?= site_url('/Zicaro/PublicacionDetalle/'); ?><?= $value->get('PUB_ID'); ?>"><?= $value->get('PUB_TITULO'); ?></a>
                </h4>
                <p class="card-description">
                <?= $value->get('PUB_DESC_C'); ?>
                </p>
                <a href="<?= site_url('/Zicaro/PublicacionDetalle/'); ?><?= $value->get('PUB_ID'); ?>" class="btn btn-round btn-small btn-primary">Leer Más</a>
                <div class="footer">
                  <div class="author">
                    <a href="<?= site_url('/Zicaro/PublicacionDetalle/'); ?><?= $value->get('PUB_ID'); ?>">
                    <img src="<?= base_url('Resources/images/ZicaroPapel/LogoZicaroTransparent.png'); ?>" class="avatar img-raised">
                    <span><?= $value->get('USU_NOMBRES'); ?></span>
                    </a>
                  </div>
                  <div class="stats">
                    <i class="material-icons">schedule</i><?= $value->get('PUB_FECHA'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  <div class="col-md-3">
    <a class="twitter-timeline" data-height="1500px" data-dnt="true" data-theme="light" data-link-color="#981CEB" href="https://twitter.com/zicaropapel">Zicaropapel</a>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
</div>
