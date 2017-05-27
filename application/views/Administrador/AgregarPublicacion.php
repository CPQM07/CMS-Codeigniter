<div class="card">
  <form method="post" action="/" class="form-horizontal">
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
                              <input type="text" class="form-control" value>
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
                          <input type="text" class="form-control datepicker" value="28/11/1996"/>
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
                              <input type="text" class="form-control" value>
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
                          <h4 class="card-title">DESCRIPCION CORTA</h4>
                          <div class="form-group">
                              <label class="label-control">Descripcion</label>
                              <input type="text" class="form-control" value>
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
                            <label class="label-control">Descripcion</label>
                            <input type="text" class="form-control" value>
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

            <div class="col-sm-12 col-md-6 ">
                  <div class="card">
                      <div class="card-header card-header-icon" data-background-color="purple">
                          <i class="fa fa-certificate"></i>
                      </div>
                      <div class="card-content">
                          <h4 class="card-title">ESTADO</h4>
                          <div class="form-group">
                              <label class="label-control">Descripcion</label>
                              <div class="col-sm-10 checkbox-radios">
                                  <div class="radio">
                                      <label>
                                          <input type="radio" name="optionsRadios" checked="true"> VISIBLE
                                      </label>
                                  </div>
                                  <div class="radio">
                                      <label>
                                          <input type="radio" name="optionsRadios"> OCULTO
                                      </label>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>

          </div>

        </div>
    </form>
</div>
