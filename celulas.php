<?php
 
include "conn.php";
 
$celula = $_POST['celula'];
 
$sql = "SELECT * FROM celulas WHERE celula = '$celula'  group by logradouro";
$qr = mysql_query($sql) or die(mysql_error());
 
if(mysql_num_rows($qr) == 0){
   echo  '<option value="0">'.htmlentities('Não há estacao').'</option>';
    
}else{
   while($ln = mysql_fetch_assoc($qr)){
      echo '<option value="'.$ln['logradouro'].'">'.$ln['logradouro'].'</option>';
   }
}
 


?>