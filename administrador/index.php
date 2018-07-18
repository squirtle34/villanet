<?php
include("conexion/aut_verifica.inc.php");
include("header2.php");
?>

<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

  <div class="clear"></div>

<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

 <?php
 $menus=$_SERVER['REQUEST_URI'];
 if($menus ==null )
 {
?>
	<div id="page-heading">
		<h1>La Empresa</h1>
	</div>
	<!-- end page-heading -->

<?php
}


switch($menus)
{
	default : include("principal.php"); break;
	case 1: include("registro_cliente.php"); break;
	case 2: include("registro_usuario.php"); break;
	case 3: include("registro_proveedores.php"); break;
	case 4: include("registro_productos.php"); break;
	case 5: include("registro_compras.php"); break;
	case 6: include("registro_ventas.php"); break;
	case 7: include("registro_ventas_admin.php"); break;
	case 8: include("registro_pedidos_admin.php"); break;
	case 9: include("ccompra.php"); break;
	case 10: include("cpespera.php"); break;
	case 11: include("cpcompletados.php"); break;
	case 12: include("ventas.php"); break;
		case 13: include("pedido_espera.php"); break;
		case 14: include("pedido_ventas.php"); break;
		case 15: include("pedido_clientes.php"); break;
		case 16: include("registro_grafico.php"); break;
		case 20: include("editar_cliente.php"); break;
		case 21: include("editar_proveedor.php"); break;
		case 22: include("editar_producto.php"); break;
		case 23: include("registro_grafico_compras.php"); break;
		case 24: include("modificar_cantidad.php"); break;
		case 27: include("cambio_clave.php"); break;
		case 104: include("inf.php"); break;
		case 105: include("contacto.php"); break;
  case 106: include("contacto1.php"); break;


	}
?>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>

<?php
include"footer2.php";
?>
