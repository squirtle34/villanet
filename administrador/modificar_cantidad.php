<?php
$op1=$_GET['op1'];
$op=$_POST['op'];
if($op==1)
{
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];
$n_producto=mysql_query("SELECT * FROM productos where id='$producto'");
$datpro=mysql_fetch_array($n_producto);
$cantd=$datpro['cantidad'];
$fecha=date("Y-m-d");
if($op1==1){
$cant1=$datpro['cantidad']+$cantidad;
mysql_query("UPDATE productos SET  cantidad='$cant1' where id='$producto'");
mysql_query("INSERT INTO detalle_ingreso values (null,'$producto','$fecha','$op1','$cantidad')");
}

if($op1==2){
if($cantidad >$cantd ){ print '<script>alert("Se excedio en cantidad de existencia")</script>'; $a=3;}else {
$cant1=$cantidad-$datpro['cantidad'];
mysql_query("UPDATE productos SET  cantidad='$cant1' where id='$producto'");
mysql_query("INSERT INTO detalle_ingreso values (null,'$producto','$fecha','$op1','$cantidad')");
}

}

?>
<div id="message-green">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="green-left"><?php if($a==3){ print "ERROR EN LA CANTIDAD";} else {?>Cantidad modificada correctamente. <?php }?></td>
					<td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
<?php }?>
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
            <h1><?php if($op1==1) {print "Ingreso de Producto";} else {print "Salida de Insumos";}?></h1></div>
		
			
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->

		<!-- start id-form -->
	 <form action="" method="post">
        <table id="id-form" border="0" cellpadding="0" cellspacing="0">
		<tbody>
        
      
        	<tr><input type="hidden" name="op" value="1">
        
        			<th valign="top">Producto:</th>
			<td>
<select name="producto"  class="inp-form" required style="width:200px;height:33px;font-size: 12px;" >
  <option value=""   >Elija el Producto</option>
<?php

$consulta=mysql_query("SELECT id,descripcion,cantidad FROM productos where disponibilidad='$op1' order by  descripcion asc");
while($datos=mysql_fetch_array($consulta))
{  print '<option value="'.$datos[id].'"  >'.strtoupper($datos[descripcion]).'</option>';}

?>


         
  
            </select>

  </td>
			<td></td>
		</tr>
        
        	 <tr>
			<th valign="top">Cantidad:</th>
					<td>
<input name="cantidad"  class="inp-form" id="cantidad" required  ></td>
			
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
     
