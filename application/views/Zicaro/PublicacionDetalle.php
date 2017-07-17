<div class="col-md-10 col-md-offset-1">
	<div class="row">
		<div class="col-sm-12 col-md-4">
			<div class="card card-plain card-blog">
				<div class="card-image">
						<img class="img img-raised" src="<?= base_url("Resources/images/Publicaciones/".$Detalles->get('PUB_IMAGEN')) ?>"/>
				</div>
				<div class="card-content">
					<h6 class="category text-primary"> <span class="text-rose"><i class="fa fa-map-marker"></i></span> <?= $Detalles->get('PUB_UBICACION'); ?></h6>
					<h4 class="card-title">
						<?= $Detalles->get('PUB_TITULO') ?>
					</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-8">
			<h5 class="text-justify"><?= $Detalles->get('PUB_DESC_L'); ?></h5>
		</div>
	</div>

	<!--SOCIAL MEDIA-->
	<div class="col-md-4 col-md-offset-4">
		<a data-href="http://ZicaroPapel.cl/index.php/Zicaro/PublicacionDetalle/12" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2FZicaroPapel.cl%2Findex.php%2FZicaro%2FPublicacionDetalle%2F<?= $Detalles->get('PUB_ID'); ?>&amp;src=sdkpreparse"
		class="btn btn-block btn-info btn-round pull-right" data-mobile-iframe="true">
		<i class="fa fa-facebook-square"></i> COMPARTIR
		</a>
	</div>


	<div class="card card-profile card-plain">
		<div class="row">
			<div class="col-md-2">
				<div class="card-avatar">
					<img class="img" src="<?= base_url('Resources/images/ZicaroPapel/LogoZicaroTransparent.png'); ?>">
				</div>
			</div>

			<div class="col-md-8">
				<h4 class="card-title"><?= $Detalles->get('USU_NOMBRES'); ?> <?= $Detalles->get('USU_APELLIDOS'); ?></h4>
				<p class="description"><?= $Detalles->get('USU_BIO'); ?></p>
			</div>
		</div>
	</div>
	<!--FIN SOCIAL MEDIA-->

	<!--FACEBOOK COMMENTS-->
	<div class="section section-comments">
		<div class="media-area">
			<div class="fb-comments" width="100%" data-href="http://zicaro.cl/index.php/Zicaro/Publicaciones/<?= $Detalles->get('PUB_ID'); ?>" data-numposts="5"></div>
		</div>
	</div>
	<!--FIN FACEBOOK COMMENTS-->
</div>
