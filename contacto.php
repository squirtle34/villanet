<?php
include"header.php";
if($_GET['url']==1){
	mysql_query("insert into contacto (razon_social,telefono,correo,mensaje) values ('".$_POST['razon_social']."','".$_POST['telefono']."','".$_POST['correo']."','".$_POST['mensaje']."')");
	echo"<script>alert('Correo enviado al Administrador');</script>";
}
?>
</div>
<!--  start nav-outer-repeat................................................... END -->

  <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<div id="content">





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
			
			<div class="step-dark"><a href=""><h1>Contacto</h1></a></div>
		
			
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<form action="contacto.php?url=1" method="post">
		<table id="id-form" border="0" cellpadding="0" cellspacing="0">
		<tbody>
		<tr>
			<th valign="top">Razon Social:</th>
			<td><input class="inp-form-error" name="razon_social" type="text" required></td>
			<td>
			
			</td>
		</tr>
		<tr>
			<th valign="top">Telefono:</th>
			<td><input class="inp-form-error" name="telefono" type="text" required></td>
			<td>
			
			</td>
		</tr>

		<tr>
			<th valign="top">Correo:</th>
			<td><input class="inp-form-error" name="correo" type="email" required></td>
			<td>
			
			</td>
		</tr>
        	<tr>
			<th valign="top">Mensaje:</th>
			<td><textarea name="mensaje" required></textarea></td>
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
	<!-- end id-form  -->
</form>
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
					
					Formulario de Contacto con el Administrador	
					
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









 





<div class="clear">&nbsp;</div>

</div>

<?php
include"footer.php";
?>