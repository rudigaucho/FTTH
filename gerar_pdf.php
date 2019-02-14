
<?php


include 'mpdf/mpdf.php';


 include "conn.php";

 session_start();
 if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
 {
   header("Location: index.html");
   exit;
   
   
 }


$ba =$_GET['ba'];


$sql = mysql_query ("select * from atv_comp_principal where  ba = '$ba' " );



  while ($dado = mysql_fetch_assoc($sql )){

  $vist_cabos = $dado ["vist_cabos"]; 
  $poste_subs = $dado ["poste_subs"]; 
  $postes_apru = $dado ["postes_apru"]; 
  $vist_cabos = $dado ["vist_cabos"]; 
  $equipe = $dado ["equipe"]; 
  $read_rede = $dado ["read_rede"]; 
  $read_cabos = $dado ["read_cabos"]; 
  $lancamentos_cab = $dado ["lancamentos_cab"]; 
  $poda_rocada = $dado ["poda_rocada"]; 
  $postes_implant = $dado ["postes_implant"]; 
  $vistorias_esta = $dado ["vistorias_esta"]; 
  $coordenadas1 = $dado ["coordenadas1"]; 
  $coordenadas2 = $dado ["coordenadas2"]; 
  $data = $dado ["data"]; 
  $equipe = $dado ["equipe"]; 
  $cabo = $dado ["cabo"]; 
  $obs = $dado ["obs"]; 
  $fta1 = $dado ["foto_antes1"]; 
  $fta2 = $dado ["foto_antes2"]; 
  $fta3 = $dado ["foto_antes3"]; 
  $fta4 = $dado ["foto_antes4"]; 
  $fta5 = $dado ["foto_antes5"]; 
 
  $fdep1 = $dado ["foto_dep1"]; 
  $fdep2 = $dado ["foto_dep2"]; 
  $fdep3 = $dado ["foto_dep3"]; 
  $fdep4 = $dado ["foto_dep4"]; 
  $fdep5 = $dado ["foto_dep5"];




  }



$pagina = 
'


<html>




<body>


 <img src="img/oi.png" alt="" width="150" height="150"  > 
<h3 style="text-align: center;">FISCALIZAÇÃO DE PREVENTIVAS</h3>
<h5>BA: <strong> '.$ba.'  </strong> </h5>
<h5>DATA: '.$data.' </h5>
<h5>EQUIPE: '.$equipe.' </h5>
<h5>CABO:'.$cabo.' </h5>
<h5>REDISPOSIÇÃO DE CABOS:'.$read_cabos.' KM </h5>
<h5>LANÇAMENTO DE CABOS:'.$lancamentos_cab.' KM </h5>
<h5>VISTORIA DE CABOS:'.$vist_cabos.' KM</h5>
<h5>POSTES SUBSTITUIDOS:'.$poste_subs.' </h5>
<h5>POSTES APRUMADOS:'.$postes_apru.' </h5>
<h5>READEQUAÇÃO DE REDE:'.$read_rede.' KM </h5>
<h5>PODA ROÇADA: '.$poda_rocada.' KM </h5>
<h5>POSTES IMPLANTADOS: '.$postes_implant.'</h5>
<h5>VISTÓRIA HORA: '.$vistorias_esta.'</h5>
<h5>LATITUDE: '.$coordenadas1.'</h5>
<h5>LONGITUDE: '.$coordenadas2.'</h5>

<h5>OBS: '.$obs.'</h5>
 <br> <br>
 

  <body>
<table>
<tr>  
<th><img src="fotos/'.$fta1.'"  width="300" height="300"> <figcaption>Antes</figcaption>  </th>
<th><img src="fotos/'.$fdep1.'"  width="300" height="300"><figcaption>Depois</figcaption>  </th> 


</tr>

</table>












   ';

  











$footer = "<p style='font-size:10px;'>Fibra Serede –  Controle de preventivas</p>";
$arquivo = "cadastro02.pdf"; 


$mpdf = new mPDF();

$stylesheet = file_get_contents('css/bootstrap.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->SetHTMLFooter($footer,"O");

 $mpdf -> WriteHTML($pagina);

$mpdf -> Output($arquivo, 'I');




























?>