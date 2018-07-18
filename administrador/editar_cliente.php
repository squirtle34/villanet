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
            <h1>Formulario de Registro de Clientes</h1></div>
		
			
			<div class="clear"></div>
		</div>
<?php
 
$id=$_GET['ncontrol'];

 $clientes=mysql_query("SELECT * FROM persona where rifc='$id'");
 $general=mysql_fetch_array($clientes);
?>
 
<form action="" method="post">
        <table id="id-form" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr><input type="hidden" name="op" value="1">
			<th valign="top">Cedula/Rif:</th>
			<td><input class="inp-form" type="text" value="<?php echo $general['rifc']; ?>" name="rifc" required readonly ></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Razon Social:</th>
			<td><input class="inp-form" type="text" value="<?php echo $general['razon_social']; ?>" name="razon_social" required></td>
			<td>
			
			</td>
		</tr>
		<tr>
			<th valign="top">Telefono:</th>
			<td><input class="inp-form" type="text" value="<?php echo $general['tlf']; ?>" name="tlf" required></td>
			<td>
			
			</td>
		</tr>

		<tr>
			<th valign="top">Correo:</th>
			<td><input class="inp-form" type="email" value="<?php echo $general['correo']; ?>" name="correo" required></td>
			<td>
			
			</td>
		</tr>

		<tr>
			<th valign="top">Direccion fiscal:</th>
			<td><input class="inp-form" type="text" value="<?php echo $general['direccion']; ?>" name="direccion" required></td>
			<td>
			
			</td>
		</tr>

		<tr>
			<th valign="top">Tipo de Persona:</th>
			<td><select name="tipo_persona" required class="styledselect_form_1">
            <option value="">Elija Una Opcion</option>
            <option value="1" <?php if ($general['tipo_persona'] = '1') { echo "selected"; }?> >NATURAL</option>
            <option value="2" <?php if ($general['tipo_persona'] = '2') { echo "selected"; }?>>JURÍDICA</option>
            </select></td>
			<td>
			
			</td>
		</tr>

        
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
        <input type="hidden" value="guardar" name="op">
			<input value="Modificar" class="form-submit" type="submit">
			<input value="Cancelar" class="form-reset" type="reset">
		</td>
		<td></td>
	</tr>
	</tbody></table>
    </form>

<?php 
$op=$_POST['op'];

if ($op=='guardar')
{
$rifc=$_POST['rifc'];
$razon_social=$_POST['razon_social'];
$tlf=$_POST['tlf'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$tipo_persona=$_POST['tipo_persona'];

	$actualizar="UPDATE persona set rifc='$rifc', razon_social='$razon_social', tlf='$tlf', correo='$correo', direccion='$direccion', tipo_persona='$tipo_persona' where rifc='$rifc' ";
	mysql_query($actualizar);
	
	echo "<script>alert('Datos guardados');top.location.href='index.php?menu=1&url=1'</script>";
	
	
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
    