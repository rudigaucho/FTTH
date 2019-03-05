



<?php
 include "conn.php"; 


 session_start();

//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {




?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">




<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

 <title>CADASTRO </title>

<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='cad_cdoia.php'",3000);
  
  
}
</script> 


</head>



<body>


<?php
$celula = $_POST["celulas"];
$cdoi = $_POST["cdoia"];


$Fotos = $_FILES["fotos"];
$values_gender2 = $_POST["list"];
$resultado = count($values_gender2);



















 foreach ($values_gender2 as $values){

                     $string[] =  $values;

                  }

$Destino = "fotos/";
$Conta = 0; 

for($i = 0; $i < $resultado; $i++) 
{ 
 // Passa valores da iteração atual 
$Nome = $Fotos["name"][$i]; 
$Tamanho = $Fotos["size"][$i]; 
$Tipo = $Fotos["type"][$i]; 
$Tmpname = $Fotos["tmp_name"][$i]; 

if($Tamanho > 2000000 ) 
{
  echo "<br/>Erro ao envia a foto de número " . $Conta . " O arquivo deve ser menor que 2MB.";
  break;
}

else

// Verifica se tem arquivo enviado 
if($Tamanho > 0 && strlen($Nome) > 1) 
{ 
 // Verifica se é uma imagem 
if(preg_match("/^image\/(gif|jpeg|jpg|png)$/", $Tipo)) 
{ 
// Caminho completo de destino da foto 
$Caminho = $Destino . $Nome; 

 // Tudo OK! Move o upload! 
if(move_uploaded_file($Tmpname, $Caminho)) 
{ 

   $query1 = "insert into cdoia (celula,cdoi,cdoia,foto,id_col,data)";

                    $query1.= "values ('$celula','$cdoi','$string[$Conta]','$Nome','".$_SESSION['id']."',NOW())";

                    $sql1 = mysql_query($query1);


    $query2 = "update celulas set encerrada_cdoi = 'S' where codigo = '$cdoi'";

    $sql2 = mysql_query($query2);


echo "Foto #" . ($i+1) . " enviada.<br/>"; 

// Faz contagem de enviada com sucesso 
$Conta++; 
} 
else // Erro no envio 
{ 
// $i+1 porque $i começa em zero 
echo "Não foi possível enviar a foto #" . ($i+1) . "<br/>"; 
break;
} 
} 
} 
} 

if($Conta) // Imagens foram enviadas, ok! 
{ 
echo "<br/>Foi(am) enviada(s) " . $Conta . " foto(s)."; 
} 
else // Nenhuma imagem enviada, faz alguma ação 
{ 
echo "Você não enviou fotos!"; 
break;
}


if($sql1 && $sql2)
{
  
  
    echo ' <h2>ENVIADA COM SUCESSO!';
  
   echo "<script>saidasuccessfully()</script>";
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}










/*
$permite = array('image/jpg', 'image/jpeg' , 'image/png');
    $type =$_FILES['foto_ant'] ['type'];
   
    
       

//  ------------------------------------------ VERIFICACAO TAMANHO FOTOS ------------------------------------------------------- 


            $tamanho1 =$_FILES['foto_ant']['size'];
          

           



// ------------------------------------------------------------- verificar vazios---

            if (empty($type))
            {

               $type = 'image/png';



            }

            
           
             

//-----------------------------------------------------------------------------------





































if (!in_array($type,$permite)  )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
  echo "<script>saidasuccessfully()</script>";
}


*/







  
    /*

$i = 0;

                foreach ($values_gender2 as $values2){

                  

             

                    $query1 = "insert into foto (prot,foto,coment)";

                    $query1.= "values ('$protocolo','$Nome','$values2')";





                    ++$i;

$sql1 = mysql_query($query1);

                 }   */









































  





               

































?>




















</body>


</html>