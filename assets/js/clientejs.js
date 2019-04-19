jQuery(document).ready(function() {
  // Create Cliente ---------------------------
  $('#btnClienteCreate').click(function() {
		//vacios = validarFrmVacio('frmcli');
		//if(vacios > 0){
			//alertify.error("Debe llenar todos los campos!");
			//return false;
		//}
		var datos=$('#formCreateCliente').serialize();
		$.ajax({
			url: '../../public/procesos/cliente/createCliente.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
				$('#tableCliente').load('../componentes/tableCliente.php');
				$('#formCreateCliente')[0].reset();
				alertify.success("Agregado con ÉXITO");
			}else{
				alertify.error("Error: Ya existe el cliente o datos incorrectos");
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
  //------------- update Cliente ------------------
  $('#btnClienteUpdate').click(function() {
		var datos=$('#formUpdateCliente').serialize();
		$.ajax({
			url: '../../public/procesos/cliente/updateCliente.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
				$('#tableCliente').load('../componentes/tableCliente.php');
				alertify.success("Actualizado con ÉXITO");
			}else{
				alertify.error("Error al editar el Campo");
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	});
});
