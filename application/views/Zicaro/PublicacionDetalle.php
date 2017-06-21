<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h3 class="text-justify"><?= $Detalles->get('PUB_DESC_L'); ?></h3>
		<blockquote>
			<p>
				<em>
				"CITA"
				</em>
			</p>
			<small>
				<?= $Detalles->get('PUB_AUTOR'); ?>
			</small>
		</blockquote>
	</div>

	<div class="section col-md-10 col-md-offset-1">
		<div class="col-md-12">
			<img class="img-rounded img-responsive img-raised" alt="<?= $Titulo ?>" src="<?= base_url("Resources/images/Publicaciones/".$Detalles->get('PUB_IMAGEN').".jpg") ?>">
		</div>
	</div>

	<div class="section section-blog-info">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="pull-right">
					<div class="fb-share-button" data-href="http://zicaro.cl/index.php/Zicaro/PublicacionDetalle/<?= $Detalles->get('PUB_ID'); ?>" data-layout="box_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore"
						target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fzicaro.cl%2Findex.php%2FZicaro%2FPublicacionDetalle%2F<?= $Detalles->get('PUB_ID'); ?>&amp;src=sdkpreparse">Compartir</a>
					</div>
				</div>
				<div class="card card-profile">
					<div class="row">
						<div class="col-md-2">
							<div class="card-avatar">
									<img class="img" src="<?= base_url('Resources/images/ZicaroPapel/LogoZicaroTransparent.png') ?>">
								<div class="ripple-container"></div>
							</div>
						</div>
						<div class="col-md-8">
							<h4 class="card-title">Autor: <?= $Detalles->get('PUB_AUTOR'); ?></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section section-comments">
			<div class="col-md-8 col-md-offset-2">
				<div class="media-area">
					<div class="fb-comments" width="100%" data-href="http://zicaro.cl/index.php/Zicaro/Publicaciones/<?= $Detalles->get('PUB_ID'); ?>" data-numposts="5"></div>
				</div>
			</div>
	</div>
</div>
