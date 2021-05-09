<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Inicio</title>
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

	<section class="main-banner">
		<div class="bubble-wrapper">
			<img class="back-image" src="/ProyectoFinal/static/images/sky-person.jpg" alt="">
			<div class="bubble-icon-wrapper">
				<div class="bubble-content">
					<i class="fas fa-comment"></i>
					<div class="bubble-text">
						<span>Hoy quiero aprender...</span>
						<p>¡Nunca es tarde para aprender algo nuevo o redirigir tu carrera profesional!</p>
					</div>
					<!--<div class="search-bar">
						<form action="" class="search-form-home">
							<input class="courses-input" autocomplete="off" type="text" name="search" id=""
								tabindex="16" value="Buscar cursos..." placeholder="">
							<button type="submit"><i class="far fa-search"></i></button>
						</form>
					</div> -->
				</div>
			</div>
		</div>
		<div class="featured_courses_wrapper container12">
			<div class="title-courses">
				<h1>
					CURSOS TENDENCIA
				</h1>
			</div>
			<div class="banner_x3_wrapper owl-carousel owl-theme">
				<div class="banner">
					<div class="image_wrapper">
						<img src="../static/images/carousel-img-1.jpg">
					</div>
					<div class="banner_content">
						<i class="fab fa-js-square"></i>
						<h4 class="title">Javascript</h4>
						<div class="text">Aprende con el mejor curso de Javascript. Dominarás el DOM y te harás un
							experto.</div>
						<a href="../public_html/courses.html" class="btn_personalized">Ver más</a>
					</div>
				</div>
				<div class="banner">
					<div class="image_wrapper">
						<img src="../static/images/carousel-img-2.jpg">
					</div>
					<div class="banner_content">
						<i class="fab fa-python"></i>
						<h4 class="title">Python</h4>
						<div class="text">Conoce todo lo que necesitas saber para programar en el lenguaje de moda.
						</div>
						<a href="../public_html/courses.html" class="btn_personalized">Ver más</a>
					</div>
				</div>
				<div class="banner">
					<div class="image_wrapper">
						<img src="../static/images/carousel-img-3.jpg">
					</div>
					<div class="banner_content">
						<i class="fab fa-java"></i>
						<h4 class="title">Java</h4>
						<div class="text">A veces es mejor aprender desde las bases y nada mejor como el curso de Java.
						</div>
						<a href="../public_html/courses.html" class="btn_personalized">Ver más</a>
					</div>
				</div>
				<div class="banner">
					<div class="image_wrapper">
						<img src="../static/images/carousel-img-4.jpg">
					</div>
					<div class="banner_content">
						<i class="fab fa-css3-alt"></i>
						<h4 class="title">CSS</h4>
						<div class="text">Hazte un experto en dar estilos y animaciones a tus webs.</div>
						<a href="../public_html/courses.html" class="btn_personalized">Ver más</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Carga mediante ajax $().load -->
	<footer id="footer_container">
		<!-- Mensaje de error en caso de que no se cargue bien el componente -->
		<span id="error"></span>
	</footer>
	<script src="/ProyectoFinal/static/js/jquery-3.6.0.min.js"></script>
	<script src="/ProyectoFinal/static/js/mainScript.js"></script>
	<script src="../static/js/owl.carousel.min.js"></script>
	<script>
		$('.banner_x3_wrapper').owlCarousel({
			loop: true,
			nav: true,
			navText: [
				'<i class="fal fa-chevron-left"></i>',
				'<i class="fal fa-chevron-right"></i>',
			],
			dots: false,
			items: 3,
			autowidth: true,
			navSpeed: 500,
			autoplay: false,
			margin: 20
		});
	</script>

</body>

</html>