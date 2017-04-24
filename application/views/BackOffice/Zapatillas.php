<div class="row">
  <div class="col-sm-12 center">
      <a href="<?= site_url('/BackOffice/newShoes') ?>" class="btn btn-dark btn-block btn-round">NUEVA ZAPATILLA</a>
  </div>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="">
            <i class='fa fa-table black'></i>
        </div>
        <div class="card-content">
            <h4 class="card-title">Articulos</h4>
            <div class="toolbar">
                <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <div class="material-datatables">
                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Categoria</th>
                            <th>Precio</th>
                            <th class="disabled-sorting text-right">Acccion</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Categoria</th>
                            <th>Precio</th>
                            <th class="text-right">Accion</th>
                        </tr>
                    </tfoot>
                    <tbody>
                      <?php foreach ($Zapatillas as $key => $value): ?>
                        <td><?= $value->get('zapatilla_id') ?></td>
                        <td><?= $value->get('marca_nombre') ?></td>
                        <td><?= $value->get('zapatilla_modelo') ?></td>
                        <td><?= $value->get('categoria_nombre') ?></td>
                        <td><?= $value->get('zapatilla_precio') ?></td>
                        <td class="text-right">
                            <a href="#" class="btn btn-simple btn-info btn-icon like"><i class='fa fa-eye'></i></a>
                            <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class='fa fa-pencil'></i></a>
                            <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class='fa fa-remove'></i></a>
                        </td>
                      <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end content-->
    </div>
    <!--  end card  -->
</div>
<!-- end col-md-12 -->
