<!DOCTYPE html>
<html lang="pt-br">
<head>


<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function localizarUsuario(){
  if (window.navigator && window.navigator.geolocation) {
   var geolocation = window.navigator.geolocation;
   geolocation.getCurrentPosition(sucesso, erro);
  } else {
     alert('Geolocalização não suportada em seu navegador.')
  }
  function sucesso(posicao){
    console.log(posicao);
    var latitude = posicao.coords.latitude;
    var longitude = posicao.coords.longitude;
    alert('Sua latitude estimada é: ' + latitude + ' e longitude: ' + longitude )
  }
  function erro(error){
    console.log(error)
  }
}

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
</script>


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



</style>
  <title>ATIVIDADE COMPLEMENTAR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="jumbotron text-center ">
  <h1>Serede S.A</h1>
  <p>Atividade Complementar</p>
</div>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Serede</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="index.html">Pag. Inicial</a></li>
      <li class="active"><a href="pesq_ba.php">Pesquisar B.A</a></li>
      <li class="active"><a href="pesq_per.php">Pesquisar Data</a></li>
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>
<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >
    
    <div id="teste">
    <h3>Consultar coordenadas</h3><br><br>
  <form class="form" role="form" name="seachform" method="post" action="pegar_coord.php " enctype="multipart/form-data">

    <div class="form-group">

       <label for="email">RUA OU AVENIDA:</label>
      <input type="text" class="form-control" id="rua" name="rua" >
    </div>
     <div class="form-group">




      <label for="email">NÚMERO:</label>
      <input type="text" class="form-control" id="n" name="n" >
    </div>
       <div class="form-group">
     <label for="pwd">CIDADE:</label>
      <input type="text" class="form-control" id="cidade" name="cidade">
    </div>

     <br><br><button type="submit" value="Enviar" class="btn btn-danger" id="enviar" name="submit"> <strong>Consultar</strong> </button><br><br><br><br>
<?php
  if (isset($_POST ['submit']) )
{

$rua = str_replace(" ", "+", $_POST["rua"]);
$n = $_POST["n"];

$cidade = str_replace(" ", "+", $_POST["cidade"]);




$address = str_replace(" ", "+", $_POST["rua"]).','.$_POST["n"].','.str_replace(" ", "+", $_POST["cidade"]);
$geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false');
$output= json_decode($geocode);
$lat = $output->results[0]->geometry->location->lat;
$long = $output->results[0]->geometry->location->lng;
echo "'<h1> LAT:$lat,  LONG:$long </h1>'";
}
?>
     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>
 
</div>


</body>
</html>

