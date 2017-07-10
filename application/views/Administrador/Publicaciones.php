<div class="col-sm-12 col-md-6 pull-right">
  <a href="<?= site_url('/Administrador/AgregarPublicacion'); ?>" class="btn btn-fill btn-success btn-block pull-rigth">Nueva Publicacion</a>
</div>

<div class="card">
    <div class="card-header card-header-icon" data-background-color="purple">
        <i class="fa fa-tags fa-2x"></i>
    </div>

    <div class="card-content">
        <h3 class="card-title">PUBLICACIONES</h3>
        <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
        </div>
        <div class="material-datatables">
            <table id="datatables" class="table table-striped table-no-bordered table-hover table-responsive" cellspacing="0" width="100%" style="width:100%">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>TITULO</th>
                      <th>FECHA</th>
                      <th>AUTOR</th>
                      <th>VISIBILIDAD</th>
                      <th class="text-right">ACCIONES</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>TITULO</th>
                      <th>FECHA</th>
                      <th>AUTOR</th>
                      <th>VISIBILIDAD</th>
                      <!--<th class="text-right">ACCIONES</th>-->
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($Publicaciones as $key => $value): ?>
                      <tr>
                          <td><?= $value->get('PUB_ID'); ?></td>
                          <td><?= $value->get('PUB_TITULO'); ?></td>
                          <td><?= $value->get('PUB_FECHA'); ?></td>
                          <td><?= $value->get('PUB_AUTOR'); ?></td>

                          <?php if ($value->get('PUB_ESTADO') == 1): ?>
                          <td><a href="<?= site_url('/Administrador/CambiarEstado/5/');?><?=$value->get('PUB_ID');?>" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
                          <?php else: ?>
                          <td><a href="<?= site_url('/Administrador/CambiarEstado/6/');?><?=$value->get('PUB_ID');?>" class="btn btn-warning"><i class="fa fa-eye-slash"></i></a></td>
                          <?php endif; ?>

                          <!--<td class="text-right">
                              <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-eye"></i></a>
                              <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-pencil"></i></a>
                          </td>-->
                      </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
