
<?php
 
 include "conn.php";

$logradouro = $_POST['logradouro'];
 
$sql = "SELECT * FROM celulas WHERE logradouro = '$logradouro' and encerrada = 'N' order by logradouro";
$qr = mysql_query($sql) or die(mysql_error());
 
if(mysql_num_rows($qr) == 0){
   echo  '<option value="0">'.htmlentities('Não há localidades').'</option>';
    
}else{
   do{
      echo '<option value="'.$ln['codigo'].'">'.$ln['codigo'].'</option>';
   }while($ln = mysql_fetch_assoc($qr));
}
 
?>