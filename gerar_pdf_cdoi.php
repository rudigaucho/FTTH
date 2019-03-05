<?php

include 'mpdf/mpdf.php';


 include "conn.php";


 $cdoia =$_GET['cdoia'];
  

$select = mysql_query ("SELECT * FROM cdoia  
							WHERE cdoia ='$cdoia'
			");
	$linha = mysql_fetch_array($select);//atribui o array recebido a variavel $linha
	
	$row = mysql_num_rows($select);
  
  $html2 .= "<h2>Relatorio teste FTTH - CDOI - $linha[cdoi]</span></h2> 
  	";
  do  
  {
    $html .= "<table border=1  style='margin-left:80px;'>
    
    <tr>
     
      
    </tr>	
    <tr>
     
      
    </tr>	
    <tr >
    <td> <img src='fotos/$linha[foto]' width='500' height='300' ><br> $linha[cdoia]</td>
    
    
    </tr>
    
    
    
   
   
</table>";
  } while ($linha = mysql_fetch_array($select));

	
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