<!DOCTYPE html>
<html>
<head>
	<title>Resultados de la Busqueda</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php require_once "core/header.php"; ?>

</head>
<body>
	<nav class="navbar navbar-dark" style="background-color: #232f3e;">
		<div class="row col-md-12">
			<div class="col-md-2">
				<a class="navbar-brand" href="#">Comprando</a>
			</div>
			<div class="col-md-7 img-thumbnail">
				<form class="form-inline " target="_self" action="javascript:buscar();" method="get">
				    <input id="inputBusqueda" class="form-control mr-sm-2 col-sm-10" type="search" placeholder="Search" aria-label="Search">
				    <button class="btn my-2 col-md my-sm-0" type="submit" style="background-color: #febd69;">Search</button>
				</form>
			</div>
			<div class="col-md-3">
				
			</div>
  		
  		
		</div>
	</nav>
	
	<div class="container">
		
		<?php
		if($datos!=null){
			foreach ($datos as $e) {
				?>

				<div class="col-sm-12 mb-4 p-2">
					
					<div class="row">
						<div class="col-md-4 text-center">
							<img class="img-fluid img-thumbnail" src="<?php echo $e->getImg(); ?>">
						</div>
						<div class="col-md-8">
							<h4 class="h3"><?php echo $e->getTitle(); ?></h4>
							<div class="col-sm mt-4 text-right">
								<?php if($e->getPrize()=="" || $e->getPrize()->innertext=="$0.00"){?>
									<p>Este producto no está disponible en este momento</p>
								<?php
								}else{
								?>
									<p class="h4"><?php echo $e->getPrize(); ?></p>
									<button class="btn btn-outline-warning">Comprar</button>

								<?php } ?>

									
								
							</div>
						</div>
					</div>

				</div>
				<hr>
				<?php		
			}
		}else{?>

			<div class="alert alert-primary" role="alert">
				No se han encontrado resultados
			</div>

		<?php } ?>
		

	</div>
</body>
</html>