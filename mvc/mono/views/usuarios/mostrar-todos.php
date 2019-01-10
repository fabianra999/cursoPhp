<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="jumbotron">
				<h1 class="display-4">Listado de usuarios</h1>
				<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			</div>

			<div class="card" style="width: 18rem;">
			<img class="card-img-top" src=".../100px180/" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
			</div>

		</div>
	</div>
</div>

<h1></h1>
<?php while ($usuario = $usuarios->fetch_object()) : ?>
	<?= $usuario->nombre ?> - <?= $usuario->fecha ?> <br/>
<?php endwhile; ?>