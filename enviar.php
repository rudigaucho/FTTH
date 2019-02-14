<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_ba.php'",3000);
	
	
}
</script> 

<?php
include "conn.php";

session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) || ($_SESSION["acesso"] != 'TEC' ) )
{
  header("Location: index.html");
  exit;
  
  
}


/*
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
     $type3 =$_FILES['ftaarquivo3'] ['type'];
      $type4 =$_FILES['ftaarquivo4'] ['type'];
       $type5 =$_FILES['ftaarquivo5'] ['type'];
        $type6 =$_FILES['ftdarquivo1'] ['type'];
         $type7 =$_FILES['ftdarquivo2'] ['type'];
          $type8 =$_FILES['ftdarquivo3'] ['type'];
           $type9 =$_FILES['ftdarquivo4'] ['type'];
            $type10 =$_FILES['ftdarquivo5'] ['type'];


//  ------------------------------------------ VERIFICACAO TAMANHO FOTOS ------------------------------------------------------- 


            $tamanho1 =$_FILES['ftaarquivo1']['size'];
            $tamanho2 =$_FILES['ftaarquivo2']['size'];
            $tamanho3 =$_FILES['ftaarquivo3']['size'];
            $tamanho4 =$_FILES['ftaarquivo4']['size'];
            $tamanho5 =$_FILES['ftaarquivo5']['size'];
            
            $tamanho6 =$_FILES['ftdarquivo1']['size'];
            $tamanho7 =$_FILES['ftdarquivo2']['size'];
            $tamanho8 =$_FILES['ftdarquivo3']['size'];
            $tamanho9 =$_FILES['ftdarquivo4']['size'];
            $tamanho10 =$_FILES['ftdarquivo5']['size'];



// ------------------------------------------------------------- verificar vazios---

            if (empty($type))
            {

               $type = 'image/png';



            }

             if (empty($type2))
            {

               $type2 = 'image/png';



            }
             if(empty($_FILES['ftaarquivo3'] ['type']))
            {

               $type3 = 'image/png';



            }
            if (empty($_FILES['ftaarquivo4'] ['type']))
            {

               $type4 = 'image/png';



            }
             if(empty($_FILES['ftaarquivo5'] ['type']))
            {

               $type5 = 'image/png';



            }
           if(empty($_FILES['ftdarquivo1'] ['type']))
            {

               $type6 = 'image/png';



            }
                 if(empty($_FILES['ftdarquivo2'] ['type']))
            {

               $type7 = 'image/png';



            }
                if(empty($_FILES['ftdarquivo3'] ['type']))
            {

               $type8 = 'image/png';



            }
            if(empty($_FILES['ftdarquivo4'] ['type']))
            {

               $type9 = 'image/png';



            }
              if(empty($_FILES['ftdarquivo5'] ['type']))
            {

               $type10 = 'image/png';



            }

//-----------------------------------------------------------------------------------









	$extensao = strtolower(substr($_FILES['ftaarquivo1'] ['name'], -4));
	$novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "fotos/";








$extensao2 = strtolower(substr($_FILES['ftaarquivo2'] ['name'], -4));
	$novo_nome2  = md5(mt_rand(1, 1000) . microtime()). $extensao2;
    $diretorio = "fotos/";




	

$extensao3 = strtolower(substr($_FILES['ftaarquivo3'] ['name'], -4));
	$novo_nome3  = md5(mt_rand(1, 1000) . microtime()). $extensao3;
    $diretorio = "fotos/";




$extensao4 = strtolower(substr($_FILES['ftaarquivo4'] ['name'], -4));
	$novo_nome4  = md5(mt_rand(1, 1000) . microtime()). $extensao4;
    $diretorio = "fotos/";






$extensao5 = strtolower(substr($_FILES['ftaarquivo5'] ['name'], -4));
	$novo_nome5  = md5(mt_rand(1, 1000) . microtime()). $extensao5;
    $diretorio = "fotos/";






$extensao6 = strtolower(substr($_FILES['ftdarquivo1'] ['name'], -4));
	$novo_nome6  = md5(mt_rand(1, 1000) . microtime()). $extensao6;
    $diretorio = "fotos/";





$extensao7 = strtolower(substr($_FILES['ftdarquivo2'] ['name'], -4));
	$novo_nome7  = md5(mt_rand(1, 1000) . microtime()). $extensao7;
    $diretorio = "fotos/";





$extensao8 = strtolower(substr($_FILES['ftdarquivo3'] ['name'], -4));
	$novo_nome8  = md5(mt_rand(1, 1000) . microtime()). $extensao8;
    $diretorio = "fotos/";






$extensao9 = strtolower(substr($_FILES['ftdarquivo4'] ['name'], -4));
	$novo_nome9  = md5(mt_rand(1, 1000) . microtime()). $extensao9;
    $diretorio = "fotos/";






$extensao10 = strtolower(substr($_FILES['ftdarquivo5'] ['name'], -4));
	$novo_nome10  = md5(mt_rand(1, 1000) . microtime()). $extensao10;
    $diretorio = "fotos/";








if (!in_array($type,$permite) || !in_array($type2,$permite ) || !in_array($type3,$permite ) )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
	echo "<script>saidasuccessfully()</script>";
}
else if  (!in_array($type4,$permite) || !in_array($type5,$permite )  || !in_array($type6,$permite ) )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
	echo "<script>saidasuccessfully()</script>";
}
else if  (!in_array($type7,$permite) || !in_array($type8,$permite ) || !in_array($type9,$permite ) || !in_array($type10,$permite ) )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG.!";
	echo "<script>saidasuccessfully()</script>";
}
else if ( ($tamanho1 > 2000000) || ($tamanho2 > 2000000) || ($tamanho3 > 2000000) || ($tamanho4 > 2000000) || ($tamanho5 > 2000000) || ($tamanho6 > 2000000) || ($tamanho7 > 2000000) || ($tamanho8 > 2000000) || ($tamanho9 > 2000000) || ($tamanho10 > 2000000) )
{

echo "TAMANHO MÁXIMO DA IMAGEM 2MB!";
  echo "<script>saidasuccessfully()</script>";
}
else
{
move_uploaded_file ($_FILES['ftaarquivo1'] ['tmp_name'], $diretorio.$novo_nome )	;
move_uploaded_file ($_FILES['ftaarquivo2'] ['tmp_name'], $diretorio.$novo_nome2 )	;
move_uploaded_file ($_FILES['ftaarquivo3'] ['tmp_name'], $diretorio.$novo_nome3	)   ;
move_uploaded_file ($_FILES['ftaarquivo4'] ['tmp_name'], $diretorio.$novo_nome4 )	;
move_uploaded_file ($_FILES['ftaarquivo5'] ['tmp_name'], $diretorio.$novo_nome5 )	;
move_uploaded_file ($_FILES['ftdarquivo1'] ['tmp_name'], $diretorio.$novo_nome6 )	;
move_uploaded_file ($_FILES['ftdarquivo2'] ['tmp_name'], $diretorio.$novo_nome7 )	;
move_uploaded_file ($_FILES['ftdarquivo3'] ['tmp_name'], $diretorio.$novo_nome8 )	;
move_uploaded_file ($_FILES['ftdarquivo4'] ['tmp_name'], $diretorio.$novo_nome9 )	;
move_uploaded_file ($_FILES['ftdarquivo5'] ['tmp_name'], $diretorio.$novo_nome10 )	;
	






	

	
//}

*/

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

