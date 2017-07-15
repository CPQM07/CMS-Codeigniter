<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">perm_identity</i>
            </div>
            <div class="card-content">
                <h4 class="card-title"><?= $Usuarios->get('USU_NOMBRES'); ?>
                    <small class="category">
                        <?php if ($Usuarios->get('USU_TIPO') == 0): ?>
                          ADMINISTRADOR
                        <?php else: ?>
                          COMMUNITY MANAGER
                        <?php endif; ?>
                    </small>
                </h4>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">RUT</label>
                                <input type="text" class="form-control" disabled value="<?= $Usuarios->get('USU_RUT');  ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">DV</label>
                                <input type="text" class="form-control" disabled value="<?= $Usuarios->get('USU_DV');  ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">NOMBRES</label>
                                <input type="text" class="form-control" value="<?= $Usuarios->get('USU_NOMBRES'); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">APELLIDOS</label>
                                <input type="text" class="form-control" value="<?= $Usuarios->get('USU_APELLIDOS'); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group label-floating">
                            <label class="control-label">BIOGRAFIA</label>
                              <textarea name="USU_BIO" rows="5" class="form-control" minLength="20"><?= $Usuarios->get('USU_BIO'); ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">CORREO</label>
                                <input type="text" class="form-control" value="<?= $Usuarios->get('USU_EMAIL');  ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">TELEFONO</label>
                                <input type="text" class="form-control" value="<?= $Usuarios->get('USU_TELEFONO');  ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">CONTRASEÑA</label>
                                <input type="password" class="form-control" value="<?= $Usuarios->get('USU_CLAVE');  ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">CONFIRMAR CONTRASEÑA</label>
                                <input type="password" class="form-control" value="">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-rose pull-right">Actualizar Perfil</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

</div>
