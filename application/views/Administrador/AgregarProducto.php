<div class="card">
  <form class="form-horizontal" action="<?= site_url('/Administrador/NuevoProducto'); ?>" method="post">
        <div class="card-header card-header-text" data-background-color="purple">
            <h4 class="card-title">NUEVO PRODUCTO</h4>
        </div>

        <div class="card-content">
          <div class="row">
                <div class="col-sm-12 col-md-3">
                      <div class="card">
                          <div class="card-header card-header-icon" data-background-color="purple">
                              <i class="fa fa-header"></i>
                          </div>
                          <div class="card-content">
                              <h4 class="card-title">NOMBRE</h4>
                              <div class="form-group">
                                  <input name="PROD[PROD_NOMBRE]" type="text" class="form-control" value>
                              </div>
                          </div>
                      </div>
                </div>

                <div class="col-sm-12 col-md-3">
                      <div class="card">
                          <div class="card-header card-header-icon" data-background-color="purple">
                              <i class="fa fa-dollar"></i>
                          </div>
                          <div class="card-content">
                              <h4 class="card-title">PRECIO</h4>
                              <div class="form-group">
                                  <input name="PROD[PROD_PRECIO]" type="text" class="form-control" value>
                              </div>
                          </div>
                      </div>
                </div>

                <div class="col-sm-12 col-md-3">
                      <div class="card">
                          <div class="card-header card-header-icon" data-background-color="purple">
                              <i class="fa fa-tag"></i>
                          </div>
                          <div class="card-content">
                                <h4 class="card-title">CATEGORIA</h4>
                              <div class="form-group">
                                <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                                  <option disabled selected>Categoria</option>
                                    <?php foreach ($Categorias as $key => $value): ?>
                                      <option name="PROD[PROD_CAT_ID]" value="<?= $value->get('CAT_ID'); ?>"><?= $value->get('CAT_NOMBRE'); ?></option>
                                    <?php endforeach; ?>
                                </select>
                              </div>
                          </div>
                      </div>
                </div>

                <div class="col-sm-12 col-md-3">
                      <div class="card">
                          <div class="card-header card-header-icon" data-background-color="purple">
                              <i class="fa fa-certificate"></i>
                          </div>
                          <div class="card-content">
                                <h4 class="card-title">ESTADO</h4>
                              <div class="form-group">
                                  <div class="col-sm-10 checkbox-radios">
                                      <div class="radio">
                                          <label>
                                              <input type="radio" name="PROD[PROD_ESTADO]" value="1"> VISIBLE
                                          </label>
                                      </div>
                                      <div class="radio">
                                          <label>
                                              <input type="radio" name="PROD[PROD_ESTADO]" value="2"> OCULTO
                                          </label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>
          </div>

          <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="purple">
                            <i class="fa fa-align-center"></i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">DESCRIPCION CORTA</h4>
                            <div class="form-group">
                                <label class="label-control">Descripcion [ min: 20 caracteres ]</label>
                                <textarea name="PROD[PROD_DESC_C]" class="form-control" minLength="20"  maxLength="200" rows="8" cols="80"></textarea>
                            </div>
                        </div>
                    </div>
                  </div>

                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="purple">
                            <i class="fa fa-align-center"></i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">DESCRIPCION LARGA</h4>
                            <div class="form-group">
                                <label class="label-control">Descripcion [ min: 200 caracteres ]</label>
                                <textarea name="PROD[PROD_DESC_L]" class="form-control" minLength="200"  maxLength="2000" rows="8" cols="80"></textarea>
                            </div>
                        </div>
                    </div>
                  </div>
          </div>

          <div class="row">
            <div class="col-sm-12 col-md-6 ">
                  <div class="card">
                      <div class="card-header card-header-icon" data-background-color="purple">
                          <i class="fa fa-file-image-o"></i>
                      </div>
                      <div class="card-content">
                          <h4 class="card-title">IMAGEN</h4>
                          <div class="form-group">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="../../assets/img/image_placeholder.jpg" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-primary btn-round btn-file">
                                            <span class="fileinput-new">Seeccionar Imagen</span>
                                            <span class="fileinput-exists">Cambiar Imagen</span>
                                            <input type="file" name="..." />
                                        </span>
                                        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remover</a>
                                    </div>
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
