<div class="col-md-12">
   <div class="card">
       <form method="get" action="/" class="form-horizontal">
           <div class="card-header card-header-text" data-background-color="">
               <h4 class="card-title">Registrar Nuevo Producto</h4>
           </div>
           <div class="card-content">
               <div class="row">
                   <label class="col-sm-2 label-on-left">Marca</label>
                   <div class="col-sm-10">
                       <div class="form-group label-floating is-empty">
                           <label class="control-label"></label>
                           <input type="text" class="form-control" value>
                           <span class="help-block"></span>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <label class="col-sm-2 label-on-left">Modelo</label>
                   <div class="col-sm-10">
                       <div class="form-group label-floating is-empty">
                           <label class="control-label"></label>
                           <input type="text" class="form-control" placeholder="">
                       </div>
                   </div>
               </div>
               <div class="row">
                   <label class="col-sm-2 label-on-left">Categoria</label>
                   <div class="col-sm-10">
                       <div class="form-group label-floating is-empty">
                           <label class="control-label"></label>
                           <input type="text" class="form-control" placeholder="">
                       </div>
                   </div>
               </div>
               <div class="row">
                   <label class="col-sm-2 label-on-left">Precio</label>
                   <div class="col-sm-10">
                       <div class="form-group label-floating is-empty">
                           <label class="control-label"></label>
                           <input type="text" class="form-control" placeholder="">
                       </div>
                   </div>
               </div>
               <div class="row">
                   <label class="col-sm-2 label-on-left">Tallas Desde</label>
                   <div class="col-sm-10">
                       <div class="form-group label-floating is-empty">
                           <label class="control-label"></label>
                           <input type="text" class="form-control" placeholder="">
                       </div>
                   </div>
               </div>
               <div class="row">
                   <label class="col-sm-2 label-on-left">Talla Hasta</label>
                   <div class="col-sm-10">
                       <div class="form-group label-floating is-empty">
                           <label class="control-label"></label>
                           <input type="text" class="form-control" placeholder="">
                       </div>
                   </div>
               </div>
               <div class="row">
                   <label class="col-sm-2 label-on-left">Descripcion</label>
                   <div class="col-sm-10">
                       <div class="form-group label-floating is-empty">
                           <label class="control-label"></label>
                           <textarea class="form-control" rows="5"></textarea>
                       </div>
                   </div>
               </div>
               <br>
               <div class="row">
                 <label class="col-sm-2 label-on-left"></label>
               <div class="col-sm-4">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                            <img src="<?= base_url() ?>Resources/images/Dirtyllas/DIRTYllasLogo.png" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                            <span class="btn btn-dark btn-round btn-file">
                                <span class="fileinput-new">Seleccionar Portada</span>
                                <span class="fileinput-exists">Cambiar Imagen</span>
                                <input type="file" name="..." />
                            </span>
                            <a href="#" class="btn btn-dark btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                     <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                         <div class="fileinput-new thumbnail">
                             <img src="<?= base_url() ?>Resources/images/Dirtyllas/DIRTYllasLogo.png" alt="...">
                         </div>
                         <div class="fileinput-preview fileinput-exists thumbnail"></div>
                         <div>
                             <span class="btn btn-dark btn-round btn-file">
                                 <span class="fileinput-new">Seleccionar Slides</span>
                                 <span class="fileinput-exists">Cambiar Imagen</span>
                                 <input type="file" name="..." />
                             </span>
                             <a href="#" class="btn btn-dark btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                         </div>
                     </div>
                 </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input type='button' class='btn btn-block btn-round btn-dark' name='previous' value='Guardar' />
                            <span class="help-block"></span>
                        </div>
                    </div>
                </div>
              </div>
           </div>
       </form>
   </div>
</div>
