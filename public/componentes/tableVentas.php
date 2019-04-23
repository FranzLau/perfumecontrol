<?php
  require '../../config/conexion.php';
  require '../../config/data.php';
  $obj = new data();
  $sql = $con->query("SELECT * FROM venta GROUP BY id_venta");
 ?>
<table class="table table-sm table-hover" id="tableVen">
  <thead class="font-primary">
    <tr>
      <th><i class="fas fa-clipboard-list"></i></th>
      <th>FECHA</th>
      <th>CLIENTE</th>
      <th>TOTAL</th>
      <th><i class="fas fa-eye"></i> REPORTE</th>
    </tr>
  </thead>
  <tbody class="bg-white">
    <?php while ($ver = $sql->fetch_row()): ?>
    <tr>
      <td><?php echo $ver[0]; ?></td>
      <td><?php echo $ver[4]; ?></td>
      <td>
        <?php
          if ($ver[2]=="0") {
            echo "Público General";
          }else{
            echo $obj->nombCliente($ver[2]);
          }
         ?>
      </td>
      <td>s/ <?php echo $obj->obtenerTotal($ver[0]);?></td>
      <td>
        <!-- <button type="button" class="btn btn-sm btn-inverse-success" data-toggle="modal" data-target="#readDetalleVenta" onclick="readDetalleVenta('<?php echo $ver[0] ?>')"><i class="fas fa-eye"></i></button> -->
        <a href="ventas.php?idventa=<?php echo $ver[0] ?>" class="btn btn-sm btn-inverse-success"><i class="fas fa-eye"></i></a>
        <a href="../../procesos/ventas/crearTicketpdf.php?idventa=<?php echo $ver[0] ?>" class="btn btn-sm btn-inverse-warning"><i class="fas fa-tag"></i></a>
        <a href="../../procesos/ventas/crearReportepdf.php?idventa=<?php echo $ver[0] ?>" class="btn btn-sm btn-inverse-danger"><i class="fas fa-file-pdf"></i></a>
      </td>
    </tr>
    <?php endwhile;  ?>
  </tbody>
</table>
<script>
  $(document).ready(function() {
    $('#tableVen').DataTable({
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
