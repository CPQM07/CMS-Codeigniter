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
										<h4 class="card-title">Autor: <?= $Detalles->get('USU_NOMBRES'); ?><?= $Detalles->get('USU_APELLIDOS'); ?></h4>
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

				</div>
			</div>
		</div>


</div>
