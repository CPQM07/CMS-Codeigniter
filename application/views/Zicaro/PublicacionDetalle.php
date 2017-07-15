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
				<?= $Detalles->get('USU_NOMBRES'); ?>
			</small>
		</blockquote>
	</div>

	<div class="section col-md-10 col-md-offset-1">
		<div class="col-md-12">
			<img class="img-rounded img-responsive img-raised" alt="<?= $Titulo ?>" src="<?= base_url("Resources/images/Publicaciones/".$Detalles->get('PUB_IMAGEN')) ?>">
		</div>
	</div>

	<div class="section section-blog-info">
	<div class="row">
	<div class="col-md-8 col-md-offset-2">

	<div class="row">
	<div class="col-md-6">

	</div>
	<div class="col-md-6">
	<a href="" class="btn btn-google btn-round pull-right">
	<i class="fa fa-google"></i> 232
	</a>
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
	<img class="img" src="<?= base_url('Resources/images/ZicaroPapel/LogoZicaroTransparent.png'); ?>">
	</a>
	<div class="ripple-container"></div></div>
	</div>
	<div class="col-md-8">
	<h4 class="card-title"><?= $Detalles->get('USU_NOMBRES'); ?></h4>
	<p class="description"><?= $Detalles->get('USU_BIO'); ?></p>
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
			<div class="col-md-8 col-md-offset-2">
				<div class="media-area">
					<div class="fb-comments" width="100%" data-href="http://zicaro.cl/index.php/Zicaro/Publicaciones/<?= $Detalles->get('PUB_ID'); ?>" data-numposts="5"></div>
				</div>
			</div>
	</div>
</div>
