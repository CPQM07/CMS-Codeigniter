<div class="row">
  <div class="col-sm-12 center">
      <a class="btn btn-dark btn-block btn-round" data-toggle="modal" data-target="#myModal">NUEVA MARCA</a>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">INGRESE NOMBRE NUEVA MARCA</h4>
      </div>
      <div class="modal-body">
          <div class="form-group label-floating is-empty">
              <label class="control-label"></label>
              <input type="email" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-round" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-dark btn-round">Guardar</button>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-12">
    <div class="card">
        <div class="card-content">
        <?php foreach ($Marcas as $key => $value) :?>
        <div class="col-sm-12 col-md-3">
            <div class="card card-pricing card-raised">
                <div class="content">
                    <h6 class="category">DIRTYllas</h6>
                    <div class="icon icon-dark">
                        <i class="fa fa-tags"></i>
                    </div>
                    <h3 class="card-title"><span class="text-dark">CHILE</h3>
                    <p class="card-description">
                        <?= $value->get('marca_nombre') ?>
                    </p>
                    <a href="<?=site_url('BackOffice/showByBrands/'.$value->get('marca_nombre'))?>" class="btn btn-dark btn-round">Ver Zapatillas</a>
                </div>
            </div>
        </div>
      <?php endforeach ?>
        </div>
      </div>
    </div>
