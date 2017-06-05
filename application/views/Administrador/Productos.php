<div class="col-sm-12 col-md-6 pull-right">
  <a data-toggle="modal" data-target="#AgregarProducto" class="btn btn-fill btn-success btn-block pull-rigth">Nuevo Producto</a>
</div>
<?php if (isset($error)): ?>
  <?= var_dump($error); ?>
<?php endif; ?>
<div class="card">
    <div class="card-header card-header-icon" data-background-color="purple">
        <i class="fa fa-tags fa-2x"></i>
    </div>
    <div class="card-content">
        <h3 class="card-title">PRODUCTOS</h3>
        <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
        </div>
        <div class="material-datatables">
            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>NOMBRE</th>
                      <th>PRECIO</th>
                      <th>CATEGORIA</th>
                      <th>ESTADO</th>
                      <th class="text-right">ACCIONES</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>PRECIO</th>
                        <th>CATEGORIA</th>
                        <th>VISIBILIDAD</th>
                        <th class="text-right">ACCIONES</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($Productos as $key => $value): ?>
                      <tr>
                          <td><?= $value->get('PROD_ID'); ?></td>
                          <td><?= $value->get('PROD_NOMBRE'); ?></td>
                          <td><?= $value->get('PROD_PRECIO'); ?></td>
                          <td><?= $value->get('CAT_NOMBRE'); ?></td>

                          <?php if ($value->get('PROD_ESTADO') == 1): ?>
                          <td><a href="<?= site_url('/Administrador/CambiarEstado/1/');?><?=$value->get('PROD_ID');?>" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
                          <?php else: ?>
                          <td><a href="<?= site_url('/Administrador/CambiarEstado/2/');?><?=$value->get('PROD_ID');?>" class="btn btn-warning"><i class="fa fa-eye-slash"></i></a></td>
                          <?php endif; ?>

                          <td class="text-right">
                              <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-eye"></i></a>
                              <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-pencil"></i></a>
                          </td>
                      </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<!-- AGREGAR PRODUCTO Modal -->
  <div class="modal fade" id="AgregarProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="material-icons">clear</i>
                  </button>
              </div>
                <div class="modal-body">
                  <div class="col-sm-12">
                      <div class="card">
                          <form method="POST" action="<?= site_url('/Administrador/NuevoProducto'); ?>" class="form-horizontal" accept-charset="utf-8" enctype="multipart/form-data">
                              <div class="card-header card-header-text" data-background-color="purple">
                                  <h4 class="card-title">Nuevo Producto</h4>
                              </div>
                              <div class="card-content">
                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">Nombre</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input name="PROD_NOMBRE" type="text" class="form-control">
                                              <span class="help-block">Ingrese nombre asociado al nuevo producto.</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">Precio</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input name="PROD_PRECIO" type="text" class="form-control">
                                              <span class="help-block">Ingrese precio asociado al nuevo producto.</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">Categoria</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <select class="selectpicker" name="PROD_CAT_ID" data-style="select-with-transition" title="Single Select" data-size="7">
                                                <option disabled>Categoria</option>
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
                                                          <input type="radio" name="PROD_ESTADO" value="1"> VISIBLE
                                                      </label>
                                                  </div>
                                                  <div class="radio">
                                                      <label>
                                                          <input type="radio" name="PROD_ESTADO" value="2"> OCULTO
                                                      </label>
                                                  </div>
                                              </div>
                                              <span class="help-block">Ingrese estado asociado al nuevo producto.</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">Descripcion Corta</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <textarea name="PROD_DESC_C" class="form-control" minLength="20"  maxLength="200" rows="8" cols="80"></textarea>
                                              <span class="help-block">Ingrese una descripcion CORTA asociado al nuevo producto.</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">Descripcion Larga</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <textarea name="PROD_DESC_L" class="form-control" minLength="200"  maxLength="2000" rows="8" cols="80"></textarea>
                                              <span class="help-block">Ingrese una descripcion LARGA asociado al nuevo producto.</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">Imagen</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                  <div class="fileinput-new thumbnail">
                                                      <img src="" alt="...">
                                                  </div>
                                                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                  <div>
                                                      <span class="btn btn-primary btn-round btn-file">
                                                          <span class="fileinput-new">Seeccionar Imagen</span>
                                                          <span class="fileinput-exists">Cambiar Imagen</span>
                                                          <input type="file" name="PROD_IMAGEN" value="">
                                                      </span>
                                                      <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remover</a>
                                                  </div>
                                              </div>
                                              <span class="help-block">Ingrese imagen asociada al nuevo producto.</span>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                      </div>
                  </div>
                </div>

                <div class="modal-footer">
                  <a type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Cancelar</a>
                  <button type="submit" class="btn btn-info btn-simple">Agregar</button>
                </div>
              </form>

          </div>
      </div>
  </div>
<!--  / AGREGAR PRODUCTO Modal -->
