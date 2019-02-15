<?php

include 'mpdf/mpdf.php';


 include "conn.php";

$select = mysql_query ("SELECT * FROM foto  
							WHERE celula = '224 (CTJE)'
			");
	$linha = mysql_fetch_array($select);//atribui o array recebido a variavel $linha
	
	$row = mysql_num_rows($select);
  
  $html2 .= "<h2>Relatorio teste FTTH - CELULA - $linha[celula]</span></h2> 
  	";
  while ($linha = mysql_fetch_array($select)) 
  {
    $html .= "<table border=1 >
    
    <tr>
     
    </tr>
    <tr>
     
      
    </tr>	
    <tr>
    <td> <img src='fotos/$linha[foto1]' width='300' height='300'><br> $linha[cdo]</td>
    <td> <img src='fotos/$linha[foto2]' width='300' height='300'><br> $linha[cdo] </td>
    </tr>

    
   
   
</table>";
  }

	
//==============================================================
//==============================================================
//==============================================================

include("../mpdf/mpdf.php");

$mpdf=new mPDF(); 
$css = file_get_contents("../css/styleRelatotio.css");
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html2.$html);
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================


?>