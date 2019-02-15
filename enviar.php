<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_ba.php'",3000);
	
	
}
</script> 

<?php
include "conn.php";

session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
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
  */
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {
	$permite = array('image/jpg', 'image/jpeg' , 'image/png');
    $type =$_FILES['foto1'] ['type'];
    $type2 =$_FILES['foto2'] ['type'];
     


//  ------------------------------------------ VERIFICACAO TAMANHO FOTOS ------------------------------------------------------- 


            $tamanho1 =$_FILES['foto1']['size'];
            $tamanho2 =$_FILES['foto2']['size'];
         



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









	$extensao = strtolower(substr($_FILES['foto1'] ['name'], -4));
	$novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "fotos/";








$extensao2 = strtolower(substr($_FILES['foto2'] ['name'], -4));
	$novo_nome2  = md5(mt_rand(1, 1000) . microtime()). $extensao2;
    $diretorio = "fotos/";




	







if (!in_array($type,$permite) || !in_array($type2,$permite ) )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
	echo "<script>saidasuccessfully()</script>";
}

else if ( ($tamanho1 > 2000000) || ($tamanho2 > 2000000)  )
{

echo "TAMANHO MÁXIMO DA IMAGEM 2MB!";
  echo "<script>saidasuccessfully()</script>";
}
else
{
move_uploaded_file ($_FILES['foto1'] ['tmp_name'], $diretorio.$novo_nome )	;
move_uploaded_file ($_FILES['foto2'] ['tmp_name'], $diretorio.$novo_nome2 )	;







	

	
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

<title>PREVENTIVA</title>


</head>



<body>








<?php





$celula =$_POST['celula'];
$logradouro =$_POST['logradouro'];
$fachada =$_POST['fachada'];
$db =$_POST['db'];
$gestor =$_POST['gestor'];
$ident =$_POST['ident'];
$rede_int =$_POST['rede_int'];
$rede_ext =$_POST['rede_ext'];
$gestor =$_POST['gestor'];
$rede_int =$_POST['rede_int'];
$fusao =$_POST['fusao'];
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

$sql = mysql_query ("select * from celulas where celula = '$celula' and logradouro = '$logradouro' and fachada = '$fachada'" );
$row = mysql_num_rows($sql);
 if  ($row == 1)
{


while ($dado = mysql_fetch_assoc($sql)){

$codigo = $dado["codigo"];  

}
   
  

  
}



  






$query = "insert into principal (celula,logradouro,fachada,db,gestor,ident,rede_ext,rede_inter,fusao,obs,data,editada,cdo)";

$query.= "values ('$celula','$logradouro','$fachada','$db','$gestor','$ident','$rede_ext','$rede_int','$fusao','$obs',NOW(),'N','$codigo')";


$query2 = "insert into foto (celula,cdo,logradouro,fachada,foto1,foto2)";

$query2.= "values ('$celula','$codigo','$logradouro','$fachada','$novo_nome','$novo_nome2')";

$query3.="update celulas set encerrada='S' where logradouro='$logradouro' and fachada='$fachada';";


$sql = mysql_query($query);
$sql2 = mysql_query($query2);
$sql3 = mysql_query($query3);










if($sql && $sql2)
{
	
	
		echo ' <h2>ENVIADA COM SUCESSO!';
	
	echo "<script>saidasuccessfully()</script>";
	

	
}
else
{
	
	echo "<h2>Erro no cadastro!</h2> ";
	
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