<?php
$despache=mysql_query("SELECT * FROM compradetalle");
if(mysql_num_rows($despache)<>0)
{

	
	?>
<!-- start content-outer ........................................................................................................................START -->

	<!-- end page-heading -->

	<table id="content-table" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody><tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" alt="" height="300" width="20"></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" alt="" height="300" width="20"></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
        
        	<div id="page-heading">
		<h1>Consulta de Pedidos en Espera</h1>
	</div>
		
			<!--  start table-content  -->
			<div id="table-content">
			
			
				<form id="mainform" action="">
				<table id="product-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				<tbody><tr>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Fecha</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Nombre Proveedor</a></th>
                    <th class="table-header-repeat line-left minwidth-1"><a href="">Producto</a></th>
					<th class="table-header-repeat line-left"><a href="">Cantidad</a></th>
					
					<th class="table-header-options line-left"><a href="">Opcion</a></th>
				</tr>
  <?php 
  while($general=mysql_fetch_array($despache))
{
 $idcompra=mysql_query("SELECT * FROM compra where n_control=".$general['id_compra'].""); 
 $compra=mysql_fetch_array($idcompra);
 
 $idproducto=mysql_query("SELECT * FROM productos where id=".$general['id_producto'].""); 
  $producto=mysql_fetch_array($idproducto);
  
  $idproveedor=mysql_query("SELECT * FROM proveedores where rif=".$compra['rif_proveedor'].""); 
   $proveedor=mysql_fetch_array($idproveedor);
  
  ?>
				<tr>
					<td><?php echo $compra['fecha']; ?></td>
					<td> <?php echo $proveedor['razon_social']; ?></td>
					<td><?php echo $producto['descripcion']; ?></td>
                    <td><?php echo $general['cant']?></td>
					
					<td class="options-width">
					
					<a href="" class="icon-5 info-tooltip"></a>
					</td>
				</tr>
	   <?php 
}
?>			
				
				
				</tbody></table>
				<!--  end product-table................................... --> 
				</form>

			</div>
			<!--  end content-table  -->
		
			
			
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</tbody></table>
 <?php
} else
{?>
<center><img src="images/unnotice.png" width="508"></center>
<?php }?>
