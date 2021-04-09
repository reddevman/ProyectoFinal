$(function () {
	console.log('script cargado');
	$('#header-container').load(
		'/ProyectoFinal/components/pepe.html',
		function (response, status, xhr) {
			if (status == 'error') {
				var msg = 'Sorry but there was an error: ';
				$('#error').html(msg + xhr.status + ' ' + xhr.statusText);
			}
		}
	);
});
