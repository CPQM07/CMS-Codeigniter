<div class="card">
  <form class="form-horizontal" action="<?= site_url('/Administrador/NuevaPublicacion'); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="card-header card-header-text" data-background-color="purple">
            <h4 class="card-title">NUEVA PUBLICACION</h4>
        </div>

        <div class="card-content">
          <div class="row">
                <div class="col-sm-12 col-md-6 ">
                      <div class="card">
                          <div class="card-header card-header-icon" data-background-color="purple">
                              <i class="fa fa-header"></i>
                          </div>
                          <div class="card-content">
                              <h4 class="card-title">TITULO</h4>
                              <div class="form-group">
                                  <label class="label-control">Titulo Publicacion</label>
                                  <input name="PUB_TITULO" type="text" class="form-control" value>
                              </div>
                          </div>
                      </div>
                </div>

                <div class="col-sm-12 col-md-6 ">
                  <div class="card">
                      <div class="card-header card-header-icon" data-background-color="purple">
                          <i class="fa fa-calendar"></i>
                      </div>
                      <div class="card-content">
                          <h4 class="card-title">FECHA</h4>
                          <div class="form-group">
                              <label class="label-control">Fecha Publicacion</label>
                              <input name="PUB_FECHA" type="text" class="form-control datetimepicker"/>
                          </div>
                      </div>
                  </div>
                </div>
          </div>

          <div class="row">
                <div class="col-sm-12 col-md-6 ">
                      <div class="card">
                          <div class="card-header card-header-icon" data-background-color="purple">
                              <i class="fa fa-map-marker"></i>
                          </div>
                          <div class="card-content">
                              <h4 class="card-title">UBICACION</h4>
                              <div class="form-group">
                                  <label class="label-control">Ubicacion Publicacion</label>
                                  <input name="PUB_UBICACION" type="text" class="form-control">
                              </div>
                          </div>
                      </div>
                </div>

                <div class="col-sm-12 col-md-6 ">
                      <div class="card">
                          <div class="card-header card-header-icon" data-background-color="purple">
                              <i class="fa fa-text-width"></i>
                          </div>
                          <div class="card-content">
                              <h4 class="card-title">AUTOR</h4>
                              <div class="form-group">
                                  <label class="label-control">Ingrese Mombre del Autor del POST</label>
                                  <input name="PUB_AUTOR" type="text" class="form-control"/>
                              </div>
                          </div>
                      </div>
                </div>
          </div>

          <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                      <div class="card">
                          <div class="card-header card-header-icon" data-background-color="purple">
                              <i class="fa fa-text-width"></i>
                          </div>
                          <div class="card-content">
                              <h4 class="card-title">DESCRIPCION CORTA</h4>
                              <div class="form-group">
                                  <label class="label-control">Descripcion [ min: 20 caracteres ]</label>
                                  <textarea name="PUB_DESC_C" class="form-control" minLength="20"  maxLength="200"></textarea>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
          </div>

          <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="purple">
                            <i class="fa fa-align-center"></i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">DESCRIPCION LARGA</h4>
                            <div class="form-group">
                                <div id="toolbar"></div>
                                <div id="PUB_DESC_L" class="editor"></div>
                                <script type="text/javascript">
                                  var PUB_DESC_L = $("PUB_DESC_L").html();
                                  alert(PUB_DESC_L);
                                </script>
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
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-primary btn-round btn-file">
                                                <span class="fileinput-new">Seeccionar Imagen</span>
                                                <span class="fileinput-exists">Cambiar Imagen</span>
                                                <input type="file" name="PUB_IMAGEN" />
                                            </span>
                                            <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remover</a>
                                        </div>
                                    </div>
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
                                              <input type="radio" name="PUB_ESTADO" value="1"> VISIBLE
                                          </label>
                                      </div>
                                      <div class="radio">
                                          <label>
                                              <input type="radio" name="PUB_ESTADO" value="2"> OCULTO
                                          </label>
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
