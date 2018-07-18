<?php
include"conexion/aut_verifica.inc.php";
include"header.php";
?>
<br>
<ul data-role="listview" data-filter="true"  data-filter-placeholder="Buscar..." data-divider-theme="e	">
    <li data-role="list-divider">Consultas</li>
    <li><a href="ultimo_pedidos.php?titulo=Ultimos Pedidos&op=1">Ultimos Pedidos</a></li>
    <li><a href="ultimo_pedidos.php?titulo=Ultimas Compras&op=2">Ultimas Compras</a></li>            

    <li data-role="list-divider">Proceso</li>
    <li><a href="registro_ventas.php?titulo=Listado de Productos">Pedido</a></li>
  <li><a href="pedidos_pendientes.php?titulo=Pedido Pendiente">Pedido Pendiente</a></li>
    <li><a href="index.html">Salir</a></li>
</ul>

          
<?php
include"footer.php";
?>
