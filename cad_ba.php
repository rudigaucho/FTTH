
<?php
      
session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])  )
{
  header("Location: index.html");
  exit;
  
  
}

?>


<!DOCTYPE html>



<html lang="pt-br">
<head>


<!--  FUNCAO COMPLETAR CAMPO TRECHO-->





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
            $("#tb1").css("display","none");
            $("#tb2").css("display","none");
  
    $('input[type=radio]').change(function() {
            

        if (this.value == 'cdoe'){
            $("#tb1").css("display","block");
            $("#tb2").css("display","none");
         
        }
        else if (this.value == 'cdoi') {
            $("#tb1").css("display","none");
            $("#tb2").css("display","block");
         
        }
        
         
    });
});

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
      <li class="active" style="float:right"><a href="pesq_ba.php">Busca BA</a></li>
      <li class="active" style="float:right"><a href="pesq_per.php">Busca Período</a></li>
      <li class="active" style="float:right"><a href="logout.php">Logout</a></li>
      
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>
<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >

    
  
  <form class="form" role="form" name="seachform" method="post" action="enviar.php " enctype="multipart/form-data" >


    <div class="form-group">

       <label for="email">DC:</label>
      <input type="text" class="form-control"  name="dc"  required >
    </div>
     
       <div class="form-group">
    <label for="cabo">DB MEDIDO:</label>
      <input type="text" class="form-control"  name="db" required >
       
      </div>
      
  

    
    <div class="form-group">
    <label class="radio-inline"><input type="radio"  name="optradio" value="cdoe">CDOE</label>
<label class="radio-inline"><input type="radio" name="optradio" value="cdoi" >CDOI</label>

    </div><br>  


    <div class="form-group" id="tb1" ">
    <label for="cabo">N° CDOE:</label>
      <input type="text"  class="form-control"  name="cdoe" >
       
      </div>

      <div class="form-group" id="tb2">
    <label for="cabo">N° CDOI:</label>
      <input type="text" class="form-control"  name="cdoi" >
       
      


<div class="wrapper">
    <div class="toclone">
    <select name="list[qtd][]" style="display:none">
            <option value="0"></option>
        
        </select>
  
        <span>CDOIA</span><BR>
        <input  type="text" placeholder="N° CDOIA" name="produtos[qtd][1]">
        <button type="button" class="add">+</button>
        <button type="button" class="remove">-</button>
    </div>        
</div><br>
</div><br>
<script type="text/javascript">
function adicionar(){
  var ElementoClonado = $(this.parentNode).clone(); //clona o elemento
  var str = $(ElementoClonado).children('input').eq(0).attr('name').split("["); //divide o name por "["
  console.log(str);
  var intQtd = parseInt(str[2].split("]")[0]); //resgata o numero entre "[" e "]"
  console.log(intQtd);
  var newName = "produtos[qtd]["+(intQtd+1)+"]"; //novo valor name somado +1 do original
  ElementoClonado.children('input').eq(0).attr('name', newName); //seta o novo name para o elemento clonado
  $('.wrapper').append(ElementoClonado);
  $('.add').on("click", adicionar);
  $('.remove').on("click", remover);
  $(this).unbind("click");
}
function remover(){
  $(this.parentNode).remove();
}
$('.add').on("click", adicionar);
$('.remove').on("click", remover);

</script>

<div class="form-group">
    <label for="pwd">NOME GESTOR:</label>
    <br><select  name="gestor">
    <option selected value="PAULO">PAULO</option>
    <option value="b">B</option>
    <option value="c">C</option>
    </select>
    </div>



    <fieldset style="border: 1px solid; padding: 12px;">
    <div class="form-group">
    <label for="pwd">IDENTIFICAÇÃO:</label>
    <br><select class="custom-select my-1 mr-sm-2" name="ident" >
    <option selected value="ok">OK</option>
    <option value="nok">NOK</option>
    </select>
    </div>


   


    <div class="form-group">
    <label for="pwd">REDE EXTERNA:</label>
    <br><select class="custom-select my-1 mr-sm-2" name="rede_ext">
    <option selected value="ok">OK</option>
    <option value="nok">NOK</option>
    </select>
    </div>

    <div class="form-group">
    <label for="pwd">REDE INTERNA:</label>
    <br><select class="custom-select my-1 mr-sm-2" name="rede_int">
    <option selected value="ok">OK</option>
    <option value="nok">NOK</option>
    </select>
    </div>


    <div class="form-group">
    <label for="pwd">FUSÕES:</label>
    <br><select class="custom-select my-1 mr-sm-2" name="fusoes">
    <option selected value="ok">OK</option>
    <option value="nok">NOK</option>
    </select>
    </div>
    </fieldset><br>
     
     

     <div class="form-group">
      <label for="pwd">OBS:</label><br>  
      <textarea name="obs"  cols="70" rows="5" placeholder="Máximo 500 caracteres" maxlength="500"></textarea>
    </div>



    

    
    
     
     
  

    <!--
    <br><br>
    <div class="form-group" id="realcar">
    <label for="email">Foto Antes: </label>
    <input type="file"  id="ftaarquivo1" name="ftaarquivo1"   /> 


   
 <input type="file" id="ftaarquivo2"  name="ftaarquivo2" />
    <input type="file"  id="ftaarquivo3"  name="ftaarquivo3" />
    <input type="file"  id="ftaarquivo4"  name="ftaarquivo4" />
    <input type="file"  style="float:left" id="ftaarquivo5"  name="ftaarquivo5" /><br><br>
     </div>

     <div class="form-group" id="realcar2">
     <label for="email"  >Foto Depois </label>
    <input type="file"  id="ftdarquivo1"  name="ftdarquivo1" />  
    <input type="file"  id="ftdarquivo2"  name="ftdarquivo2" />
    <input type="file"   id="ftdarquivo3"  name="ftdarquivo3" />
    <input type="file"   id="ftdarquivo4"  name="ftdarquivo4" />
    <input type="file"  id="ftdarquivo5" name="ftdarquivo5"   />
     </div>

     -->
     <br><br><button type="submit" value="Enviar" class="btn btn-danger" id="enviar"> <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>
 
</div>


</body>
</html>


<script>
  
$(function() {

/*var  availableTags = [

"ajskkdp",
"iiisosoa",
"ooiismsm",
"aassdddd",
"ooedmmmd",
"iisoosoos"
];

$( "#cabo" ).autocomplete({
  source: availableTags

  });
*/

$.getJSON("listar_cabos.php", function(data){
//console.log(data);
var retorno = [];


$(data).each( function (key, value){

 // console.log(value.cabo);

 retorno.push(value.cabo);


});
$("#cabo").autocomplete({
  source: retorno ,

 

  });




  });
});






</script>

<!--
<script>
  
$(function() {



$.getJSON("listar_cabos.php", function(data2){
//console.log(data);
var retorno2 = [];


$(data2).each( function (key2, value2){

 // console.log(value.cabo);

 retorno2.push(value2.trecho);


});
$("#localidade").autocomplete({
  source: retorno2

  });




  });
});






</script>
-->