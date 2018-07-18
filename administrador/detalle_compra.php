<?php
include"conexion/aut_config.inc.php";

  $id=$_GET['ncontrol'];
?><link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
			<table id="product-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				<tbody><tr>
				 
					<th class="table-header-repeat line-left minwidth-1"><a href="">Nombre Proveedor</a></th>
                    <th class="table-header-repeat line-left minwidth-1"><a href="">Producto</a></th>
					<th class="table-header-repeat line-left"><a href="">Precio</a></th>
					
					<th class="table-header-options line-left"><a href="">Cantidad</a></th>
                    <th class="table-header-options line-left"><a href="">Subtotal</a></th>
				</tr>
  <?php 


  
 $idcompra=mysql_query("SELECT * FROM compradetalle where id_compra='$id'"); 

 while( $compra=mysql_fetch_array($idcompra))
{
 $idproducto=mysql_query("SELECT * FROM productos where id=".$compra['id_producto'].""); 
  $producto=mysql_fetch_array($idproducto);
  
  $idproveedor=mysql_query("SELECT * FROM proveedores where rif=".$producto['id_proveedor'].""); 
   $proveedor=mysql_fetch_array($idproveedor);
  
  ?>
				<tr>
					
					<td style="width:35%"> <?php echo $proveedor['razon_social']; ?></td>
					<td><?php echo strtoupper($producto['descripcion']); ?></td>
                    <td><?php echo $compra['precio']?></td>
					<td><?php echo $compra['cant']; ?></td>
					 <td><?php echo $subtotal=$compra['cant']*$compra['precio']; $total=$total+$subtotal; ?></td>
				</tr>
	   <?php 
}
?>			<tr><td colspan="4" style="text-align:right">Total</td><td ><?php print $total;?></td></tr>
				
				
				</tbody></table>
