<div class="col-sm-12 col-md-6 pull-right">
  <a href="<?= site_url('/Administrador/AgregarUsuario'); ?>" class="btn btn-fill btn-success btn-block pull-rigth">Nuevo Usuario</a>
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
            <table id="datatables" class="table table-striped table-no-bordered table-hover table-responsive" cellspacing="0" width="100%" style="width:100%">
                <thead>
                    <tr>
                      <th>ID</th>
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
                        <th>ID</th>
                        <th>RUT</th>
                        <th>DV</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>CORREO</th>
                        <th>NUMERO</th>
                        <th>ESTADO</th>
                        <th class="text-right">ACCIONES</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($Usuarios as $key => $value): ?>
                      <tr>
                          <td><?= $value->get('USU_ID'); ?></td>
                          <td><?= $value->get('USU_RUT'); ?></td>
                          <td><?= $value->get('USU_DV'); ?></td>
                          <td><?= $value->get('USU_NOMBRES'); ?></td>
                          <td><?= $value->get('USU_APELLIDOS'); ?></td>
                          <td><?= $value->get('USU_EMAIL'); ?></td>
                          <td><?= $value->get('USU_TELEFONO'); ?></td>

                          <?php if ($value->get('USU_ESTADO') == 1): ?>
                          <td><a href="<?= site_url('/Administrador/CambiarEstado/7/');?><?=$value->get('USU_ID');?>" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
                          <?php else: ?>
                          <td><a href="<?= site_url('/Administrador/CambiarEstado/8/');?><?=$value->get('USU_ID');?>" class="btn btn-warning"><i class="fa fa-eye-slash"></i></a></td>
                          <?php endif; ?>

                          <td class="text-right">
                              <a href="<?= site_url('/Administrador/VerPerfil/');?><?=$value->get('USU_ID');?>" class="btn btn-warning btn-icon"><i class="fa fa-pencil "></i></a>
                          </td>
                      </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
