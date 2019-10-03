

<?php
include "conn.php";  


session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}

$id = $_GET['id'];
$seleciona_dados = mysql_query("select * from equipe where id = '".$_GET['id']."'");
$linha_recupera_dados = mysql_num_rows($seleciona_dados);
$lin_dado_cli = mysql_fetch_array($seleciona_dados);
if($linha_recupera_dados == 0 ){

echo '

<div class="form-group" id="dinamico">
<label for="cabo">ID TÉCNICO:</label>
  <input type="text" class="form-control"  name="id" id="id" onblur="completar_campos();" value="'.$id.'" required >
   
  </div>

  <div class="form-group">  

  <div class="form-group">
<label for="cabo">NOME:</label>
  <input type="text" class="form-control"  name="nome"   placeholder="Colaborador não cadastrado"required readonly >
   
  </div>

  <div class="form-group">  

';
}


else
{

echo '

<div class="form-group" id="dinamico">
<label for="cabo">ID TÉCNICO:</label>
  <input type="text" class="form-control"  id="id" name="id" onblur="completar_campos();" value="'.$id.'" required >
   
  </div>

  <div class="form-group">  

  <div class="form-group">
<label for="cabo">NOME:</label>
  <input type="text" class="form-control"  name="nome"   value="'.$lin_dado_cli['nome'].'" required readonly >
   
  </div>

  <div class="form-group">
<label for="cabo">EQUIPE:</label>
  <input type="text" class="form-control"  name="equipe"   value="'.$lin_dado_cli['equipe'].'" required readonly >
   
  </div>

  <div class="form-group"> 
    ';} ?>  

    


 

