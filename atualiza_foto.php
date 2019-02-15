<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_ba.php'",3000);
	
	
}
</script> 

<?php
include "conn.php";



//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {
	$permite = array('image/jpg', 'image/jpeg' , 'image/png');
    $type =$_FILES['ftaarquivo1'] ['type'];
    $type2 =$_FILES['ftaarquivo2'] ['type'];
    


//  ------------------------------------------ VERIFICACAO TAMANHO FOTOS ------------------------------------------------------- 


            $tamanho1 =$_FILES['ftaarquivo1']['size'];
            $tamanho2 =$_FILES['ftaarquivo2']['size'];
           



// ------------------------------------------------------------- verificar vazios---

            if (empty($type))
            {

               $type = 'image/png';



            }

             if (empty($type2))
            {

               $type2 = 'image/png';



            }
             



            

//-----------------------------------------------------------------------------------









	$extensao = strtolower(substr($_FILES['ftaarquivo1'] ['name'], -4));
	$novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "fotos/";








$extensao2 = strtolower(substr($_FILES['ftaarquivo2'] ['name'], -4));
	$novo_nome2  = md5(mt_rand(1, 1000) . microtime()). $extensao2;
    $diretorio = "fotos/";




	










if (!in_array($type,$permite) || !in_array($type2,$permite ) )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
	echo "<script>saidasuccessfully()</script>";
}

else if ( ($tamanho1 > 2000000) || ($tamanho2 > 2000000) )
{

echo "TAMANHO MÁXIMO DA IMAGEM 2MB!";
  echo "<script>saidasuccessfully()</script>";
}
else
{
move_uploaded_file ($_FILES['ftaarquivo1'] ['tmp_name'], $diretorio.$novo_nome )	;
move_uploaded_file ($_FILES['ftaarquivo2'] ['tmp_name'], $diretorio.$novo_nome2 )	;

	






	

	
}



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_ba.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>TESTE FTTH</title>


</head>



<body>








<?php

$id =$_POST['id'];
$logradouro =$_POST['logradouro'];
$codigo =$_POST['cdo'];
$celula =$_POST['celula'];















	




 












$query = "update foto set foto1 = '$novo_nome',foto2 = '$novo_nome2' where celula = '$celula' and cdo = '$codigo'";


$query2 = "update principal set editada = 'S' where id = '$id' ";






$sql = mysql_query($query);

$sql2 = mysql_query($query2);


if($sql )
{
	
	
		echo ' <h2>ATUALIZADA COM SUCESSO!';
	
	echo "<script>saidasuccessfully()</script>";
	

	
}
else
{
	
	echo "<h2>Erro no cadastro!</h2> ";
	
}




 


?>

















    
</body>
</html>




