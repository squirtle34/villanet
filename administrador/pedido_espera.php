<?php
$op2=$_POST['op2'];
if($op2=='')
{
$op=$_GET['op'];

$despache=mysql_query("SELECT * FROM ventas where status='$op' order by fecha desc");
}
else {

	 $desde=$_POST['y'].'-'.$_POST['m'].'-'.$_POST['d'];
	 $hasta=$_POST['y1'].'-'.$_POST['m1'].'-'.$_POST['d1'];
	$op=$_GET['op'];
	$despache=mysql_query("SELECT * FROM ventas where status='$op' and fecha between '$desde' and '$hasta' order by fecha desc");
	
	}
if(mysql_num_rows($despache)==0)
{
?>
<center><img src="images/unnotice.png" width="508"></center>
<?php
}

if(mysql_num_rows($despache)<>0)
{


?>
	<!--  start page-heading -->
	
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
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
            <div class="step-dark">
            <h1>Listado de Pedidos  <?php if($op==1) {?> por Despachar<?php } else {print "Despachado";}?></h1></div>
			<br>
			
            
           <form action="" method="post"> <input type="hidden" name="op2" value="1">
        <table id="id-form" border="0" cellpadding="0" cellspacing="0">
		<tbody>
			<tr  valign="top">
			<th>Desde</th>	<th>
		 
				
				<select name="d" class="styledselect-day">
					<option value="">dia</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
				</th>
				<th>
					<select name="m" class="styledselect-month">
						<option value="">mes</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
				</th>
				<th>
					<select  name="y"  class="styledselect-year">
						<option value="">yyyy</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
					</select>
				 
				</th>
				 
			</tr>
            
            <tr  valign="top">
			<th>Hasta</th>	<th>
		 
				
				<select name="d1" class="styledselect-day">
					<option value="">dia</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
				</th>
				<th>
					<select name="m1" class="styledselect-month">
						<option value="">mes</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
				</th>
				<th>
					<select  name="y1"  class="styledselect-year">
						<option value="">yyyy</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
					</select>
				 
				</th>
				 
			</tr>
            <tr>
	 
		<th valign="top" colspan="4" align="left">
			<input value="Buscar" class="form-submit" type="submit">
	 </th>
	</tr>
            </tbody>
			</table>
		
 </form>
				<table id="product-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				<tbody><tr>
                	<th class="table-header-repeat line-left minwidth-1"><a href="#">Fecha</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Nombre del Cliente</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="#">Nº de Orden</a></th>
					<th class="table-header-repeat line-left"><a href="#">Total</a></th>
					
					<th class="table-header-options line-left"><a href="#">Opcion</a></th>
				</tr>

<?php while($general=mysql_fetch_array($despache))
{

$nombre=mysql_query("SELECT * FROM persona where rifc=".$general['cliente']."");
$nombre_cliente=mysql_fetch_array($nombre);
?>
				<tr>
					<td><?php echo $general['fecha']; ?></td>
					<td><?php echo $nombre_cliente['razon_social']; ?></td>
					<td><?php echo $general['n_control']; ?></td>
					<td><?php echo $general['total']; ?></td>
					
					<td class="options-width">
 
                    
                    <a href="#"   onclick='window.open("detalle_pedido.php?id=2&op=<?php print $general[0];?>","","width=850,height=400");' class="icon-5 info-tooltip showPopup"></a>
                 
					</td>
				</tr>
			
				</tbody>
  <?php } ?>  
              </table>
				<!--  end product-table................................... --> 
				</form>

			<!--  end content-table  -->

</div>
			
			
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
<?php
} ?>
