<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Cursos</title>
	<link rel="stylesheet" href="/ProyectoFinal/static/css/mainStyles.css">
	<link rel="stylesheet" href="/ProyectoFinal/static/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/ProyectoFinal/static/css/owl.theme.default.min.css">
	<link rel="shortcut icon" href="#">
	<script src="/ProyectoFinal/static/js/34ab2cdb42.js"></script>
</head>

<body>
	<!-- Carga mediante ajax $().load -->
	<header id="header_container">
		<!-- Mensaje de error en caso de que no se cargue bien el componente -->
		<span id="error"></span>
	</header>

	<section class="courses-custom-wrapper container12">
		<hr>

		<?php
		require_once 'lib/bbdd.php';
		$bbdd = new BBDD();
		$listaCursos = $bbdd->listarCursos();
		if ($listaCursos != null) {
			foreach ($listaCursos as $lista) {
				$id = $lista['id'];
		?>

			<div class="course-container">
				<div class="course-content-text">
					<h2 class="title-course"><?= $lista['nombre'] ?></h2>
					<div class="description-course">
						<img src="<?= $lista['img'] ?>" alt="">
						<p><?= $lista['descripcion'] ?></p>
					</div>
					<div class="offer-wrapper">
						<i class="fal fa-badge-percent"></i>
						<span>Oferta SÓLO hoy por <?= $lista['precio'] ?>€</span>
					</div>
				</div>
				<div class="addToCart">
					<button class="btn-add" onclick="window.location.href='agregar_carrito.php?course_id=<?php echo $id; ?>'">
						<span>AÑADIR AL CARRITO</span>
					</button>
				</div>
			</div>
			<hr>

		<?php
			}
		} else {
			echo "ERROR";
		}
		?>


	</section>

	<!-- Carga mediante ajax $().load -->
	<footer id="footer_container">
		<!-- Mensaje de error en caso de que no se cargue bien el componente -->
		<span id="error"></span>
	</footer>
	<script src="/ProyectoFinal/static/js/jquery-3.6.0.min.js"></script>
	<script src="/ProyectoFinal/static/js/mainScript.js"></script>

</body>

</html>