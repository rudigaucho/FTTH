
<?php
     include "conn.php";  
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!--  FUNCAO COMPLETAR CAMPO TRECHO-->

<script type="text/javascript">
       
      $(document).ready(function(){
          
         $("select[name=celulas]").change(function(){
            $("select[name=cdoia]").html('<option value="0">Carregando...</option>');
             
            $.post("cdoia.php",
                  {cdoi:$(this).val()},
                  function(valor){
                     $("select[name=cdoia]").html(valor);
                  }
                  )
             
         })



        



       
      })
       
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









<link rel="icon" href="img/logo_serede.png">




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
      <a class="navbar-brand" href="#"><?php echo $_SESSION["nome"] ;?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active" style="float:right"><a href="#">Busca Célula</a></li>
      <li class="active" style="float:right"><a href="#">Busca Período</a></li>
      <li class="active" style="float:right"><a href="#">Logout</a></li>
      <?php if ($_SESSION["acesso"] == 'ADM'){ ?>
      <li class="active" style="float:right"><a href="dashboard.php">Voltar</a></li>
      <?php } else { ?>

     
      
      <?php } ?>
      
      
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>
<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >

    
  
  <form class="form" role="form" name="seachform" method="post" action="enviar_cdoia.php " enctype="multipart/form-data" >

  <div class="form-group">  
    <label for="email" >CELULA:</label> <br>
    <select class="form-control"  name="celulas">
       <option value="0" disabled="disabled" required >Escolha uma CDOI.</option>

       <?php
     
          
         $sql = "SELECT * FROM celulas group by celula";
         $qr = mysql_query($sql) or die(mysql_error());
         do {
            echo '<option value="'.$ln['celula'].'">'.$ln['celula'].'</option>';
         }while($ln = mysql_fetch_assoc($qr))
      ?>
    </select>
        </div> 

        <div class="form-group">  
    <label for="email" >CDOI:</label> <br>
    <select  name="cdoia" required >
       <option value="0" disabled="disabled" required>Escolha uma CDOI</option>
    </select>
        </div>

        
    
     
      
  
      


    

    
    
     
     
  
        <fieldset style="border: 1px solid black; padding: 8px; "> 
<span><strong>FOTOS:</strong></span><br><br>
 
<!-- name="list[qtd][]" -->

<div class="wrapper">
    <div class="toclone">
  
        <input  type="file" name="fotos[]" required>
          <input  type="text" name="list[]" placeholder="Digite a CDOIA" required><br><br>
          <input  type="file" name="fotos[]" required>
          <input  type="text" name="list[]" placeholder="Digite a CDOIA" required><br><br>
        <button type="button" class="add">+</button>
        <button type="button" class="remove">-</button><br><br>

    </div> <br>        
</div>

</fieldset>  
<script type="text/javascript">
function adicionar(){
  var ElementoClonado = $(this.parentNode).clone(); //clona o elemento
  
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
   

     <br><br><button type="submit" value="Enviar" class="btn btn-danger" id="enviar"> <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>
 
</div>


</body>
</html>


