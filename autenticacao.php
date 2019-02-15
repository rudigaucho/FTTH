<?php
include "conn.php";

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<script type="text/javascript">
function loginsuccessfully()
{
	setTimeout("window.location='paine.php'",3000);
	
	
}

function loginfailed()

{
	
	setTimeout("window.location='index.html'",3000);
	
}

</script>





  <link rel="icon" href="img/logo_oi.png">
<meta charset="UTF-8"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body>





<?php

$senha=$_POST['senha'];
$login=$_POST['log'];


$sql = mysql_query("select * from usuarios where senha  = '$senha' and login = '$login' ");




$row = mysql_num_rows($sql );

	
if($row > 0  )
{
	
	while ($linha =  mysql_fetch_assoc($sql) 	)
	{
  $nome = $linha['nome'];
  $login = $linha['login'];
  $senha = $linha['senha'];
  $equipe = $linha['equipe'];
  $acesso = $linha['acesso'];
  $uf = $linha['uf'];
  $id_gestor = $linha['id_gestor'];
  $nome_gestor = $linha['nome_gestor'];
    
	
	
	}
	session_start();
	
	$_SESSION['senha']=$senha;
	$_SESSION['login'] =$login;
    $_SESSION['equipe'] =$equipe;
	$_SESSION['nome'] =$nome;
	$_SESSION['acesso'] =$acesso;
	$_SESSION['uf'] =$uf;
	$_SESSION['id_gestor'] =$id_gestor;
	$_SESSION['nome_gestor'] =$nome_gestor;



	echo "<h2 align='center'>Oi $nome! Você foi logado (a) com sucesso!<h2> <br> <img src='img/logo_serede.png' style=' width: 80px; height:80px; padding-left:40%; '  > ";

	 echo "<script>loginsuccessfully()</script>";

	
}
else
{
	echo "<h2 align='center'>Senha de usuário inválida<h2>";
	echo "<script>loginfailed()</script>";
	
}

?>





















</body>


</html>