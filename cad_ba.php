
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


<script type="text/javascript">
       
      $(document).ready(function(){
          
         $("select[name=celula]").change(function(){
            $("select[name=logradouro]").html('<option value="0">Carregando...</option>');
             
            $.post("celulas.php",
                  {celula:$(this).val()},
                  function(valor){
                     $("select[name=logradouro]").html(valor);
                  }
                  )
             
         })



         $("select[name=logradouro]").change(function(){
            $("select[name=cdo]").html('<option value="0">Carregando...</option>');
            $.post("logradouro.php",
                  {logradouro:$(this).val()},
                    function(valor){
                      $("select[name=cdo]").html(valor);
                  }
                  )
          })




         $("select[name=cdo]").change(function(){
            $("select[name=fachada]").html('<option value="0">Carregando...</option>');
            $.post("cdo.php",
                  {cdo:$(this).val()},
                    function(valor){
                      $("select[name=fachada]").html(valor);
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
      <li class="active" style="float:right"><a href="pesq_ba.php">Busca Célula</a></li>
      <li class="active" style="float:right"><a href="pesq_per.php">Busca Período</a></li>
      <li class="active" style="float:right"><a href="logout.php">Logout</a></li>
      <?php if ($_SESSION["acesso"] == 'ADM'){ ?>
      <li class="active" style="float:right"><a href="dashboard.php">Voltar</a></li>
      <?php } else { ?>

     
      <li class="active" style="float:right"><a href="cad_ba.php">Voltar</a></li>
      <?php } ?>
      
      
      
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
    <label for="email" >CELULA:</label> <br>
    <select class="form-control"  name="celula">
       <option value="0" disabled="disabled" required >Escolha uma célula.</option>

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
    <label for="email" >LOGRADOURO:</label> <br>
    <select  name="logradouro" required >
       <option value="0" disabled="disabled" required>Escolha uma logradouro</option>
    </select>
        </div>

   
    <div class="form-group">
          <label for="email" >CDO:</label> 
       <select class="form-control" name="cdo" required>
       <option value="0">Escolha a fachada</option>
        
        
    </select>
    </div>
    
     
       <div class="form-group">
    <label for="cabo">DB MEDIDO:</label>
      <input type="text" class="form-control"  name="db" required >
       
      </div>
      
  
      <div class="form-group">
    <label for="pwd">TESTE:</label>
    <br><select  name="teste">
    <option selected value="BACKLOG">BACKLOG</option>
    <option value="OS">OS</option>
    
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
    <br><select class="custom-select my-1 mr-sm-2" name="fusao">
    <option selected value="ok">OK</option>
    <option value="nok">NOK</option>
    </select>
    </div>
    </fieldset><br>
     
     

     <div class="form-group">
      <label for="pwd">OBS:</label><br>  
      <textarea name="obs"  cols="70" rows="5" placeholder="Máximo 500 caracteres" maxlength="500"></textarea>
    </div>



    

    
    
     
     
  
    <div class="form-group" >
    <label for="email">Fotos: </label> <label style="font-size: 12px; color: red;" >(Permitido apenas fotos menores que 2MB)</label>
    <input type="file"  id="foto1" name="foto1" required /><br>
    <input type="file"  id="foto1" name="foto2" required />
   


   
 
    
     </div>
     <br><br><button type="submit" value="Enviar" class="btn btn-danger" id="enviar"> <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>
 
</div>


</body>
</html>


