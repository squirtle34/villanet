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
            <h1>Registro de Clientes</h1></div>
		
			
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	<?php $op=$_POST['op'];
	 if($op==1) {


$rifc=$_POST['rifc'];
$razon_social=$_POST['razon_social'];
$direccion=$_POST['direccion'];
$tlf=$_POST['tlf'];
$correo=$_POST['correo'];
$tipo_persona=$_POST['tipo_persona'];
$usuario=$rifc;
$clave=md5($_POST['clave']);

$insert1=mysql_query("insert into usuarios (rif, usuario, clave, nivel) values ('$rifc', '$usuario', '$clave', '2')"); 

$insert="insert into persona (rifc, razon_social, direccion, tlf, correo, tipo_persona) values ('$rifc', '$razon_social', '$direccion', '$tlf', '$correo', '$tipo_persona')";  
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
					<td class="red-left">Error.  Datos de Clientes Repetidos. </td>
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
			<th valign="top">Cedula/Rif:</th>
			<td><input class="inp-form" type="text" name="rifc" required ></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Razon Social:</th>
			<td><input class="inp-form" type="text" name="razon_social" required></td>
			<td>
			
			</td>
		</tr>
		<tr>
			<th valign="top">Telefono:</th>
			<td><input class="inp-form" type="text" name="tlf" pattern="^[0-9]*(\.[0-9]*)?$" required></td>
			<td>
			
			</td>
		</tr>

		<tr>
			<th valign="top">Correo:</th>
			<td><input class="inp-form" type="email" name="correo" required></td>
			<td>
			
			</td>
		</tr>

		<tr>
			<th valign="top">Direccion fiscal:</th>
			<td><input class="inp-form" type="text" name="direccion" required></td>
			<td>
			
			</td>
		</tr>

		<tr>
			<th valign="top">Tipo de Persona:</th>
			<td><select name="tipo_persona" required class="styledselect_form_1">
            <option value="">Elija Una Opcion</option>
            <option value="1">Natural</option>
            <option value="2">Jurídica</option>
            </select></td>
			<td>
			
			</td>
		</tr>
		
        
		<tr>
			<th valign="top">Contraseña:</th>
			<td><input class="inp-form" type="password" name="clave" required></td>
			<td>
			
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
					<th class="table-header-repeat line-left minwidth-1"><a href="#">RIF</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Nombre Cliente</a></th>
                    <th class="table-header-repeat line-left minwidth-1"><a href="#">Direccion </a></th>
					<th class="table-header-repeat line-left"><a href="#">Telefono</a></th>
					<th class="table-header-repeat line-left"><a href="#">Correo</a></th>
					<th class="table-header-options line-left"><a href="#">Opcion</a></th>
				</tr>
  <?php 
  $clientes=mysql_query("SELECT * FROM persona");
  while($general=mysql_fetch_array($clientes))
{

  
  ?>
				<tr>
					<td><?php echo $general['rifc']; ?></td>
                    <td><?php echo $general['razon_social']; ?></td>
					<td> <?php echo $general['direccion']; ?></td>	
                    <td><?php echo $general['tlf']?></td>
					 <td><?php echo $general['correo']?></td>
					<td class="options-width">
					
					<a href="index.php?url=20&ncontrol=<?php  echo $general['rifc'];?>"     title="Editar" class="icon-1 info-tooltip showPopup"></a>
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



