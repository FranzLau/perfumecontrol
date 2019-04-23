jQuery(document).ready(function() {
  $('#btnCreateIngreso').click(function() {
		vacios = validarFrmVacio('formCreateIngreso');
		if(vacios > 0){
			alertify.error("Debe llenar todos los campos!");
			return false;
		}
		var datos=$('#formCreateIngreso').serialize();
		$.ajax({
			url: '../../public/procesos/ingreso/createIngreso.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if(!r.error){
				$('#tableProducto').load('../componentes/tableProducto.php');
				$('#formCreateIngreso')[0].reset();
				alertify.success("Agregado con ÉXITO");
			}else{
				alertify.error("ERROR al Registrar");
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		return false;
	});
});
