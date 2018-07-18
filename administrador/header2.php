<?php
include"conexion/aut_verifica.inc.php";

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>LA VILLA MAYOR</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery/jquery.autocomplete.js"></script>
<!--  checkbox styling script -->
<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});

 

});
</script>  
  <style type="text/css">
#apDiv1 {
	position:absolute;
	width:467px;
	height:23px;
	z-index:501999;
	left: 909px;
	top: 62px;
}
</style>

<![if !IE 7]>

<!--  styled select box script version 1 -->

 
 

<![endif]>

<!--  styled select box script version 2 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {

      $("input.file_1").filestyle({ 
          image: "images/forms/choose-file.gif",
          imageheight : 21,
          imagewidth : 78,
          width : 310
      });
  });
</script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 


<!--  date picker script -->
<link rel="stylesheet" href="css/datePicker.css" type="text/css" />
<script src="js/jquery/date.js" type="text/javascript"></script>
<script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{

// initialise the "Select date" link
$('#date-pick')
	.datePicker(
		// associate the link with a date picker
		{
			createButton:false,
			startDate:'01/01/2005',
			endDate:'31/12/2020'
		}
	).bind(
		// when the link is clicked display the date picker
		'click',
		function()
		{
			updateSelects($(this).dpGetSelected()[0]);
			$(this).dpDisplay();
			return false;
		}
	).bind(
		// when a date is selected update the SELECTs
		'dateSelected',
		function(e, selectedDate, $td, state)
		{
			updateSelects(selectedDate);
		}
	).bind(
		'dpClosed',
		function(e, selected)
		{
			updateSelects(selected[0]);
		}
	);
	
var updateSelects = function (selectedDate)
{
	var selectedDate = new Date(selectedDate);
	$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
	$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
	$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
	.bind(
		'change',
		function()
		{
			var d = new Date(
						$('#y').val(),
						$('#m').val()-1,
						$('#d').val()
					);
			$('#date-pick').dpSetSelected(d.asString());
		}
	);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );

});
</script>
</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<a href=""><img src="images/mini-logo.jpeg" width="300" height="60" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<!--  start top-search -->
	
 	<!--  end top-search -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">

			<div class="nav-divider"></div>

			<a href="conexion/aut_logout.php" id="logout"><img src="images/shared/nav/nav_logout.jpeg" width="64" height="14" alt="" /></a>
			<div class="nav-divider">&nbsp;</div>
			<div class="clear">&nbsp;</div>
		
			
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->
   <div id="apDiv1"><font color="#FFFFFF" size="+2">Bienvenido <?php echo$_SESSION['usuario_login'];?></font></div>
<?php 
	 

if($_SESSION['usuario_nivel']==0){?>
		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="#nogo"><b>Opciones</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
<div class="select_sub show">
			<ul class="sub">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="index.php?url=105">Correo</a></li>
				<li class="sub_show"><a href="index.php?url=27">Cambiar Clave</a></li> 

			</ul>
		</div>
		</li> 
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select"><li><a href="#nogo"><b>Registro</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="index.php?menu=1&url=2">Usuarios</a></li>
				<li class="sub_show"><a href="index.php?menu=1&url=3">Proveedores</a></li>
				<li><a href="index.php?menu=1&url=1">Clientes</a></li>
				<li><a href="index.php?menu=1&url=4">Productos</a></li>
				<li><a href="index.php?menu=1&url=104">Informacion</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#nogo"><b>Procesos</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="index.php?menu=1&url=5">Compra Productos</a></li>
				<li><a href="index.php?menu=1&url=7">Venta de Productos</a></li>
				<li><a href="index.php?menu=1&url=8">Pedidos por Despachar</a></li>
				<li><a href="index.php?menu=1&url=24&op1=1">Entrada de Productos</a></li>
				<li><a href="index.php?menu=1&url=24&op1=2">Salida de Insumos</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>


		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#nogo"><b>Consultas</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="index.php?menu=1&url=9">Productos Compra</a></li>
				<li><a href="index.php?menu=1&url=13&op=1">Pedidos en Espera</a></li>
				<li><a href="index.php?menu=1&url=13&op=2">Pedidos Completados</a></li>
				<li><a href="index.php?menu=1&url=14">Ventas</a></li>
			 
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#nogo"><b>Graficos</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="index.php?menu=1&url=16">Ventas</a></li>
			    <li><a href="index.php?menu=1&url=23">Compras</a></li>
			</ul>
		</div>




		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>




		<?php } if($_SESSION['usuario_nivel']==1){?>


<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="#nogo"><b>Opciones</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
<div class="select_sub show">
			<ul class="sub">
				<li><a href="index.php">Inicio</a></li>
				<li class="sub_show"><a href="index.php?url=27">Cambiar Clave</a></li> 
			</ul>
		</div>
		</li> 
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select"><li><a href="#nogo"><b>Registro</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				
				<li><a href="index.php?menu=1&url=1">Clientes</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#nogo"><b>Procesos</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				
				<li><a href="index.php?menu=1&url=7">Venta de Productos</a></li>
				<li><a href="index.php?menu=1&url=8">Pedidos por Despachar</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>


		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#nogo"><b>Consultas</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="index.php?menu=1&url=9">Productos Compra</a></li>
				<li><a href="index.php?menu=1&url=13&op=1">Pedidos en Espera</a></li>
				<li><a href="index.php?menu=1&url=13&op=2">Pedidos Completados</a></li>
				<li><a href="index.php?menu=1&url=14">Ventas</a></li>
			 
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#nogo"><b>Graficos</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="index.php?menu=1&url=16">Ventas</a></li>
			    <li><a href="index.php?menu=1&url=23">Compras</a></li>
			</ul>
		</div>




		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>

		<?php } if($_SESSION['usuario_nivel']==2){?>


		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="#nogo"><b>Opciones</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
<div class="select_sub show">
			<ul class="sub">
				<li><a href="index.php">Inicio</a></li>
				<li class="sub_show"><a href="index.php?url=27">Cambiar Clave</a></li> 
			</ul>
		</div>
		</li> 
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select"><li><a href="#nogo"><b>Consultas</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="index.php?menu=1&url=15&op=1">Pedidos</a></li>
				<li><a href="index.php?menu=1&url=15&op=2">Compras</a></li>
				
			 
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#nogo"><b>Procesos</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="index.php?menu=1&url=6">Nuevo Pedido</a></li>
				<li><a href="index.php?menu=1&url=106">Mensajes Administrador</a></li>
			
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		
		<?php }?>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
