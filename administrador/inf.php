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
            <h1>Informacion</h1></div>
		
			
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	<?php

if($_GET['x']=="1"){
		mysql_query("delete from informacion where id='".$_GET['ncontrol']."'");}

	 $op=$_POST['op'];
	 if($op==1) {


$titulo=$_POST['titulo'];
$informacion=$_POST['informacion'];


$insert="insert into informacion (titulo, informacion) values ('$titulo', '$informacion')";  
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
	
		}
	
	?>
		<!-- start id-form -->
	 <form action="" method="post">
        <table id="id-form" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr><input type="hidden" name="op" value="1">
			<th valign="top">Titulo:</th>
			<td><input class="inp-form" type="text" name="titulo" required ></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Informacion:</th>
			<td><textarea name="informacion" required></textarea></td>
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
     
	 
	 <br>  <br>        

				<table id="product-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				<tbody><tr>
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Titulo</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Informacion</a></th>
                    
					<th class="table-header-options line-left"><a href="#">Opcion</a></th>
				</tr>
  <?php 
  $proveedor=mysql_query("SELECT * FROM informacion");
  while($general=mysql_fetch_array($proveedor))
{

  
  ?>
				<tr>
					<td><?php echo $general['titulo']; ?></td>
                    <td><?php echo $general['informacion']; ?></td>
					
					<td class="options-width">
					
					<a href="index.php?url=104&ncontrol=<?php  echo $general['id'];?>&x=1"     title="ELIMINAR" class="icon-1 info-tooltip showPopup"></a>
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
					
				Informacion para publicidad y promociones	
					
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



