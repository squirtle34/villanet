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
            <h1>Cambio de Clave</h1></div>
		
			
			<div class="clear"></div>
		</div>
 
<form action="cambiar_clave.php" method="post">
        <table id="id-form" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr><input type="hidden" name="op" value="1">
<input class="inp-form" type="hidden" name="id" readonly value="<?php print $_SESSION['usuario_id'];?>" >
			<th valign="top">Cedula/Rif:</th>
			<td><input class="inp-form" type="text" name="rif" readonly value="<?php print $_SESSION['usuario_login'];?>" ></td>
			<td></td>
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
			<input value="Cambiar" class="form-submit" type="submit"> 
		</td>
		<td></td>
	</tr>
	</tbody></table>
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
			
				 Cambio Clave
				
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
