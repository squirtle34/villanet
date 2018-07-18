<?php	
include"conexion/aut_config.inc.php";	
if($_GET['id']==2)
{ 
 
 
$detalle=mysql_query("SELECT * FROM ventasdetalle where id_venta='".$_GET['op']."'");




?><link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
	<table id="product-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				<tbody><tr>
                	<th class="table-header-repeat line-left minwidth-1"><a href="#">Producto</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Cantidad</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Precio Unitario</a></th>
					<th class="table-header-repeat line-left"><a href="#">Total</a></th>
					
				 
				</tr>
                <?php
                while($datelleprod=mysql_fetch_array($detalle)) {

$nombreproducto=mysql_query("SELECT * FROM productos where id='".$datelleprod['id_productos']."'");
$nombrep=mysql_fetch_array($nombreproducto);
				
				?>
                
                <tr>
					<td><?php echo strtoupper($nombrep['descripcion']); ?></td>
					<td><?php echo $datelleprod['cant']; ?></td>
					<td><?php echo $datelleprod['precio']; ?></td>
					<td><?php echo $subtotal=$datelleprod['cant']*$datelleprod['precio'];  $total=$total+$subtotal; ?></td>
                    </tr><?php }?>
                    <tr><td colspan="3"></td><td colspan="2"><?php print $total;?></td></tr>
 </tbody></table>
 


<?php
}  
?>
