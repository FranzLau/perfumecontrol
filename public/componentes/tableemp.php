<?php
    require '../../config/conexion.php';
    $sql = $con->query("SELECT * FROM empleado ");
?>
 <div class="table-responsive">
   <table class="table table-hover table-sm" id="tablemp">
     <thead class="font-primary">
         <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>DNI</th>
          <th>TELÉFONO</th>
          <th>CARGO</th>

          <th>ESTADO</th>
          <th>ACCIONES</th>
         </tr>
     </thead>
     <tbody class="bg-white">
        <?php
         while($mostrar = $sql->fetch_row()){
         ?>
         <tr>
            <td><?php echo $mostrar[0] ?></td>
            <td><?php echo $mostrar[1]." ".$mostrar[2] ?></td>
            <td><?php echo $mostrar[5] ?></td>
            <td><?php echo $mostrar[7] ?></td>
            <td><?php echo $mostrar[9] ?></td>

            <td class="text-center">
              <?php
              if ($mostrar[10]=="Activo") {
              ?>
                <div class="badge badge-pill badge-outline-success">
                  <i class="fas fa-user-check"></i>
                </div>
                <!-- <p><span class="badge badge-success"><?php echo $mostrar[10] ?></span></p> -->
              <?php
              }else {
              ?>
              <div class="badge badge-pill badge-outline-danger">
                <i class="fas fa-user-times"></i>
              </div>
              <!-- <h5><span class="badge badge-danger"><?php echo $mostrar[10] ?></span></h5> -->
              <?php
              }
              ?>
            </td>

            <td class="text-center">
               <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-inverse-success btn-sm" title="Ver Detalles" data-toggle="modal" data-target="#ModalReadEmp"><i class="fas fa-eye"></i></button>
                  <button type="button" class="btn btn-inverse-warning btn-sm" title="Editar" data-toggle="modal" data-target="#ModalEditarEmp" onclick="obtenDatosEmp('<?php echo $mostrar[0] ?>')"><i class="fas fa-edit"></i></button>
                  <button type="button" class="btn btn-inverse-danger btn-sm" title="Eliminar" onclick="deleteEmp('<?php echo $mostrar[0] ?>')"><i class="fas fa-trash-alt"></i></button>

               </div>
            </td>
         </tr>
         <?php
           }
         ?>
     </tbody>
   </table>
 </div>
 <script type="text/javascript">
      $(document).ready(function() {
        $('#tablemp').DataTable({
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
