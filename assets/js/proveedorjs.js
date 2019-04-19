jQuery(document).ready(function() {
  //create Proveedor
  $('#btnCreateProve').click(function() {
		// vacios = validarFrmVacio('formCreateProve');
		// if(vacios > 0){
		// 	alertify.error("Debe llenar todos los campos!");
		// 	return false;
		// }
		var datos=$('#formCreateProve').serialize();
		$.ajax({
			url: '../../public/procesos/proveedor/createProveedor.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (r==0) {
				alertify.error("El Producto YA EXISTE");
			}else if(!r.error){
				$('#tableProveedor').load('../componentes/tableProveedor.php');
				$('#formCreateProve')[0].reset();
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
  // editar proveedor -----
  //---------------------------UPDATE ---------------
  $('#btnUpdateProve').click(function() {
		var datos=$('#formUpdateProve').serialize();
		$.ajax({
			url: '../../public/procesos/proveedor/updateProveedor.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
			  $('#tableProveedor').load('../componentes/tableProveedor.php');
				alertify.success("Actualizado con ÉXITO");
			}else{
				alertify.error("Error al Editar");
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
