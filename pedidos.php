<?php
include"header2.php";
?>
</div>
<!--  start nav-outer-repeat................................................... END -->

  <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Listado Productos</h1>
	</div>
	<!-- end page-heading -->

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
			
			
				<form id="mainform" action="">
				<table id="product-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				<tbody><tr>
					<th class="table-header-check"><a id="toggle-all"></a> </th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Nombre</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Cantidad</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Precio</a></th>
					<th class="table-header-repeat line-left"><a href="">Proveedor</a></th>
					
					<th class="table-header-options line-left"><a href="">Opcion</a></th>
				</tr>
				<tr>
					<td><input class="ui-helper-hidden-accessible" type="checkbox"><span class="ui-checkbox"></span></td>
					<td>PASTEL DE CARNE</td>
					<td>100</td>
					<td>200 Bs</td>
					<td><a href="">LA VILLA MAYOR</a></td>
					
					<td class="options-width">
					
					<a href="" class="icon-5 info-tooltip"></a>
					</td>
				</tr>
				<tr>
					<td><input class="ui-helper-hidden-accessible" type="checkbox"><span class="ui-checkbox"></span></td>
					<td>PASTEL DE POLLO</td>
					<td>120</td>
					<td>200 Bs</td>
					<td><a href="">LA VILLA MAYOR</a></td>
					
					<td class="options-width">
					
					<a href="" class="icon-5 info-tooltip"></a>
					</td>
				</tr>
				
				<tr>
					<td><input class="ui-helper-hidden-accessible" type="checkbox"><span class="ui-checkbox"></span></td>
					<td>PASTEL DE QUESO</td>
					<td>50</td>
					<td>200 Bs</td>
					<td><a href="">LA VILLA MAYOR</a></td>
					
					<td class="options-width">
					
					<a href="" class="icon-5 info-tooltip"></a>
					</td>
				</tr>
				
				
				
				</tbody></table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		
			
			
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
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
include"footer2.php";
?>