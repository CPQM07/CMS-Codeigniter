  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="card">
          <img src="<?= base_url('/Resources/images/Productos/'); ?><?= $Producto->get('PROD_IMAGEN'); ?>">
        </div>
      </div>

      <div class="col-sm-12 col-md-8">
        <h3><?= $Producto->get('PROD_NOMBRE'); ?></h3>
        <ul class="nav nav-pills nav-pills-rose">
          <li class="active"><a href="#DESCRIPCION" data-toggle="tab">Descripción</a></li>
          <li><a href="#ESPECIFICACIONES" data-toggle="tab">Especificaciones</a></li>
        </ul>

          <div class="tab-content tab-space">
              <div class="tab-pane active" id="DESCRIPCION">
                  <h4 class="card-description"><?= $Producto->get('PROD_DESC'); ?></h4>
                  <div class="footer">
                    <hr>
                      <div class="price-container">
                        <span class="text-rose"><h4>$ <?= $Producto->get('PROD_PRECIO'); ?></h4></span>
                      </div>
                    <hr>
                    <div class="stats pull-left">
                      <span class="text-rose"><i class="fa fa-barcode"></i> SKU: PROD-<?= $Producto->get('CAT_ID'); ?>-<?= $Producto->get('PROD_ID'); ?></span>
                    </div>
                    <div class="stats pull-right">
                      <span class="text-rose"><?= $Producto->get('CAT_NOMBRE'); ?> - <span class="flag-icon flag-icon-cl"></span></span>
                    </div>
                  </div>
              </div>

              <div class="tab-pane" id="ESPECIFICACIONES">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <tr>
                       <td>Alto (cm)</td>
                       <td>0.5</td>
                     </tr>
                     <tr>
                       <td>Ancho (cm)</td>
                       <td>1</td>
                     </tr>
                     <tr>
                       <td>Largo (cm)</td>
                       <td>68</td>
                     </tr>
                     <tr>
                       <td>Color </td>
                       <td>DISPONIBLE STOCK</td>
                     </tr>
                     <tr>
                       <td>Material</td>
                       <td>PAPEL</td>
                     </tr>
                     <tr>
                       <td>Garantía</td>
                       <td>(*)</td>
                     </tr>
                  </table>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-6">
          <a data-href="http://ZicaroPapel.cl/Zicaro/Producto/<?= $Producto->get('PROD_ID'); ?>" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2FZicaroPapel.cl%2FZicaro%2FProducto%2F<?= $Producto->get('PROD_ID'); ?>&amp;src=sdkpreparse"
            data-mobile-iframe="true" target="_blank" class="btn btn-block btn-round btn-info">
            <i class="fa fa-facebook"></i> COMPARTIR
          </a>
        </div>

        <div class="col-sm-12 col-md-6">
          <a href="<?= site_url('/Zicaro/Catalogo'); ?>" class="btn btn-block btn-round btn-rose"><i class="fa fa-chevron-left"></i> VOLVER</a>
        </div>
      </div>

  </div>


<!--GARANTIA-->
<div class="features text-center">
  <div class="row">

    <div class="col-md-6">
      <div class="info">
        <div class="icon icon-info">
          <i class="material-icons">local_shipping</i>
        </div>
        <h4 class="info-title">CHILEXPRESS</h4>
          <p>
            Despacho <strong><em> GRATUITO </em></strong> por compras superiores a <strong>$60.000</strong><br>
            Recargo de <strong><em>$3.000</em></strong> por compras inferiores a <strong>$60.000</strong>
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="info">
          <div class="icon icon-success">
            <i class="material-icons">verified_user</i>
          </div>
          <h4 class="info-title"><span class="btn-tooltip" data-toggle="tooltip" data-placement="right" title="Fallas del producto, no asociadas al mal uso ni manipulacion de estos." data-container="body">GARANTIA *</span></h4>
            <p>
                6 Meses - <strong><em>CARTERAS</em></strong> <br>
                3 Meses - <strong><em>JOYAS</em></strong>
            </p>

        </div>
      </div>

    </div>
  </div>
<!--GARANTIA-->

<hr>
<div class="related-products">
  <h3 class="title text-center">Usted también podría estar interesado en:</h3>
  <br><br>
  <div class="row">
    <?php foreach ($Interes as $key => $value): ?>
    <div class="col-sm-6 col-md-3">
      <div class="card card-product">
        <div class="card-image">
          <a href="<?= site_url('/Zicaro/Producto/'); ?><?= $value->get('PROD_ID'); ?>">
          <img src="<?= base_url('Resources/images/Productos/'); ?><?= $value->get('PROD_IMAGEN'); ?>"/>
          </a>
        </div>

        <div class="card-content">
          <h6 class="category text-rose"></h6>
          <h4 class="card-title">
          <a href=""><?= $value->get('PROD_NOMBRE'); ?></a>
          </h4>
          <div class="card-description">
            <?= $value->get('PROD_DESC'); ?>
          </div>
          <div class="footer">
            <div class="price">
              <h4><span class="text-primary">$ </span><span class="text-rose"><?= $value->get('PROD_PRECIO'); ?></span></h4>
            </div>
            <div class="stats">
              <span class="flag-icon flag-icon-cl"></span>
            </div>
            <a href="<?= site_url('/Zicaro/Producto/'); ?><?= $value->get('PROD_ID'); ?>" rel="tooltip" data-placement="bottom" title="VER" class="btn btn-block btn-round btn-rose"><i class="fa fa-eye"></i></a>
          </div>
        </div>

      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