<title>PREVENTIVA</title>


</head>



<body>








<?php

$values_gender = $_POST["produtos"]['qtd'];
$values_gender2 = $_POST["list"]['qtd'];



$dc =$_POST['dc'];
$db =$_POST['db'];
$cdoe =$_POST['cdoe'];
$cdoi =$_POST['cdoi'];
$ident =$_POST['ident'];
$rede_ext =$_POST['rede_ext'];
$rede_int =$_POST['rede_int'];
$fusoes =$_POST['fusoes'];
$gestor =$_POST['gestor'];
$obs =$_POST['obs'];














	/*

if(!preg_match('/^\d{9}$/',$dc))
{

echo 'erro, B.A invalido, o B.A deve conter 9 digitos!';




}



else if  ($vist_cb != is_numeric($vist_cb) or $post_subs != is_numeric($post_subs)  or $post_aprum != is_numeric($post_aprum) or $read_rede != is_numeric($read_rede)  or $redis_cabo != is_numeric($redis_cabo) or $lanc_cb != is_numeric($lanc_cb) or $poda != is_numeric($poda) or $post_imp != is_numeric($post_imp)  ){
   echo "Verifique os campos que recebem apenas números!!";
}



else if (!preg_match('/^\-?\d{2}(\.)\d{6}$/', $coord1) || !preg_match('/^\-?\d{2}(\.)\d{6}$/', $coord2) )

{


echo 'erro, coordenadas invalidas  exemplo correto: -25.476079!';



}

*/
$sql = mysql_query ("select * from principal where dc = '$dc' " );
$row = mysql_num_rows($sql);
 if  ($row == 1)
{


echo "<h1>D.C duplicado!</h1>";
   
  

  
}
else
{

  






$query = "insert into principal (dc,db,cdoe,cdoi,ident,rede_ext,rede_inter,fusao,gestor,obs,data,editada)";

$query.= "values ('$dc','$db','$cdoe','$cdoi','$ident','$rede_ext','$rede_int','$fusoes','$gestor','$obs',NOW(),'N')";




$sql = mysql_query($query);










if($sql )
{
	
	
		echo ' <h2>ENVIADA COM SUCESSO!';
	
	echo "<script>saidasuccessfully()</script>";
	

	
}
else
{
	
	echo "<h2>Erro no cadastro!</h2> ";
	
}




 }
 

 $i = 0;
 foreach ($values_gender as $values){

    $string[] =  $values;

 }



 foreach ($values_gender2 as $values2){



    $query1 = "insert into cdoia (dc,id_cdoia)";

    $query1.= "values ('$dc','$string[$i]')";
 

    $i++;
    
 
 $sql1 = mysql_query($query1);

 }



?>

























</body>


</html>