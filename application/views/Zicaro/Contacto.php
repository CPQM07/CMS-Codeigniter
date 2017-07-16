<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
      <h2 class="title">¿Tienes alguna duda?</h2>
			<p style="font-size: 20px;" class="description">Envianos un mensaje.<br><br></p>
			<?php if (validation_errors()): ?>
				<div class="alert alert-primary">
					<div class="alert-icon">
						<i class="material-icons">error_outline</i>
					</div>
					<b>:(</b>
					<p><?= validation_errors() ?></p>
				</div>
			<?php endif; ?>
			<form role="form" method="post" action="<?= site_url('/Zicaro/Enviar'); ?>">
				<div class="form-group label-floating">
					<label class="control-label">Nombre</label>
					<input type="text" name="Nombre" id="Nombre" value="<?= set_value('Nombre'); ?>" class="form-control">
				</div>
				<div class="form-group label-floating">
					<label class="control-label">Asunto</label>
					<input type="text" name="Asunto" id="Asunto" value="<?= set_value('Asunto'); ?>" class="form-control"/>
				</div>
				<div class="form-group label-floating">
					<label class="control-label">Correo Electrónico</label>
					<input type="email" name="Correo" id="Correo" value="<?= set_value('Correo'); ?>" class="form-control"/>
				</div>
				<div class="form-group label-floating">
					<label class="control-label">Mensaje</label>
					<textarea name="Mensaje" id="Mensaje" class="form-control" rows="6"><?= set_value('Mensaje'); ?></textarea>
				</div>
				<div class="submit text-center">
					<input type="submit" class="btn btn-primary btn-raised btn-round" value="Enviar" />
				</div>
			</form>
		</div>
  </div>
</div>
