<?php
  session_start();
  require '../../config/conexion.php';
  $sql = $con->query("SELECT * FROM producto");
 ?>
<div class="table-responsive">
  <table class="table table-hover table-sm" id="tableProduc">
    <thead class="font-primary">
        <tr>
            <th>ID</th>
            <th>CODIGO</th>
            <th>MARCA</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>STOCK</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody class="bg-white">
        <?php while($mostrarprod = $sql->fetch_row()){ ?>
          <tr>
              <td><?php echo $mostrarprod[0] ?></td>
              <td><?php echo $mostrarprod[1] ?></td>
              <td><?php echo $mostrarprod[5] ?></td>
              <td><?php echo $mostrarprod[2] ?></td>
              <td><?php echo $mostrarprod[3] ?></td>
              <td><?php echo $mostrarprod[4] ?></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-inverse-warning btn-sm" title="Editar" data-toggle="modal" data-target="#ModalUpdateProd" onclick="ReadProducto('<?php echo $mostrarprod[0] ?>')"><i class="fas fa-edit"></i></button>
                  <?php
                    if ($_SESSION['loginPat']['acceso_emp'] == "Administrador"):
                  ?>
                  <button type="button" class="btn btn-inverse-danger btn-sm" title="Eliminar" onclick="deleteProducto('<?php echo $mostrarprod[0] ?>')"><i class="fas fa-trash-alt"></i></button>
                  <?php endif; ?>
                </div>
              </td>
           </tr>
         <?php } ?>
      </tbody>
  </table>
</div>
<script>
  $(document).ready(function() {
    $('#tableProduc').DataTable({
      "language": {
        "lengthMenu": "Mostrar _MENU_ registros por página",
        "zeroRecords": "Nada encontrado, lo siento!",
        "info": "Mostrando página _PAGE_ de _PAGES_",
        "infoEmpty": "No hay registros disponibles",
        "infoFiltered": "(filtered from _MAX_ total records)",
        "search": "Buscar",
        "paginate": {
          "first":      "Primero",
          "previous":   "Anterior",
          "next":       "Siguiente",
          "last":       "Último"
        }
      }
    });
  });
</script>
