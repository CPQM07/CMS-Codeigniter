<div class="col-sm-12">
    <div class="card">
        <div class="card-content">
        <?php foreach ($Marcas as $key => $value) :?>
          <div class="col-sm-12 col-md-3">
              <div class="card card-pricing card-raised">
                  <div class="content">
                    <span class="blue-text"><?=$value->get('zapatilla_modelo')?></span>
                      <div class="icon icon-dark">
                          <img class="responsive-img" src='<?=base_url("Resources/images/Modelos/ZapatillaPortada-".$value->get("zapatilla_id")).".jpg"?>'>
                      </div>
                      <h3 class="card-title"><span class="text-dark"><?=$value->get('marca_nombre')?></h3>
                      <p class="card-description">
                          <i class='fa fa-dollar'></i><span> <?=$value->get('zapatilla_precio')?>
                      </p>
                  </div>
              </div>
          </div>
        <?php endforeach ?>
    </div>
  </div>
</div>
