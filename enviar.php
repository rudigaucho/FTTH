<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_ba.php'",4000);
	
	
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
    
     


//  ------------------------------------------ VERIFICACAO TAMANHO FOTOS ------------------------------------------------------- 


            $tamanho1 = $_FILES['foto1']['size'];
            
         



// ------------------------------------------------------------- verificar vazios---

            if (empty($type))
            {

               $type = 'image/png';



            }

            
             



            

//-----------------------------------------------------------------------------------









	$extensao = strtolower(substr($_FILES['foto1'] ['name'], -4));
	$novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "fotos/";













	







if (!in_array($type,$permite) )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
   echo "<script>saidasuccessfully()</script>";
   break;
}

if ( ($tamanho1 > 2000000)   )
{

echo "TAMANHO MÁXIMO DA IMAGEM 2MB!";
  echo "<script>saidasuccessfully()</script>";
  break;
}
else
{
move_uploaded_file ($_FILES['foto1'] ['tmp_name'], $diretorio.$novo_nome )	;








	

	
}



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cadastro.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>FTTH</title>


</head>



<body>








<?php



$celula =$_POST['celula'];
$cdoe_i =$_POST['cdoe_i'];
$endereco =$_POST['endereco'];
$id =$_POST['id'];
$obs =$_POST['obs'];
$causa =$_POST['causa'];
$sub =$_POST['sub'];
$servico =$_POST['servico'];
$data_atv =$_POST['date'];
$atv =$_POST['atv'];
$nome =$_POST['nome'];
$tipo =$_POST['tipo'];
$tipo2 =$_POST['tipo2'];
$local =$_POST['local'];
$cabo =$_POST['cabo'];
$cabo_metro =$_POST['cabo_metro'];
$caixa =$_POST['caixa'];
$equipe =$_POST['equipe'];
$ba =$_POST['ba'];
















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




  






$query = "insert into principal (celula,cdoe_i,endereco,data_atv,causa,sub_causa,servico,data_cad,tecnico,obs,foto,atividade,nome,tipo,cad_por,tipo2,localidade,cabo,cabo_metro,caixa,equipe,ba)";

$query.= "values ('$celula','$cdoe_i','$endereco','$data_atv','$causa','$sub','$servico',NOW(),'$id','$obs','$novo_nome','$atv','$nome','$tipo','".$_SESSION['nome']."','$tipo2','$local','$cabo','$cabo_metro','$caixa','$equipe','$ba')";




$sql = mysql_query($query);











if($sql)
{
	
	
		echo ' <h2>ENVIADA COM SUCESSO!';
	
	echo "<script>saidasuccessfully()</script>";
	

	
}
else
{
	
	echo "<h2>Erro no cadastro!</h2> ";
	
}




 
 




?>

























</body>


</html>