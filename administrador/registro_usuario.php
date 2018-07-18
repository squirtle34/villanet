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
            <h1> Datos de usuario</h1></div>
		
			
			<div class="clear"></div>
		</div>
		<!--  end step-holder --><?php 
if ($_GET['edit']==1)
{
	$id=$_GET['ncontrol'];
	$clave=md5(123);
	mysql_query("UPDATE usuarios SET clave='$clave' where id='$id' ");
print'<script>
alert("Contraseña Cambiada, su nueva clave es 123");</script>';
	}
?>        

	<?php $op=$_POST['op'];
	 if($op==1) {


$rif=$_POST['rif'];
$usuario=$_POST['usuario'];
$clave=md5($_POST['clave']);
$nivel=$_POST['nivel'];

$insert="insert into usuarios (rif, usuario, clave, nivel) values ('$rif', '$usuario', '$clave', '1')";  
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
					<td class="red-left">Error.  Datos de Usuarios Repetidos. </td>
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
			<td><input class="inp-form" type="text" name="rif" required ></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Usuario:</th>
			<td><input class="inp-form" type="text" name="usuario" required></td>
			<td>
			
			</td>
		</tr>
		<tr>
			<th valign="top">Clave:</th>
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
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Usuario</a></th>
                    <th class="table-header-repeat line-left minwidth-1"><a href="#">Clave </a></th>
                    <th class="table-header-repeat line-left minwidth-1"><a href="#">Nivel </a></th>
					<th class="table-header-options line-left"><a href="#">Opcion</a></th>
				</tr>
  <?php 
  $usuarios=mysql_query("SELECT * FROM usuarios");
  while($general=mysql_fetch_array($usuarios))
{

  
  ?>
				<tr>
					<td><?php echo $general['rif']; ?></td>
                    <td><?php echo $general['usuario']; ?></td>
					<td> <?php echo $general['clave']; ?></td>
					<td> <?php echo $general['nivel']; ?></td>		
					<td class="options-width">
					
					<a href="index.php?url=2&edit=1&ncontrol=<?php  echo $general['id'];?>"     title="Cambio de Clave" class="icon-1 info-tooltip showPopup"></a>
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



