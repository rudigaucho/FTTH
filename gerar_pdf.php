
<?php


include 'mpdf/mpdf.php';


 include "conn.php";

 session_start();
 if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
 {
   header("Location: index.html");
   exit;
   
   
 }


$protocolo =$_GET['protocolo'];


$sql = mysql_query ("select * from principal where  protocolo   = '$protocolo' " );



  while ($dado = mysql_fetch_assoc($sql )){
  $ba = $dado ["ba"];
  $celula = $dado ["celula"];   
  $cdoe_i = $dado ["cdoe_i"]; 
  $endereco = $dado ["endereco"]; 
  $tecnico = $dado ["tecnico"]; 
  $data_atv = $dado ["data_atv"]; 
  $causa = $dado ["causa"]; 
  $sub_causa = $dado ["sub_causa"]; 
  $servico = $dado ["servico"]; 
  $tipo = $dado ["tipo"]; 
  $tipo2 = $dado ["tipo2"]; 
  $nome = $dado ["nome"]; 
  $obs = $dado ["obs"]; 
  $equipe = $dado ["equipe"]; 
  $cabo = $dado ["cabo"]; 
  $localidade = $dado ["localidade"]; 
  $cabo_metro = $dado ["cabo_metro"];
  $caixa = $dado ["caixa"];
  $foto1 = $dado ["foto"]; 
  $rede = $dado ["rede"]; 



 
  




  }




$pagina = 
'


<html>




<body>


 <img src="img/logo_serede.png" alt="" width="80" height="80"  > 
<h3 style="text-align: center;">RELATÓRIO TESTE FTTH</h3>
<h5>DATA: <strong> '.$data_atv.'  </strong> </h5>
<h5>CELULA: <strong> '.$ba.'  </strong> </h5>
<h5>CELULA: <strong> '.$celula.'  </strong> </h5>
<h5>CDOE / I: <strong> '.$cdoe_i.'  </strong> </h5>
<h5>TIPO:'.$tipo2.' </h5>
<h5>ENDEREÇO: '.$endereco.' </h5>
<h5>LOCALIDADE: '.$localidade.' </h5>
<h5>CABO:'.$cabo.' </h5>
<h5>CABO METROS:'.$cabo_metro.' </h5>
<h5>CAIXA:'.$caixa.' </h5>
<h5>CAUSA:'.$causa.' </h5>
<h5>SUB:'.$sub_causa.'  </h5>
<h5>SERVIÇO:'.$servico.' </h5>
<h5>TIPO:'.$tipo.' </h5>
<h5>REDE:'.$rede.' </h5>

<h5>DATA:'.$data_atv.' </h5>
<h5>EQUIPE:'.$equipe.' </h5>

<h5>NOME:'.$nome.' </h5>



<h5>OBS: '.$obs.'</h5>
 <br> <br>
 

  <body>
<table>
<tr>  
<th><img src="fotos/'.$foto1.'"  width="300" height="300"> <figcaption></figcaption>  </th>



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