<?php
include"conexion/aut_verifica.inc.php";
include"header.php";

$detalle=mysql_query("SELECT * FROM ventasdetalle where id_venta='".$_GET['op']."'");
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
		
			table.phone-compare tbody tr td h4{
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
  <tr><td colspan="4" style="text-align:center"><h4>Numero de Orden <b><?php print $_GET['op'];?></b></h4></td></tr>
    <tr>
      <th data-priority="1"><h4>Fecha</h4></th>
    <th>
        <h4>Producto</h4>
      
    </th>
    <th data-priority="2">
        <h4>Cantidad</h4>
 
    </th>
    <th data-priority="3">
        <h4>Precio Unitario</h4>
 
    </th>
 
     
    </tr>
  </thead>
  <tbody>
   <?php
                while($datelleprod=mysql_fetch_array($detalle)) {

$nombreproducto=mysql_query("SELECT * FROM productos where id='".$datelleprod['id_productos']."'");
$nombrep=mysql_fetch_array($nombreproducto);
				
				?>
                
                <tr>
					<td><h4><?php echo strtoupper($nombrep['descripcion']); ?></h4></td>
					<td><h4><?php echo $datelleprod['cant']; ?></h4></td>
					<td><h4><?php echo $datelleprod['precio']; ?></h4></td>
					<td><h4><?php echo $subtotal=$datelleprod['cant']*$datelleprod['precio'];  $total=$total+$subtotal; ?></h4></td>
                    </tr><?php }?>
                    <tr><td colspan="3" style="text-align:right"><h4>Total</h4></td><td ><h4><?php print $total;?></h4></td></tr>
 
  </tbody>
</table>
 
<?php

include"footer.php";
?>
