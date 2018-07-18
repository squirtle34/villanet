<?php
include"conexion/aut_verifica.inc.php";
include"header.php";
?><style>
		/*These apply across all breakpoints because they are outside of a media query */
		table.phone-compare thead th {
			background-color: #fff;
		}
		table.phone-compare thead th h4 {
			text-transform: uppercase;
			font-size: 0.6em;
			margin: 0;
		}
		
 
		table.phone-compare thead th h3 {
			font-size: .9em;
			margin: -.4em 0 .8em 0;
		}
		table.phone-compare th.label {
			text-transform: uppercase;
			font-size: 0.6em;
			opacity: 0.5;
			padding: 1.2em .8em;
			background-color: #ddd;
		}
		table.phone-compare tbody tr.photos td {
			background-color: #fff;
			padding: 0;
		}
		table.phone-compare tbody tr.photos img {
			max-width: 100%;
			min-width: 60px;
		}
		
			table.phone-compare tbody tr td {
			text-transform: uppercase;
			font-size: 0.6em;
			margin: 0;
		}
		/*	Use the target selector to style the column chooser button */
		a[href="#phone-table-popup"] {
			margin-bottom: 1.2em;
		}
		/* Show priority 1 at 320px (20em x 16px) */
		@media screen and (min-width: 20em) {
			.phone-compare th.ui-table-priority-1,
			.phone-compare td.ui-table-priority-1 {
				display: table-cell;
			}
		}
		/* Show priority 2 at 560px (35em x 16px) */
		@media screen and (min-width: 35em) {
			.phone-compare th.ui-table-priority-2,
			.phone-compare td.ui-table-priority-2 {
				display: table-cell;
			}
		}
		/* Show priority 3 at 720px (45em x 16px) */
		@media screen and (min-width: 45em) {
			.phone-compare th.ui-table-priority-3,
			.phone-compare td.ui-table-priority-3 {
				display: table-cell;
			}
		}
		/* Manually hidden */
		.phone-compare th.ui-table-cell-hidden,
		.phone-compare td.ui-table-cell-hidden {
			display: none;
		}
		/* Manually shown */
		.phone-compare th.ui-table-cell-visible,
		.phone-compare td.ui-table-cell-visible {
			display: table-cell;
		}
	</style>
    <?php
    $cliente=$_SESSION['usuario_login']; $op=$_GET['op'];
	$despache=mysql_query("SELECT * FROM ventas where cliente='$cliente' and status='$op'  order by fecha desc  limit 0,5");
	$contar=mysql_num_rows($despache);
	?>
<table data-role="table" id="phone-table" data-mode=""  data-column-btn-theme="a" class="phone-compare ui-shadow table-stroke">
  <thead>
    <tr>
      <th data-priority="1"><h4>Fecha</h4></th>
    <th>
        <h4>Numero de Orden</h4>
      
    </th>
    <th data-priority="2">
        <h4>Total</h4>
 
    </th>
    <th data-priority="3">
        <h4>Ver Pedido</h4>
 
    </th>
     
    </tr>
  </thead>
  <tbody>
    <?php while($general=mysql_fetch_array($despache))
{
$nombre=mysql_query("SELECT * FROM persona where rifc=".$general['cliente']."");
$nombre_cliente=mysql_fetch_array($nombre);
 
?>
				<tr>
					<td><?php echo substr($general['fecha'],8).substr($general['fecha'],4,4).substr($general['fecha'],0,4); ?></td> 
					<td><?php echo $general['n_control']; ?></td>
					<td><?php echo $general['total']; ?></td>
					
					<td class="options-width">
 
                    
                    <a href="detalle.php?id=2&op=<?php print $general[0];?>"     class="icon-5 info-tooltip showPopup">Ver Pedido</a><!--
<a href="pdf/pdf03.php?id=<?php print $nombre_cliente[0];?>&op=<?php print $general[0];?>">Imprimir</a>
                 
-->					</td>
				</tr>
			
				</tbody>
  <?php } ?>
    
 
  </tbody>
</table>
 
<?php

include"footer.php";
?>
