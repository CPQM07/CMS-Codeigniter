<form method="POST" action="<?= site_url('/Administrador/NuevoUsuario'); ?>" class="form-horizontal" accept-charset="utf-8" enctype="multipart/form-data">
  <div class="card">
          <div class="card-header card-header-text" data-background-color="purple">
              <h4 class="card-title">Nuevo Usuario</h4>
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
                <label class="col-sm-3 label-on-left">Rut</label>
                <div class="col-sm-5">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input name="USU_RUT" id="USU_RUT" type="text" placeholder="11111111" class="form-control" value="<?= set_value('USU_RUT'); ?>">
                        <span class="help-block">Ingrese RUT del nuevo Usuario [SIN PUNTOS NI GUION]</span>
                    </div>
                </div>
                <label class="col-sm-1 label-on-left">-</label>
                <div class="col-sm-3">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input name="USU_DV" id="USU_DV" type="text" placeholder="1" class="form-control" value="<?= set_value('USU_DV'); ?>">
                        <span class="help-block">Ingrese DV del nuevo Usuario.</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 label-on-left">Tipo</label>
                <div class="col-sm-9">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <select class="selectpicker" name="USU_TIPO" id="USU_TIPO" data-style="select-with-transition" title="Single Select" data-size="7">
                          <option disabled selected>Seleccione Tipo de Usuario asociado</option>
                              <option value="0">Administrador</option>
                              <option value="1">Community Manager</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 label-on-left">Nombres</label>
                <div class="col-sm-9">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input name="USU_NOMBRES" id="USU_NOMBRES" type="text" class="form-control" value="<?= set_value('USU_NOMBRES'); ?>">
                        <span class="help-block">Ingrese NOMBRES del nuevo Usuario</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 label-on-left">Apellidos</label>
                <div class="col-sm-9">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input name="USU_APELLIDOS" id="USU_APELLIDOS" type="text" class="form-control" value="<?= set_value('USU_APELLIDOS'); ?>">
                        <span class="help-block">Ingrese APELLIDOS del nuevo Usuario</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 label-on-left">Biografia</label>
                <div class="col-sm-9">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <textarea name="USU_BIO" id="USU_BIO" rows="5" class="form-control" minLength="20"><?= set_value('USU_BIO'); ?></textarea>
                        <span class="help-block">Ingrese BIOGRAFIA nuevo Usuario</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 label-on-left">Correo</label>
                <div class="col-sm-9">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input name="USU_EMAIL" id="USU_EMAIL" type="email" class="form-control" value="<?= set_value('USU_EMAIL'); ?>">
                        <span class="help-block">Ingrese CORREO del nuevo Usuario</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 label-on-left">Telefono</label>
                <div class="col-sm-9">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input name="USU_TELEFONO" id="USU_TELEFONO" type="text" class="form-control" value="<?= set_value('USU_TELEFONO'); ?>">
                        <span class="help-block">Ingrese NUMERO TELEFONO del nuevo Usuario</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 label-on-left">Contraseña</label>
                <div class="col-sm-9">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input name="USU_CLAVE" type="password" class="form-control">
                        <span class="help-block">Ingrese CONTRASEÑA del nuevo Usuario</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-3 label-on-left">Reingrese la Contraseña</label>
                <div class="col-sm-9">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input name="USU_CLAVE_2" type="password" class="form-control">
                        <span class="help-block">Ingrese NUEVAMENTE LA CONTRASEÑA del nuevo Usuario</span>
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
                                    <input type="radio" name="USU_ESTADO" value="0"> OCULTO
                                </label>
                            </div>
                        </div>
                        <span class="help-block">Ingrese estado asociado al nuevo producto.</span>
                    </div>
                </div>
            </div>
          </div>

          </div>
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <a class="btn btn-pill btn-block btn-danger" href="<?= site_url('/Administrador/Usuarios'); ?>">Cancelar</a>
            </div>
            <div class="col-sm-12 col-md-6">
              <button class="btn btn-pill btn-block btn-primary" type="submit" name="button">Agregar</button>
            </div>
          </div>
</form>
