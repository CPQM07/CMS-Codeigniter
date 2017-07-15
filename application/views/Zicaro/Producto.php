<div class="blogs-4" id="blogs-4">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="card card-blog">
          <div class="card-image">
            <a href="">
            <img src="<?= base_url('/Resources/images/Productos/'); ?><?= $Producto->get('PROD_IMAGEN'); ?>">
            </a>
          </div>
          <div class="card-content">
            <h6 class="category text-info"><?= $Producto->get('CAT_NOMBRE'); ?></h6>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-8">
        <div class="card card-nav-tabs card-plain">
          <div class="header header-primary">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="active"><a href="#DESCRIPCION" data-toggle="tab">Descripción</a></li>
                  <li><a href="#ESPECIFICACIONES" data-toggle="tab">Especificaciones</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-content">
            <div class="tab-content text-center">
              <div class="tab-pane active" id="DESCRIPCION">
                <h5><?= $Producto->get('PROD_DESC'); ?></h5>
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
                       <td>60 DIAS</td>
                     </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
          <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
      </div>
    </div>

    <div class="col-md-6">
      <div class="info">
        <div class="icon icon-success">
          <i class="material-icons">verified_user</i>
        </div>
        <h4 class="info-title">GARANTIA</h4>
          <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
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
          <img src="<?= base_url('Resources/images/Productos/'); ?><?= $Producto->get('PROD_IMAGEN'); ?>"/>
          </a>
        </div>

        <div class="card-content">
          <h6 class="category text-rose"></h6>
          <h4 class="card-title">
          <a href=""><?= $Producto->get('PROD_NOMBRE'); ?></a>
          </h4>
          <div class="card-description">
            <?= $Producto->get('PROD_DESC'); ?>
          </div>
          <div class="footer">
            <div class="price">
              <h4><span class="text-primary">$ </span><span class="text-rose"><?= $Producto->get('PROD_PRECIO'); ?></span></h4>
            </div>
            <div class="stats">
              <span class="flag-icon flag-icon-cl"></span>
            </div>
            <a href="<?= site_url('/Zicaro/Producto/'); ?><?= $value->get('PROD_ID'); ?>" rel="tooltip" data-placement="bottom" title="VER" class="btn btn-block btn-primary"><i class="fa fa-eye"></i></a>
          </div>
        </div>

      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
