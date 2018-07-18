<?php // content="text/plain; charset=utf-8"
// $Id: groupbarex1.php,v 1.2 2002/07/11 23:27:28 aditus Exp $
require_once ('grafico/jpgraph.php');
require_once ('grafico/jpgraph_bar.php');
 include"conexion/aut_config.inc.php";
$hasta=$_GET['hasta'];
$desde=$_GET['desde'];

$despache=mysql_query("SELECT * FROM ventas where   fecha between '$desde' and '$hasta' ");
while($datos=mysql_fetch_array($despache)){ 
 
if($datos[mes]=='01')
{
$mes01=$mes01+$datos[total];
}
if($datos[mes]=='02')
{
$mes02=$mes02+$datos[total];
}
if($datos[mes]=='03')
{
$mes03=$mes03+$datos[total];
}
if($datos[mes]=='04')
{
$mes04=$mes04+$datos[total];
}
if($datos[mes]=='05')
{
$mes05=$mes05+$datos[total];
}
if($datos[mes]=='06')
{
$mes06=$mes06+$datos[total];
}
if($datos[mes]=='07')
{
$mes07=$mes07+$datos[total];
}
if($datos[mes]=='08')
{
$mes09=$mes09+$datos[total];
}
if($datos[mes]=='09')
{
$mes09=$mes09+$datos[total];
}
if($datos[mes]=='10')
{
$mes10=$mes10+$datos[total];
}
if($datos[mes]=='11')
{
$mes11=$mes11+$datos[total];
}

if($datos[mes]=='12')
{
$mes12=$mes12+$datos[total];
}

}
 
$items=array($mes01,$mes02,$mes03,$mes04,$mes05,$mes06,$mes07,$mes08,$mes09,$mes10,$mes11,$mes12);





 $datay1=$items;
$datay2=array(25,16,24,5,8,31);
$datax1=array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");
$title=utf8_decode("REPORTE DE VENTAS DE LA FECHA ".$desde." - ".$hasta);

$graph = new Graph(700,700,'auto');	
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->img->SetMargin(40,40,40,325);	
$graph->xaxis->SetTickLabels($datax1);
$graph->xaxis->SetLabelAngle(90);

$ano=date("d-m-Y");

$graph->xaxis->title->Set("Mes");
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD,20);

$graph->yaxis->title->Set("Bs");
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD,20);

$graph->title->Set($title);
$graph->title->SetFont(FF_FONT1,FS_BOLD,20);



$bplot1 = new BarPlot($datay1);
$bplot2 = new BarPlot($datay2);

$bplot1->SetFillColor("blue");
$bplot2->SetFillColor("brown");

$gbarplot = new GroupBarPlot(array($bplot1));
$gbarplot->SetFillColor(array("brown","red"));
$gbarplot->SetWidth(0.8);
$graph->Add($gbarplot);

$graph->Stroke();
$graph->Stroke("images/EJEMPLO.jpg");
?>

