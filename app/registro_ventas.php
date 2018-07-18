<?php
include"conexion/aut_verifica.inc.php";
include"header.php";
?>
<style>
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
 <script type="text/javascript">
function ver(num){

if(num>0){
var s1=document.getElementById('cantidad');
s1.options[0]=new Option('Cantidad','','');
for(var i=1;i<=num;i++){
s1.options[i]=new Option(i,i,i);
    }
}
else { var s1=document.getElementById('cantidad');
s1.options[0]=new Option('Cantidad','','');}

}
</script>
  <?php
 $op=$_POST['op'];
$eli=$_GET['eli'];
if($op=='' && $eli=='') {



$n_control=mysql_query("SELECT n_control FROM ventas   order by id desc limit 0,1");
$num=mysql_fetch_array($n_control);
 $n_control=$num[n_control]+1;
}
if($op==1)
{
 $n_control=$ncontrol=$_POST['ncontrol'];
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];
$total=$cantidad*$precio;

$n_control2=mysql_query("SELECT * FROM ventas where n_control='$ncontrol'");
$num=mysql_fetch_array($n_control2);
$contar=mysql_num_rows($n_control2);

$n_producto=mysql_query("SELECT * FROM productos where id='$producto'");
$datpro=mysql_fetch_array($n_producto);
$precio=$datpro['precio'];
$cant1=$datpro['cantidad'];
if($cantidad>$cant1)
{ ?>
<script> alert("No hay disponibilidad para esta cantidad");</script>
<?php } else {
$total=$cantidad*$precio;
$id_proveedor=$datpro[id_proveedor];
$total1=$num[total];
$cantidadtotal=$cant1-$cantidad;
$monto=$total+$total1;

$fecha=date("Y-m-d");
$mes=date("m");
if($contar==0){
$cliente=$_SESSION['usuario_login'];
$sql=mysql_query("INSERT INTO ventas (cliente,fecha,n_control,status,total,mes) values('$cliente','$fecha','$ncontrol','0','$monto','$mes')"); 
mysql_query("UPDATE productos SET  cantidad='$cantidadtotal' where id='$producto'");}
else { mysql_query("UPDATE ventas SET  total='$monto' where n_control='$ncontrol'");}
$sql2=mysql_query("INSERT INTO ventasdetalle (id_venta,id_productos,precio,cant) values('$ncontrol','$producto','$precio','$cantidad')");
mysql_query("UPDATE productos SET  cantidad='$cantidadtotal' where id='$producto'");
$detalles=mysql_query("SELECT * FROM ventas,ventasdetalle where id_venta='$ncontrol' and id_venta=n_control");
$contar1=mysql_num_rows($detalles);
}
}
if($eli==1)
{
 $n_control=$ncontrol=$_GET['ncontrol'];
 $id=$_GET['id'];
$idp=$_GET['idp']; $cantidades=$_GET['idc'];
$n_producto=mysql_query("SELECT * FROM productos where id='$idp'");
$datpro=mysql_fetch_array($n_producto);
$cant1=$datpro['cantidad']+$cantidades;
mysql_query("UPDATE productos SET  cantidad='$cant1' where id='$idp'");

mysql_query("DELETE FROM ventasdetalle WHERE id='$id'");
$detalles=mysql_query("SELECT * FROM ventas,ventasdetalle where id_venta='$ncontrol' and id_venta=n_control");
$contar1=mysql_num_rows($detalles);
}
 $op1=$_POST['op1'];
if($op1==1){ 
$ncontrol1=$_POST['ncontrol'];
mysql_query("UPDATE ventas SET  status='1' where n_control='$ncontrol1'");?>
<div id="message-green">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="green-left">El pedido se ha cerrado Exitosamente. </td>
					<td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div><?php 
}
?>	
 
 
 
 
	
 
	
	 
	 <form action="" method="post">
        <table id="content-table" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody>
        
       

<tr>
			<th valign="top">Numero de Control:</th>
			<td><input class="inp-form" type="text" readonly value="<?php print $n_control;?>" name="ncontrol" required></td>
			 
		</tr>
        	<tr><input type="hidden" name="op" value="1">
        
        			<th valign="top">Producto:</th>
			<td>
<select name="producto"  class="inp-form" required style="width:200px;height:33px;font-size: 12px;" >
  <option value="" onclick="ver('0')" >Elija el Producto</option>
<?php
$consulta=mysql_query("SELECT id,descripcion,cantidad FROM productos where disponibilidad='1' and cantidad>'0' order by  descripcion asc");
while($datos=mysql_fetch_array($consulta))
{  print '<option value="'.$datos[id].'"   >'.strtoupper($datos[descripcion]).' ('.$datos[cantidad].')</option>';}

?>


         
  
            </select>

  </td>
			 
		</tr>
        
        	 <tr>
			<th valign="top">Cantidad:</th>
					<td>
<input type="text" name="cantidad" id="cantidad" >

</td>
			
			 
		</tr>
        

		 



		
		 
		
	<tr>
		 
		<td valign="top" colspan="2">
			<input value="Enviar" class="form-submit" type="submit">
			<input value="Cancelar" class="form-reset" type="reset">
		</td>
		 
	</tr>
	</tbody></table>
    </form>
     
	


<?php if($op==1 && $contar1=1 or $eli==1){?>

				<table data-role="table" id="phone-table" data-mode=""  data-column-btn-theme="a" class="phone-compare ui-shadow table-stroke">
	<tr>
				 
					 <th data-priority="1"><h4>Nombre</h4></th>
				
					 <th data-priority="1"><h4>Cant</h4></th>
					 <th data-priority="1"><h4>Precio</h4></th>
					 <th data-priority="1"><h4>Subtotal</h4></th>
					
					
					 <th data-priority="1"><h4>Opcion</h4></th>
				</tr>
<?php
while($detalles_producto=mysql_fetch_array($detalles)){
$producto=$detalles_producto[id_productos];
$cantidad=$detalles_producto[precio];
$precio=$detalles_producto[cant];
$n_producto=mysql_query("SELECT * FROM productos where id='$producto'");
$datpro=mysql_fetch_array($n_producto);


?>
				<tr>
					 
					<td><?php print $datpro[4];?></td>
				
					<td><?php print $precio;?></td>
					<td><?php print $cantidad;?></td>
					<td><?php print $precio*$cantidad; $general=$general+($precio*$cantidad);?></td>
					 
				  
					<td class="options-width"> 
					<a href="registro_ventas.php?titulo=Listado de Productos&idc=<?php print $precio;?>&idp=<?php print $datpro[0];?>&&ncontrol=<?php print $n_control;?>&eli=1&id=<?php print $detalles_producto[7];?>"   title="Eliminar" class="icon-2 info-tooltip">X</a> 
					</td>
				</tr> 
<?php }?>	
<tr>
					 <td colspan="4" style="text-align:right">Total</td>
				 
					<td coslpan="2"><?php print $general;?>  
					</td>
				</tr> 
			</table>
<form action="registro_ventas.php" method="post">
 <input class="inp-form" type="hidden" readonly value="<?php print $n_control;?>" name="ncontrol" >
 <input class="inp-form" type="hidden" readonly value="1" name="op1" >
		 <table><tr><td><input type="submit" value="Cerrar" class="form-submit"  /></td></tr></table></form>
<?php } 

include"footer.php";
?>

