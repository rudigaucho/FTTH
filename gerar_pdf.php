
<?php


include 'mpdf/mpdf.php';


 include "conn.php";

 session_start();
 if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
 {
   header("Location: index.html");
   exit;
   
   
 }


$id =$_GET['id'];


$sql = mysql_query ("select * from principal where  id = '$id' " );



  while ($dado = mysql_fetch_assoc($sql )){

  $celula = $dado ["celula"]; 
  $logradouro = $dado ["logradouro"]; 
  $fachada = $dado ["fachada"]; 
  $db = $dado ["db"]; 
  $gestor = $dado ["gestor"]; 
  $ident = $dado ["ident"]; 
  $rede_ext = $dado ["rede_ext"]; 
  $rede_inter = $dado ["rede_inter"]; 
  $fusao = $dado ["fusao"]; 
  $obs = $dado ["obs"]; 
  $data = $dado ["data"]; 
  $cdo = $dado ["cdo"]; 
  


 
  




  }


  $sql2 = mysql_query ("select * from foto where  celula= '$celula' and logradouro='$logradouro' and fachada = '$fachada' " );

  while ($dado2 = mysql_fetch_assoc($sql2)){



  $foto1 = $dado2 ["foto1"]; 
  $foto2 = $dado2 ["foto2"]; 


  }


$pagina = 
'


<html>




<body>


 <img src="img/logo_serede.png" alt="" width="80" height="80"  > 
<h3 style="text-align: center;">RELATÓRIO TESTE FTTH</h3>
<h5>DATA: <strong> '.$data.'  </strong> </h5>
<h5>CELULA: <strong> '.$celula.'  </strong> </h5>
<h5>CDO: '.$cdo.' </h5>
<h5>ENDEREÇO: '.$logradouro.' </h5>
<h5>FACHADA:'.$fachada.' </h5>
<h5>DB:'.$db.' </h5>
<h5>GESTOR:'.$gestor.'  </h5>
<h5>IDENTIFICAÇÃO:'.$ident.' </h5>
<h5>REDE EXTERNA:'.$rede_ext.' </h5>
<h5>REDE INTERNA:'.$rede_inter.' </h5>
<h5>FUSÃO:'.$fusao.'  </h5>


<h5>OBS: '.$obs.'</h5>
 <br> <br>
 

  <body>
<table>
<tr>  
<th><img src="fotos/'.$foto1.'"  width="300" height="300"> <figcaption></figcaption>  </th>
<th><img src="fotos/'.$foto2.'"  width="300" height="300"><figcaption></figcaption>  </th> 


</tr>

</table>












   ';

  











$footer = "<p style='font-size:10px;'>Fibra Serede –  Teste FTTH</p>";
$arquivo = "cadastro02.pdf"; 


$mpdf = new mPDF();

$stylesheet = file_get_contents('css/bootstrap.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->SetHTMLFooter($footer,"O");

 $mpdf -> WriteHTML($pagina);

$mpdf -> Output($arquivo, 'I');




























?>