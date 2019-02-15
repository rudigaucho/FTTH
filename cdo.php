<?php
 
include "conn.php";
 
$cdo = $_POST['cdo'];
 
$sql = "SELECT * FROM celulas WHERE codigo = '$cdo' and encerrada = 'N' " ;
$qr = mysql_query($sql) or die(mysql_error());
 
if(mysql_num_rows($qr) == 0){
   echo  '<option value="0">'.htmlentities('Não há DC').'</option>';
    
}else{
   do{
      echo '<option value="'.$ln['fachada'].'">'.$ln['fachada'].'</option>';
   }while($ln = mysql_fetch_assoc($qr));
}
 
?>