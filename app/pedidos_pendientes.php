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
<table data-role="table" id="phone-table" data-mode=""  data-column-btn-theme="a" class="phone-compare ui-shadow table-stroke">
  <thead>
    <tr>
      <th data-priority="1" colspan="2"><h4>Pedido No Procesados</h4></th>
 </tr>

	 
					
						
					<?php $login=$_SESSION['usuario_login'];
$sql=mysql_query("SELECT *FROM ventas where status='0' and cliente='$login'");

$num=mysql_num_rows($sql);
if($num >0)
{ while($ventas_clientes = mysql_fetch_array($sql))
{
print ' <tr>  <th><h4>Numero de Pedido:</h4></th><th><h4><a href="registro_ventas.php?titulo=Listado de Productos&ncontrol='.$ventas_clientes[n_control].'&eli=1&id=0" title="Pedido Sin Procesar">'.$ventas_clientes[n_control].'</a></h4></th></tr>';

}

}

?>
	 
 </thead>
 
</tbody></table>
<?php

include"footer.php";
?>
