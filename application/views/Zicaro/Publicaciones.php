<div class="row">
      <?php foreach ($Publicaciones as $key => $value): ?>
        <?php if ($value->get('PUB_ESTADO') == 1): ?>
          <div class="col-md-4">
            <div class="card card-raised card-background" style="background-image: url('<?= base_url("Resources/images/Publicaciones/".$value->get('PUB_IMAGEN').".jpg") ?>')">
              <div class="card-content">
                <h6 class="category text-info"><?= $value->get('PUB_AUTOR'); ?></h6>
                <a href="">
                  <h3 class="card-title"><?= $value->get('PUB_TITULO'); ?></h3>
                </a>
                <p class="card-description">
                <span class="category text-info"><?= $value->get('PUB_DESC_C'); ?></span>
                </p>
                <h6 class="category text-info"><?= $value->get('PUB_FECHA'); ?></h6>
                <a href="<?= site_url('/Zicaro/PublicacionDetalle/'); ?><?= $value->get('PUB_ID'); ?>" class="btn btn-primary btn-round">
                  <i class="material-icons">format_align_left</i> Leer artículo
                </a>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
</div>
