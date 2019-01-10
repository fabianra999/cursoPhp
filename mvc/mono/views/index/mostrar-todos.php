<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="jumbotron">
				<h1 class="display-4">Listado de usuarios</h1>
				<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			</div>
		</div>
	</div>
	<div class="row">
		<?php while ($usuario = $usuarios->fetch_object()) : ?>
		<div class="col-12 col-sm-4 mt-2">
				<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title"><?= $usuario->nombre ?></h5>
					<p class="card-text"><?= $usuario->nombre ?> | <?= $usuario->apellidos ?> | <?= $usuario->fecha ?>.</p>
				</div>
				</div>
		</div>
		<?php endwhile; ?>		
	</div>
</div>
