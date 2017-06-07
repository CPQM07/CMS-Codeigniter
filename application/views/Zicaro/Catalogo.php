<div class="row">
    <div class="col-md-3">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">

          <div class="panel-heading" role="tab" id="heading">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse" aria-expanded="true" aria-controls="collapse">
            <h4 class="panel-title">
            Categorías
            <i class="material-icons">keyboard_arrow_down</i>
            </h4>
          </a>
          </div>

          <div id="collapse" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading">
            <div class="panel-body">
              <?php foreach ($Categorias as $key => $value): ?>
                <a class="btn btn-block btn-default btn-sm btn-round" href=""><?= $value->get('CAT_NOMBRE'); ?></a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-9">
      <div class="row">
        <?php foreach ($Productos as $key => $value): ?>
          <?php if ($value->get('PROD_ESTADO') == 1): ?>
            <div class="col-sm-4">
              <div class="card card-blog">
                <div class="card-image">
                  <img src="<?= base_url("Resources/images/Productos/").$value->get('PROD_IMAGEN').".jpg" ?>" alt="">
                </div>

                <div class="card-content">
                    <h6 class="category text-rose"> <span><i class="fa fa-dollar"></i></span> <?= $value->get('PROD_PRECIO'); ?></h6>
                    <h4 class="card-title">
                    <?= $value->get('PROD_NOMBRE'); ?>
                    </h4>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php endforeach; ?>
      </div>
    </div>

  </div>
