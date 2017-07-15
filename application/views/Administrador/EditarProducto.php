<form method="POST" action="<?= site_url('/Administrador/ActualizarProducto/'); ?><?= $Productos->get('PROD_ID'); ?>" class="form-horizontal" accept-charset="utf-8" enctype="multipart/form-data">
  <div class="card">
          <div class="card-header card-header-text" data-background-color="purple">
              <h4 class="card-title">Actualizar Producto</h4>
          </div>

          <div class="card-content">

            <div class="row">
                <label class="col-sm-2 label-on-left">ID</label>
                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input name="PROD_NOMBRE" type="text" class="form-control" disabled value="<?= $Productos->get('PROD_ID'); ?>">
                        <span class="help-block">ID del producto</span>
                    </div>
                </div>
            </div>
              <div class="row">
                  <label class="col-sm-2 label-on-left">Nombre</label>
                  <div class="col-sm-10">
                      <div class="form-group label-floating is-empty">
                          <label class="control-label"></label>
                          <input name="PROD_NOMBRE" type="text" class="form-control" value="<?= $Productos->get('PROD_NOMBRE'); ?>">
                          <span class="help-block">Ingrese nombre asociado al nuevo producto.</span>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <label class="col-sm-2 label-on-left">Precio</label>
                  <div class="col-sm-10">
                      <div class="form-group label-floating is-empty">
                          <label class="control-label"></label>
                          <input name="PROD_PRECIO" type="text" class="form-control" value="<?= $Productos->get('PROD_PRECIO'); ?>">
                          <span class="help-block">Ingrese precio asociado al nuevo producto.</span>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <label class="col-sm-2 label-on-left">Categoria</label>
                  <div class="col-sm-10">
                      <div class="form-group label-floating is-empty">
                          <label class="control-label"></label>
                          <select class="selectpicker" name="PROD_CAT_ID" id="PROD_CAT_ID" data-style="select-with-transition" title="Single Select" data-size="7">
                            <?php foreach ($Categorias as $key => $value): ?>
                              <?php if ( $value->get('CAT_ID') == $Productos->get('PROD_CAT_ID') ): ?>
                                <option selected value="<?= $value->get('CAT_ID'); ?>"><?= $value->get('CAT_NOMBRE'); ?> - SELECCIONADA</option>
                              <?php endif; ?>
                              <option value="<?= $value->get('CAT_ID'); ?>"><?= $value->get('CAT_NOMBRE'); ?></option>
                            <?php endforeach; ?>
                          </select>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <label class="col-sm-2 label-on-left">Descripcion</label>
                  <div class="col-sm-10">
                      <div class="form-group label-floating is-empty">
                          <label class="control-label"></label>
                          <textarea name="PROD_DESC" id="PROD_DESC" class="form-control" maxLength="2000" rows="8" cols="80"><?= $Productos->get('PROD_DESC'); ?></textarea>
                          <span class="help-block">Ingrese una descripcion asociado al nuevo producto.</span>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <label class="col-sm-2 label-on-left">Imagen</label>
                  <div class="col-sm-10" style="width: 300px">
                    <img src="<?= base_url('Resources/images/Productos/'); ?><?= $Productos->get('PROD_IMAGEN'); ?>" alt="">
                  </div>
              </div>

          </div>


          <div class="row">
            <div class="col-sm-12 col-md-6">
              <a class="btn btn-pill btn-block btn-danger" href="<?= site_url('/Administrador/Productos'); ?>">Cancelar</a>
            </div>
            <div class="col-sm-12 col-md-6">
              <button class="btn btn-pill btn-block btn-primary" type="submit" name="button">Agregar</button>
            </div>
          </div>
  </div>
</form>
