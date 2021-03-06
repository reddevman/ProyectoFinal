$(function () {
	// Comprobamos por consola que el script se carga
	console.log('Script Cargado');

	// Configurar ajax para evitar problemas de cacheado y que se refresque mejor la web
	$.ajaxSetup({
		cache: false,
	});

	// Carga del componente html y comprobación en caso de error
	$('#header_container').load(
		'/ProyectoFinal/components/header.php',
		function (response, status, xhr) {
			if (status == 'error') {
				var msg = 'Sorry but there was an error: ';
				$('#error').html(msg + xhr.status + ' ' + xhr.statusText);
			}
		}
	);

	$('#footer_container').load(
		'/ProyectoFinal/components/footer.html',
		function (response, status, xhr) {
			if (status == 'error') {
				var msg = 'Sorry but there was an error: ';
				$('#error').html(msg + xhr.status + ' ' + xhr.statusText);
			}
		}
	);

	$('.courses-input').focusin(function (e) {
		e.preventDefault();
		$(this).val('');
	});
	
	$('.courses-input').focusout(function (e) {
		e.preventDefault();
		$(this).val('Buscar cursos...');
	});
});

// $.ajax({
//     url: "/YourController",
//     cache: false,
//     dataType: "html",
//     success: function(data) {
//         $("#content").html(data);
//     }
// });
