<div class="col-sm-12 col-md-6 pull-right">
  <a href="<?= site_url('/Administrador/AgregarProducto'); ?>" class="btn btn-fill btn-success btn-block pull-rigth">Nuevo Producto</a>
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
            <table id="datatables" class="table table-striped table-no-bordered table-hover table-responsive" cellspacing="0" width="100%" style="width:100%">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>NOMBRE</th>
                      <th>PRECIO</th>
                      <th>CATEGORIA</th>
                      <th>VISIBILIDAD</th>
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
                          <td><a href="<?= site_url('/Administrador/CambiarEstado/2/');?><?=$value->get('PROD_ID');?>" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
                          <?php else: ?>
                          <td><a href="<?= site_url('/Administrador/CambiarEstado/1/');?><?=$value->get('PROD_ID');?>" class="btn btn-warning"><i class="fa fa-eye-slash"></i></a></td>
                          <?php endif; ?>

                          <td class="text-right">
                              <a href="<?= site_url('/Administrador/EditarProducto/');?><?=$value->get('PROD_ID');?>" class="btn btn-warning btn-icon"><i class="fa fa-pencil"></i></a>
                          </td>
                      </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
