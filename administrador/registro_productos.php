<?php
$consulta=mysql_query("SELECT * FROM proveedores order by razon_social asc");
while($datos=mysql_fetch_array($consulta))
{ $array.="'".$datos[razon_social]."',";}

?>

<script type="text/javascript">
$(function(){
 
$("#prove").autocomplete({
	source:[<?php print $array?>],
	fillin:true
});


});
</script>  
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
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody><tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
		<div id="step-holder">
			
			<div class="step-dark">
            <h1>Registro de Productos</h1></div>
		
			
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	<?php $op=$_POST['op'];
	 if($op==1) {


$descripcion=$_POST['descripcion'];
$proveedor=$_POST['proveedor'];
$cantidad=$_POST['cantidad'];
$disponibilidad=$_POST['disponibilidad'];
$precio=$_POST['precio'];
$consulta=mysql_query("SELECT * FROM proveedores where razon_social='$proveedor'");
$datos=mysql_fetch_array($consulta);
$id_Proveedor=$datos[rif];
$insert="insert into productos (descripcion, proveedor, cantidad, disponibilidad,id_proveedor,precio) values ('$descripcion', '$proveedor', '$cantidad', '$disponibilidad','$id_Proveedor','$precio')";  
$a=mysql_query($insert);
if($a) { ?>
	<div id="message-green">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="green-left">Datos Guardados correctamente en el sistema. </td>
					<td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div><?php }
if(!$a) {
	?>
		<div id="message-red">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="red-left">Error.  Datos de Productos Repetidos. </td>
					<td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
	
	<?php
	}		
		}
	
	?>
		<!-- start id-form -->
	 <form action="" method="post">
        <table id="id-form" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr><input type="hidden" name="op" value="1">
        
        		<tr>
			<th valign="top">Descripcion:</th>
			<td>

<textarea rows="" cols="" class="form-textarea" name="descripcion" required></textarea>  </td>
			<td>
			
			</td>
		</tr>
        
        			<th valign="top">Proveedor:</th>
			<td><input   id="prove" type="text" name="proveedor" required > </td>
			<td></td>
		</tr>
        
        		<tr>
			<th valign="top">Cantidad:</th>
			<td><input class="inp-form" type="text" name="cantidad" required></td>
			<td>
			
			</td>
		</tr>
        <tr>
			<th valign="top">Precio:</th>
			<td><input class="inp-form" type="text" name="precio" required></td>
			<td>
			
			</td>
		</tr>

		<tr>
			<th valign="top">Disponibilidad:</th>
			<td>
<select name="disponibilidad"  class="inp-form" required style="width:200px;height:33px;font-size: 12px;">
  <option value="">Elija Una Opcion</option>
  <option value="1">Venta</option>
  <option value="2">Compra</option>
</select>
 </td>
			<td>
			
			</td>
		</tr>



		
			
			</td>
		</tr>
		
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input value="Enviar" class="form-submit" type="submit">
			<input value="Cancelar" class="form-reset" type="reset">
		</td>
		<td></td>
	</tr>
	</tbody></table>
    </form>
     
	 
	
<table id="product-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				<tbody><tr>
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Descripcion</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Proveedor</a></th>
                    <th class="table-header-repeat line-left minwidth-1"><a href="#">Cantidad </a></th> 
                    <th class="table-header-repeat line-left"><a href="#">Precio</a></th>
                    <th class="table-header-repeat line-left"><a href="#">Disponibilidad</a></th>
					<th class="table-header-options line-left"><a href="#">Opcion</a></th>
				</tr>
  <?php 
  $productos=mysql_query("SELECT * FROM productos");
  while($general=mysql_fetch_array($productos))
{

  
  ?>
				<tr>
					<td><?php echo $general['descripcion']; ?></td>
                    <td><?php echo $general['proveedor']; ?></td>
					<td> <?php echo $general['cantidad']; ?></td>	
                     
                    <td><?php echo $general['precio']?></td>
                     <td><?php if ($general['disponibilidad']=='1'){echo "VENTA";}
					 if ($general['disponibilidad']=='2'){echo "COMPRA";}
					 ?></td>
					<td class="options-width">
					
					<a href="index.php?url=22&ncontrol=<?php  echo $general['id'];?>"     title="Editar" class="icon-1 info-tooltip showPopup"></a>
					</td>
				</tr>
	   <?php 
}
?>			    
    
    
    
	</tbody></table>	
   
  
	<!-- end id-form  -->
 
	</td>
	<td>

	<!--  start related-activities -->
	<div id="related-activities">
		
		<!--  start related-act-top -->
		<div id="related-act-top">
		<img src="images/forms/header_related_act.jpeg		" alt="" height="43" width="271">
		</div>
		<!-- end related-act-top -->
		
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
		
			<!--  start related-act-inner -->
			<div id="related-act-inner">
			
				<div class="left"><a href=""><img src="images/forms/icon_plus.gif" alt="" height="21" width="21"></a></div>
				<div class="right">
					
					Zona de acceso para registro de Usuarios	
					
				</div>
				
				<div class="clear"></div>
				
				<div class="clear"></div>
				
			</div>
			<!-- end related-act-inner -->
			<div class="clear"></div>
		
		</div>
		<!-- end related-act-bottom -->
	
	</div>
	<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" alt="blank" height="1" width="695"></td>
<td></td>
</tr>
</tbody></table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</tbody></table>



