<div class="col-sm-12 col-md-6 pull-right">
  <a data-toggle="modal" data-target="#AgregarUsuario" class="btn btn-fill btn-success btn-block pull-rigth">Nuevo Usuario</a>
</div>
<?php if (isset($error)): ?>
  <?= var_dump($error); ?>
<?php endif; ?>
<div class="card">
    <div class="card-header card-header-icon" data-background-color="purple">
        <i class="fa fa-tags fa-2x"></i>
    </div>
    <div class="card-content">
        <h3 class="card-title">USUARIOS</h3>
        <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
        </div>
        <div class="material-datatables">
            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                    <tr>
                      <th>RUT</th>
                      <th>DV</th>
                      <th>NOMBRES</th>
                      <th>APELLIDOS</th>
                      <th>CORREO</th>
                      <th>NUMERO</th>
                      <th>ESTADO</th>
                      <th class="text-right">ACCIONES</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>RUT</th>
                        <th>DV</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>CORREO</th>
                        <th>NUMERO</th>
                        <th>VISIBILIDAD</th>
                        <th class="text-right">ACCIONES</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($Usuarios as $key => $value): ?>
                      <tr>
                          <td><?= $value->get('USU_RUT'); ?></td>
                          <td><?= $value->get('USU_DV'); ?></td>
                          <td><?= $value->get('USU_NOMBRES'); ?></td>
                          <td><?= $value->get('USU_APELLIDOS'); ?></td>
                          <td><?= $value->get('USU_EMAIL'); ?></td>
                          <td><?= $value->get('USU_TELEFONO'); ?></td>

                          <?php if ($value->get('USU_ESTADO') == 1): ?>
                          <td><a href="<?= site_url('/Administrador/CambiarEstado/7/');?><?=$value->get('USU_RUT');?>" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
                          <?php else: ?>
                          <td><a href="<?= site_url('/Administrador/CambiarEstado/8/');?><?=$value->get('USU_RUT');?>" class="btn btn-warning"><i class="fa fa-eye-slash"></i></a></td>
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
  <div class="modal fade" id="AgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                  <h4 class="card-title">Nuevo Usuario</h4>
                              </div>
                              <div class="card-content">
                                  <div class="row">
                                      <label class="col-sm-3 label-on-left">Rut</label>
                                      <div class="col-sm-5">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input name="USU_RUT" type="text" placeholder="11111111" class="form-control">
                                              <span class="help-block">Ingrese RUT del nuevo Usuario [SIN PUNTOS NI GUION]</span>
                                          </div>
                                      </div>
                                      <label class="col-sm-1 label-on-left">-</label>
                                      <div class="col-sm-3">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input name="USU_PRECIO" type="text" placeholder="1" class="form-control">
                                              <span class="help-block">Ingrese DV del nuevo Usuario.</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-3 label-on-left">Nombres</label>
                                      <div class="col-sm-9">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input name="USU_NOMBRE" type="text" class="form-control">
                                              <span class="help-block">Ingrese NOMBRES del nuevo Usuario</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-3 label-on-left">Apellidos</label>
                                      <div class="col-sm-9">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input name="USU_NOMBRE" type="text" class="form-control">
                                              <span class="help-block">Ingrese APELLIDOS del nuevo Usuario</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-3 label-on-left">Correo</label>
                                      <div class="col-sm-9">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input name="USU_NOMBRE" type="email" class="form-control">
                                              <span class="help-block">Ingrese CORREO del nuevo Usuario</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-3 label-on-left">Contraseña</label>
                                      <div class="col-sm-9">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input name="USU_NOMBRE" type="password" class="form-control">
                                              <span class="help-block">Ingrese CONTRASEÑA del nuevo Usuario</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-3 label-on-left">Reingrese la Contraseña</label>
                                      <div class="col-sm-9">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input name="USU_NOMBRE" type="password" class="form-control">
                                              <span class="help-block">Ingrese NUEVAMENTE LA CONTRASEÑA del nuevo Usuario</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-3 label-on-left">Telefono</label>
                                      <div class="col-sm-9">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input name="USU_NOMBRE" type="text" class="form-control">
                                              <span class="help-block">Ingrese NUMERO TELEFONO del nuevo Usuario</span>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="row">
                                      <label class="col-sm-3 label-on-left">Estado</label>
                                      <div class="col-sm-9">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <div class="col-sm-9 checkbox-radios">
                                                  <div class="radio">
                                                      <label>
                                                          <input type="radio" name="USU_ESTADO" value="1"> VISIBLE
                                                      </label>
                                                  </div>
                                                  <div class="radio">
                                                      <label>
                                                          <input type="radio" name="USU_ESTADO" value="2"> OCULTO
                                                      </label>
                                                  </div>
                                              </div>
                                              <span class="help-block">Ingrese estado asociado al nuevo producto.</span>
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
