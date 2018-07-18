<?php

if($_GET['id']==1)
{ 
$sql=mysql_query("UPDATE ventas SET status='2' where id='".$_GET['op']."'") or die ("No se eliminaron los datos"); 

}

$despache=mysql_query("SELECT * FROM ventas where status='1'");
if(mysql_num_rows($despache)==0)
{
?>
<center><img src="images/unnotice.png" width="508"></center>
<?php
}

if(mysql_num_rows($despache)<>0)
{


?>
	<!--  start page-heading -->
	
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
		
			<!--  start table-content  -->
			<div id="table-content">
			
            <div class="step-dark">
            <h1>Listado de Pedidos por Despachar</h1></div>
			<br>
				<form id="mainform" action="">
				<table id="product-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				<tbody><tr>
                	<th class="table-header-repeat line-left minwidth-1"><a href="#">Fecha</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Nombre del Cliente</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Nº de Orden</a></th>
					<th class="table-header-repeat line-left"><a href="#">Total</a></th>
					
					<th class="table-header-options line-left"><a href="#">Opcion</a></th>
				</tr>

<?php while($general=mysql_fetch_array($despache))
{

$nombre=mysql_query("SELECT * FROM persona where rifc=".$general['cliente']."");
$nombre_cliente=mysql_fetch_array($nombre);
?>
				<tr>
					<td><?php echo $general['fecha']; ?></td>
					<td><?php echo $nombre_cliente['razon_social']; ?></td>
					<td><?php echo $general['n_control']; ?></td>
					<td><?php echo $general['total']; ?></td>
					
					<td class="options-width">
 <a href="#"  title="Imprimir Pedido" onclick='window.open("pdf/pdf03.php?id=<?php print $nombre_cliente[0];?>&op=<?php print $general[0];?>","","width=850,height=400");' class="icon-1 info-tooltip showPopup"></a>

					<a href="index.php?menu=1&url=8&id=1&op=<?php print $general[0];?>" onClick="if(!confirm('Esta Seguro de Procesar el Pedido')){ return false;}" title="Procesar" class="icon-4 info-tooltip"></a>
                    
                    <a href="#"   onclick='window.open("detalle_pedido.php?id=2&op=<?php print $general[0];?>","","width=850,height=400");' class="icon-5 info-tooltip showPopup" title="Ver Pedido"></a>
 
   
                 
					</td>
				</tr>
			
				</tbody>
  <?php } ?>  
              </table>
				<!--  end product-table................................... --> 
				</form>

			<!--  end content-table  -->

</div>
			
			
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
<?php
} ?>
