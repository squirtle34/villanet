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
<?php
 
$id=$_GET['ncontrol'];

 $productos=mysql_query("SELECT * FROM productos where id='$id'");
 $general=mysql_fetch_array($productos);
?>
 
<form action="" method="post">
        <table id="id-form" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr><input type="hidden" name="op" value="1">
        
        		<tr>
			<th valign="top">Descripcion:</th>
			<td>

<textarea rows="" cols="" class="form-textarea" name="descripcion" required> <?php echo $general['descripcion']; ?></textarea>  </td>
			<td>
			
			</td>
		</tr>
        
        			<th valign="top">Proveedor:</th>
			<td><input  class="inp-form"  type="text" value="<?php echo $general['proveedor']; ?>" name="proveedor" required readonly > </td>
			<td></td>
		</tr>
        
        		<tr>
			<th valign="top">Cantidad:</th>
			<td><input class="inp-form" type="text"  value="<?php echo $general['cantidad']; ?>" name="cantidad" required></td>
			<td>
			
			</td>
		</tr>
        
                		<tr>
			<th valign="top">Precio:</th>
			<td><input class="inp-form" type="text" value="<?php echo $general['precio']; ?>" name="precio" required></td>
			<td>
			
			</td>
		</tr>
        

		<tr>
			<th valign="top">Disponibilidad:</th>
			<td>
<select name="disponibilidad"  class="styledselect_form_1">
  <option value="" >Elija Una Opcion</option>
  <option value="1" <?php if ($general['disponibilidad']=='1') {echo "selected";}?>>Venta</option>
  <option value="2" <?php if ($general['disponibilidad']=='2') {echo "selected";}?>>Compra</option>
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
        <input type="hidden" value="guardar" name="op">
        <input type="hidden" value="<?php echo $general['id']; ?>" name="id_producto">
			<input value="Enviar" class="form-submit" type="submit">
			<input value="Cancelar" class="form-reset" type="reset">
            <br>  <br>  <br>    
		</td>
		<td></td>
	</tr>
	</tbody></table>
    </form>

<?php 
$op=$_POST['op'];

if ($op=='guardar')
{
$id_producto=$_POST['id_producto'];
$descripcion=$_POST['descripcion'];
$proveedor=$_POST['proveedor'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];
$disponibilidad=$_POST['disponibilidad'];

	$actualizar="UPDATE productos set descripcion='$descripcion', proveedor='$proveedor', cantidad='$cantidad', precio='$precio', disponibilidad='$disponibilidad' where id='$id_producto' ";
	mysql_query($actualizar);
	
	echo "<script>alert('Datos guardados');top.location.href='index.php?menu=1&url=4'</script>";
	
	
	}

?>
    
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
    