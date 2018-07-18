 <script type="text/javascript">
function ver(num){
if(num>0){
var s1=document.getElementById('cantidad');
s1.options[0]=new Option('Cantidad','','');
for(var i=1;i<=num;i++){
s1.options[i]=new Option(i,i,i);
    }
}
else { var s1=document.getElementById('cantidad');
s1.options[0]=new Option('Cantidad','','');}

}
</script>
<?php
 $op=$_POST['op'];
$eli=$_GET['eli'];
if($op=='' && $eli=='') {
$n_control=mysql_query("SELECT n_control FROM compra order by id desc limit 0,1");
$num=mysql_fetch_array($n_control);
 $n_control=$num[n_control]+1;
}
if($op==1)
{
 $n_control=$ncontrol=$_POST['ncontrol'];
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];



$n_control2=mysql_query("SELECT * FROM compra where n_control='$ncontrol'");
$num=mysql_fetch_array($n_control2);
$contar=mysql_num_rows($n_control2);

$n_producto=mysql_query("SELECT * FROM productos where id='$producto'");
$datpro=mysql_fetch_array($n_producto);
$precio=$_POST['precio'];
$cant1=$datpro['cantidad'];
$total=$cantidad*$precio;
$id_proveedor=$datpro[id_proveedor];
$total1=$num[total];
$cantidadtotal=$cant1+$cantidad;
$monto=$total+$total1;
$fecha=date("Y-m-d");
if($contar==0){
$sql=mysql_query("INSERT INTO compra (rif_proveedor,fecha,n_control,total) values('$id_proveedor','$fecha','$ncontrol','$monto')"); 
mysql_query("UPDATE productos SET  cantidad='$cantidadtotal',precio='$precio' where id='$producto'");
}
else { mysql_query("UPDATE compra SET  total='$monto' where n_control='$ncontrol'");}
$sql2=mysql_query("INSERT INTO compradetalle (id_compra,id_producto,precio,cant) values('$ncontrol','$producto','$precio','$cantidad')");
mysql_query("UPDATE productos SET  cantidad='$cantidadtotal'precio='$precio' where id='$producto'");
$detalles=mysql_query("SELECT * FROM compra,compradetalle where id_compra='$ncontrol' and id_compra=n_control");
$contar1=mysql_num_rows($detalles);
}
if($eli==1)
{
 $n_control=$ncontrol=$_GET['ncontrol'];
 $id=$_GET['id'];   $idp=$_GET['idp']; $cantidades=$_GET['idc'];
$n_producto=mysql_query("SELECT * FROM productos where id='$idp'");
$datpro=mysql_fetch_array($n_producto);
$cant1=$cantidades-$datpro['cantidad'];
mysql_query("UPDATE productos SET  cantidad='$cant1' where id='$idp'");
mysql_query("DELETE FROM compradetalle WHERE id='$id'");
$detalles=mysql_query("SELECT * FROM compra,compradetalle where id_compra='$ncontrol' and id_compra=n_control");
$contar1=mysql_num_rows($detalles);
}
?>	
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
            <h1>Compra de Productos</h1></div>
		
			
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->

		<!-- start id-form -->
	 <form action="" method="post">
        <table id="id-form" border="0" cellpadding="0" cellspacing="0">
		<tbody>
        
       

<tr>
			<th valign="top">Numero de Control:</th>
			<td><input class="inp-form" type="text" readonly value="<?php print $n_control;?>" name="ncontrol" required></td>
			<td>
			
			</td>
		</tr>
        	<tr><input type="hidden" name="op" value="1">
        
        			<th valign="top">Producto:</th>
			<td>
<select name="producto"  class="inp-form" required style="width:200px;height:33px;font-size: 12px;" >
  <option value="" >Elija el Producto</option>
<?php
$consulta=mysql_query("SELECT id,descripcion,cantidad FROM productos where disponibilidad='2' order by  descripcion asc");
while($datos=mysql_fetch_array($consulta))
{  print '<option value="'.$datos[id].'" >'.strtoupper($datos[descripcion]).'</option>';}

?>


         
  
            </select>

  </td>
			<td></td>
		</tr>
        
        		<tr>
			<th valign="top">Cantidad:</th>
			<td>
<input name="cantidad"  class="inp-form" id="cantidad" required type="number" >
</select></td>
			<td>
			
			</td>
		</tr>
        

	<tr>
			<th valign="top">Precio:</th>
			<td>
<input name="precio"  class="inp-form" id="Precio" required type="number" >
</select></td>
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
     
	


<?php if($op==1 && $contar1=1 or $eli==1){?>

				 <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
				 
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Nombre</a>	</th>
					<th class="table-header-repeat line-left"><a href="#">Proveedor</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Cantidad</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Precio</a></th>
					<th class="table-header-repeat line-left"><a href="#">Subtotal</a></th>
					
					
					<th class="table-header-options line-left"><a href="#">Opcion</a></th>
				</tr>
<?php
while($detalles_producto=mysql_fetch_array($detalles)){
$producto=$detalles_producto[id_producto];
$cantidad=$detalles_producto[precio];
$precio=$detalles_producto[cant];
$n_producto=mysql_query("SELECT * FROM productos where id='$producto'");
$datpro=mysql_fetch_array($n_producto);


?>
				<tr>
					 
					<td><?php print $datpro[4];?></td>
					<td><?php print $datpro[1];?></td>
					
					<td><?php print $precio;?></td><td><?php print $cantidad;?></td>
					<td><?php print $precio*$cantidad; $general=$general+($precio*$cantidad);?></td>
					 
				  
					<td class="options-width"> 
					<a href="index.php?menu=1&url=5&idc=<?php print $precio;?>&idp=<?php print $datpro[0];?>&ncontrol=<?php print $n_control;?>&eli=1&id=<?php print $detalles_producto[5];?>"   title="Eliminar" class="icon-2 info-tooltip"></a> 
					</td>
				</tr> 
<?php }?>	
<tr>
					 <td colspan="4" style="text-align:right">Total</td>
				 
					<td coslpan="2"><?php print $general;?>  
					</td>
				</tr> 
			</table>
		
<?php }?>
   
  
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



