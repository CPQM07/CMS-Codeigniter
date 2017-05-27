<div class="card">
  <form class="form-horizontal" action="<?= site_url('/Administrador/NuevaCategoria'); ?>" method="post">
        <div class="card-header card-header-text" data-background-color="purple">
            <h4 class="card-title">NUEVA CATEGORIA</h4>
        </div>

        <div class="card-content">
          <div class="row">
                <div class="col-sm-12 col-md-6 ">
                      <div class="card">
                          <div class="card-header card-header-icon" data-background-color="purple">
                              <i class="fa fa-header"></i>
                          </div>
                          <div class="card-content">
                              <h4 class="card-title">NOMBRE</h4>
                              <div class="form-group">
                                  <label class="label-control">Titulo</label>
                                  <input name="CAT[CAT_NOMBRE]" type="text" class="form-control" value>
                              </div>
                          </div>
                      </div>
                </div>

                <div class="col-sm-12 col-md-6 ">
                      <div class="card">
                          <div class="card-header card-header-icon" data-background-color="purple">
                              <i class="fa fa-header"></i>
                          </div>
                          <div class="card-content">
                              <h4 class="card-title">DESCRIPCION</h4>
                              <div class="form-group">
                                  <label class="label-control">Descripcion</label>
                                  <input name="CAT[CAT_DESC]" type="text" class="form-control" value>
                              </div>
                          </div>
                      </div>
                </div>

                <div class="col-sm-12 col-md-6 ">
                      <div class="card">
                        <div class="card-header card-header-icon" data-background-color="purple">
                            <i class="fa fa-certificate"></i>
                        </div>
                          <div class="card-content">
                              <div class="form-group">
                                  <label class="label-control">ESTADO</label>
                                  <div class="col-sm-10 checkbox-radios">
                                      <div class="radio">
                                          <label>
                                              <input type="radio" name="CAT[CAT_ESTADO]" value="1"> VISIBLE
                                          </label>
                                      </div>
                                      <div class="radio">
                                          <label>
                                              <input type="radio" name="CAT[CAT_ESTADO]" value="2"> OCULTO
                                          </label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>

            <div class="row">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-fill btn-block btn-success">Agregar</button>
              </div>
            </div>
        </div>
    </form>
</div>
