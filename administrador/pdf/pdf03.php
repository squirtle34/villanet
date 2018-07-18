<?php
include('class.ezpdf.php');
include"../conexion/aut_config.inc.php";
$pdf =& new Cezpdf('a4');
$pdf->selectFont('fonts/courier.afm');
$datacreator = array (
					'Title'=>'Pedido Por Despachar',
					'Author'=>'Pedido Por Despachar',
					'Subject'=>'Pedido Por Despachar',
					'Creator'=>'Pedido Por Despachar',
					'Producer'=>'Pedido Por Despachar'
					);
$pdf->addInfo($datacreator);

$detalles=mysql_query("SELECT  *FROM persona where rifc ='".$_GET['id']."' ");
 
$detalle=mysql_query("SELECT  *FROM ventasdetalle,productos where id_venta='".$_GET['op']."' and productos.id=ventasdetalle.id_productos");

$totEmp = mysql_num_rows($detalle);
$ixx = 0;
while($datatmp = mysql_fetch_assoc($detalle)) {
    $ixx = $ixx+1;
	$precio=$datatmp[cant]*$datatmp[precio];
    $data[] = array_merge($datatmp, array('num'=>$ixx), array('total'=>$precio));
$toal=$toal+$precio;
}


while($datatmp1 = mysql_fetch_assoc($detalles)) {
 	 
    $data1[] = array_merge($datatmp1);
 
}


$titles1 = array('rifc'=>'<b>RIF</b>', 'razon_social'=>'<b>RAZON SOCIAL</b>' , 'direccion'=>'<b>DIRECCION</b>');


$titles = array('num'=>'<b>Num</b>', 'descripcion'=>'<b>Descripcion</b>', 'cant'=>'<b>Cantidad</b>' , 'precio'=>'<b>Precio</b>' , 'total'=>'<b>Subtotal</b>');

    $options = array(
                
                'xOrientation'=>'center',
                'width'=>500,
                'fontSize'=>10
            );
$pdf->ezImage("mini-logo.jpeg", 0, 420, 'none', 'left');
$pdf->ezText("<b>Pedidos a Despachar</b>\n",16);
$pdf->ezText("Datos del Cliente\n",12);
$pdf->ezTable($data1,$titles1,'',$options );
$pdf->ezText("\n\n\n",10);
$pdf->ezText("Lista de Productos\n",12);
$pdf->ezTable($data,$titles,'',$options );
$pdf->ezText("\n<b>Total:</b> ".$toal."\n\n",10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"),10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n",10);
$pdf->ezStream();
?>

