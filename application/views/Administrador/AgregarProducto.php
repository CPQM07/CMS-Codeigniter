<form method="POST" action="<?= site_url('/Administrador/NuevoProducto'); ?>" class="form-horizontal" accept-charset="utf-8" enctype="multipart/form-data">
  <div class="card">
          <div class="card-header card-header-text" data-background-color="purple">
              <h4 class="card-title">Nuevo Producto</h4>
          </div>
          <?php if (validation_errors()): ?>
          <div class="container">
            <div class="alert alert-primary alert-with-icon">
                <i class="material-icons" data-notify="icon">notifications</i>
                <button type="button" aria-hidden="true" class="close">
                    <i class="material-icons">close</i>
                </button>
                <span data-notify="message">
                  <?= validation_errors(); ?>
                </span>
            </div>
          </div>
          <?php endif; ?>
          <div class="card-content">
              <div class="row">
                  <label class="col-sm-2 label-on-left">Nombre</label>
                  <div class="col-sm-10">
                      <div class="form-group label-floating is-empty">
                          <label class="control-label"></label>
                          <input name="PROD_NOMBRE" id="PROD_NOMBRE"  type="text" class="form-control" value="<?= set_value('PROD_NOMBRE'); ?>">
                          <span class="help-block">Ingrese nombre asociado al nuevo producto.</span>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <label class="col-sm-2 label-on-left">Precio</label>
                  <div class="col-sm-10">
                      <div class="form-group label-floating is-empty">
                          <label class="control-label"></label>
                          <input name="PROD_PRECIO" id="PROD_PRECIO" type="text" class="form-control" value="<?= set_value('PROD_PRECIO'); ?>">
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
                            <option disabled selected>Seleccione Categoria asociada</option>
                              <?php foreach ($Categorias as $key => $value): ?>
                                <option value="<?= $value->get('CAT_ID'); ?>"><?= $value->get('CAT_NOMBRE'); ?></option>
                              <?php endforeach; ?>
                          </select>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <label class="col-sm-2 label-on-left">Estado</label>
                  <div class="col-sm-10">
                      <div class="form-group label-floating is-empty">
                          <label class="control-label"></label>
                          <div class="col-sm-10 checkbox-radios">
                              <div class="radio">
                                  <label>
                                      <input type="radio" name="PROD_ESTADO" id="PROD_ESTADO" value="1"> VISIBLE
                                  </label>
                              </div>
                              <div class="radio">
                                  <label>
                                      <input type="radio" name="PROD_ESTADO" id="PROD_ESTADO" value="0"> OCULTO
                                  </label>
                              </div>
                          </div>
                          <span class="help-block">Ingrese estado asociado al nuevo producto.</span>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <label class="col-sm-2 label-on-left">Descripcion</label>
                  <div class="col-sm-10">
                      <div class="form-group label-floating is-empty">
                          <label class="control-label"></label>
                          <textarea name="PROD_DESC" id="PROD_DESC" class="form-control" maxLength="2000" rows="8" cols="80"><?= set_value('PROD_DESC'); ?></textarea>
                          <span class="help-block">Ingrese una descripcion asociado al nuevo producto.</span>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <label class="col-sm-2 label-on-left">Imagen</label>
                  <div class="col-sm-10">
                      <div class="form-group label-floating is-empty">
                          <label class="control-label"></label>
                          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                              <div class="fileinput-preview fileinput-exists thumbnail"></div>
                              <div>
                                  <span class="btn btn-primary btn-round btn-file">
                                      <span class="fileinput-new">Seeccionar Imagen</span>
                                      <span class="fileinput-exists">Cambiar Imagen</span>
                                      <input type="file" name="PROD_IMAGEN">
                                  </span>
                                  <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remover</a>
                              </div>
                          </div>
                          <span class="help-block">Ingrese imagen asociada al nuevo producto.</span>
                      </div>
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
