
<?php
 
 include "conn.php";

$cdoi = $_POST['cdoi'];
 
$sql = "SELECT * FROM celulas WHERE celula = '$cdoi' and codigo  like 'CDOI%' and encerrada_cdoi = 'N'";
$qr = mysql_query($sql) or die(mysql_error());
 
if(mysql_num_rows($qr) == 0){
   echo  '<option value="0">'.htmlentities('Não há localidades').'</option>';
    
}else{
   do{
      echo '<option value="'.$ln['codigo'].'">'.$ln['codigo'].'</option>';
   }while($ln = mysql_fetch_assoc($qr));
}
 
?>