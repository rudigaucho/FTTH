<?php
include "conn.php"; 
session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])  )
{
  header("Location: index.html");
  exit;
  
  
}


$id = $_GET['id'];




$sql = mysql_query ("select  * from principal  where id='$id';" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);


if (mysql_num_rows($sql) > 0)

{
    while ($dado = mysql_fetch_assoc($sql)){
        $celula = $dado["celula"];
        $logradouro = $dado["logradouro"];
        $cdo = $dado["cdo"];
        
        $data = $dado["data"];
        $id = $dado["id"];

   
         

    }}



?>

<!DOCTYPE html>



<html lang="pt-br">
<head>


<!--  FUNCAO COMPLETAR CAMPO TRECHO-->


<script type="text/javascript">
function completar_campos(){
document.getElementById("loading").style.display = "block";
var con_consulta;
if (window.XMLHttpRequest){

con_consulta = new XMLHttpRequest();

}else{


con_consulta  = new ActiveXObject("Microsoft.XMLHTTP");



}

con_consulta.onreadystatechange = function(){

if(con_consulta.readyState ==  4 && con_consulta.status == 200){

document.getElementById("principal").innerHTML = con_consulta.responseText;
document.getElementById("loading").style.display = "none";

}

}

var cabo = document.getElementById("cabo").value;

con_consulta.open("GET","processar_cabo.php?cabo="+cabo,true);
con_consulta.send(null);






}
</script>




<!--   FIM FUNCAO                            -->







  <meta charset="utf-8">

<link rel="stylesheet"  href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet"  href="/resources/demos/style.css">



<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
<script type="text/javascript" src="validacaoid.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>









<link rel="icon" href="img/logo_oi.ico">




<style>
 footer {
      background-color: #555;
      color: white;
      padding: 15px;
       text-align:center;
    }
	.container-fluid
	{
	background-color: purple;
	}
  #realcar
  {
  background-color: grey;
  }
   #realcar2
  {
  background-color: #D3D3D3;
  }

  #loading
{
  
width:70px;
height:70px;  
  
  
  
  
}



</style>
  <title>TESTE FTTH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>



  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Serede</a>
    </div>
    <ul class="nav navbar-nav">
      
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>
<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >

    
  
  <form class="form" role="form" name="seachform" method="post" action="atualiza_foto.php " enctype="multipart/form-data" >

  <input type="hidden" class="form-control"  name="id" maxlength="9"  placeholder="9 digitos" readonly value="<?php echo $id; ?>">

    <div class="form-group">

       <label for="email">CELULA:</label>
      <input type="text" class="form-control"  name="celula" maxlength="9"  placeholder="9 digitos" readonly value="<?php echo $celula; ?>">
    </div>
     <div class="form-group">




      <label for="email">LOGRADOURO:</label>  
      <input type="text" class="form-control"  name="logradouro"  readonly value="<?php echo $logradouro; ?>">
    </div>
       <div class="form-group">
    <label for="cabo">CDO:</label>
      <input type="text" class="form-control"  name="cdo" readonly value="<?php echo $cdo; ?>">
       
      </div>
    
    <div class="form-group">
      <label for="pwd">DATA</label>
      <input type="text" class="form-control" id="redis_cabo" name="redis_cabo" readonly value="<?php echo $data; ?>" >
    </div>

   
    <br><br>
    <div class="form-group" id="realcar">
    <label for="email">Fotos: </label>
    <input type="file"  id="ftaarquivo1" name="ftaarquivo1"   /> <br>
    <input type="file"  id="ftdarquivo2"  name="ftaarquivo2" />  

   

     </div>

    

    
     <br><br><button type="submit" value="Enviar" class="btn btn-danger" id="enviar"> <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>
 
</div>


</body>
</html>
