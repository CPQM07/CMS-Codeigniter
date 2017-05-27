<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<p class="text-justify">
					<?= $Detalles->get('PUB_DESC_L'); ?>
				</p>

			<blockquote>
				<p>
					<em>
						"CITA"
					</em>
				</p>
				<small>
				<?= $Detalles->get('USU_NOMBRES'); ?><?= $Detalles->get('USU_APELLIDOS'); ?>
				</small>
			</blockquote>
		</div>

		<div class="section col-md-10 col-md-offset-1">
			<div class="col-md-12">
				<img class="img-rounded img-responsive img-raised" alt="<?= $Enunciado ?>" src="<?= base_url("Resources/images/Publicaciones/".$Detalles->get('PUB_IMAGEN').".jpg") ?>">
			</div>
		</div>

		<div class="section section-blog-info">
		    <div class="row">
						<div class="col-md-8 col-md-offset-2">

							<div class="row">
								<div class="col-sm-12 text-right">
									<a href="" class="btn btn-twitter btn-round pull-right">
										<i class="fa fa-twitter"></i> 910
									</a>
									<a href="" class="btn btn-facebook btn-round pull-right">
										<i class="fa fa-facebook-square"></i> 872
									</a>

								</div>
							</div>

							<hr />

							<div class="card card-profile card-plain">
								<div class="row">
									<div class="col-md-2">
										<div class="card-avatar">
											<a href="">
												<img class="img" src="<?= base_url('Resources/images/ZicaroPapel/LogoZicaroTransparent.png') ?>">
											</a>
										<div class="ripple-container"></div></div>
									</div>
									<div class="col-md-8">
										<h4 class="card-title"><?= $Detalles->get('USU_NOMBRES'); ?><?= $Detalles->get('USU_APELLIDOS'); ?></h4>
										<p class="description">Resumen</p>
									</div>
									<div class="col-md-2">
										<button type="button" class="btn btn-default pull-right btn-round">Seguir</button>
									</div>
								</div>
							</div>

						</div>
		   </div>
		</div>

		<div class="section section-comments">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="media-area">
						<h3 class="title text-center">3 Comentarios</h3>
						<div class="media">
							<a class="pull-left" href="">
								<div class="avatar">
									<img class="media-object" src="<?= base_url('Resources/images/ZicaroPapel/LogoZicaroTransparent.png') ?>" alt="..."/>
								</div>
							</a>
							<div class="media-body">
								<h4 class="media-heading">Usuario 1 <small>&middot; Hace 7 Minutos</small></h4>
								<h6 class="text-muted"></h6>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>

								<div class="media-footer">
									<a href="" class="btn btn-primary btn-simple pull-right" rel="tooltip" title="Reply to Comment">
										<i class="material-icons">reply</i> Reply
									</a>
									<a href="" class="btn btn-danger btn-simple pull-right">
										<i class="material-icons">favorite</i> 243
									</a>
								</div>
							</div>
						</div>

						<div class="media">
						  <a class="pull-left" href="">
							  <div class="avatar">
								 <img class="media-object" alt="Tim Picture" src="<?= base_url('Resources/images/ZicaroPapel/LogoZicaroTransparent.png') ?>">
							  </div>
						  </a>
						  <div class="media-body">
							 <h4 class="media-heading">Autor 2 <small>&middot; Ayer</small></h4>

							 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
							 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>

							<div class="media-footer">
								<a href="" class="btn btn-primary btn-simple pull-right" rel="tooltip" title="Reply to Comment">
									<i class="material-icons">reply</i> Reply
								</a>
								<a href="" class="btn btn-default btn-simple pull-right">
									<i class="material-icons">favorite</i> 25
								</a>
							 </div>
							 <div class="media">
								  <a class="pull-left" href="">
										<div class="avatar">
											<img class="media-object" alt="64x64" src="<?= base_url('Resources/images/ZicaroPapel/LogoZicaroTransparent.png') ?>">
										</div>
								  </a>
								  <div class="media-body">
										<h4 class="media-heading">Autor 3 <small>&middot; Hace 12 horas</small></h4>

										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>

										<div class="media-footer">
											<a href="" class="btn btn-primary btn-simple pull-right" rel="tooltip" title="Reply to Comment">
												<i class="material-icons">reply</i> Reply
											</a>
											<a href="" class="btn btn-default btn-simple pull-right">
												<i class="material-icons">favorite</i> 2
											</a>
										</div>
								  </div>
							  </div>
						  </div>
						</div>

					</div>
					  <h3 class="title text-center">Envia tu Comentario</h3>
					  <div class="media media-post">
						  <a class="pull-left author" href="">
							  <div class="avatar">
									<img class="media-object" alt="64x64" src="<?= base_url('Resources/images/ZicaroPapel/LogoZicaroTransparent.png') ?>">
							  </div>
						  </a>
						  <div class="media-body">
								<textarea class="form-control" placeholder="Write some nice stuff or nothing..." rows="6"></textarea>
								<div class="media-footer">
									 <a href="" class="btn btn-primary btn-round btn-wd pull-right">Enviar</a>
								</div>
						  </div>
					  </div> <!-- end media-post -->
				</div>
			</div>
		</div>


</div>
