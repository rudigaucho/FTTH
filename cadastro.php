
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
       
      $(document).ready(function(){
          
         $("select[name=causa]").change(function(){
            $("select[name=sub]").html('<option value="0">Carregando...</option>');
             
            $.post("causa.php",
                  {causa:$(this).val()},
                  function(valor){
                     $("select[name=sub]").html(valor);
                  }
                  )

                 
             
         })



         $("select[name=cdo]").change(function(){
            $("select[name=logradouro]").html('<option value="0">Carregando...</option>');
            $.post("cdo.php",
                  {cdo:$(this).val()},
                    function(valor){
                      $("select[name=logradouro]").html(valor);
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

document.querySelector("#dinamico").innerHTML = con_consulta.responseText;


document.getElementById("loading").style.display = "none";

}

}

var id = document.getElementById("id").value;

con_consulta.open("GET","processar_id.php?id="+id,true);
con_consulta.send(null);






}
</script>







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
 
      <li class="active" style="float:right"><a href="pesq_col.php">Busca Colaborador</a></li>
      <li class="active" style="float:right"><a href="pesq_per.php">Busca Período</a></li>
      <li class="active" style="float:right"><a href="logout.php">Logout</a></li>
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

    
  
  <form class="form" role="form" name="seachform" method="post" action="enviar.php " enctype="multipart/form-data" >
  <div class="form-group">
    <label for="cabo">BA:</label>
      <input type="text" class="form-control"  name="ba" required >
       
      </div>
  <div class="form-group">
    <label for="cabo">CELULA:</label>
      <input type="text" class="form-control"  name="celula" required >
       
      </div>

      

  <div class="form-group">
    <label for="cabo">NÚMERO:</label>
      <input type="text" class="form-control"  name="cdoe_i" required >
       
      </div>

      <div class="form-group">  
    <label for="email" >CDOE / I:</label> <br>
    <select  name="tipo2" required >
       <option value="CDOE"  >CDOE</option>
       <option value="CDOI"  >CDOI</option>
       <option value="CDOI.A"  >CDOI.A</option>
    </select>
        </div>

      <div class="form-group">
    <label for="cabo">ENDEREÇO:</label>
      <input type="text" class="form-control"  name="endereco" required >
       
      </div>

      <div class="form-group">
    <label for="cabo">LOCALIDADE:</label>
      <input type="text" class="form-control"  name="local"  maxlength="6" required >
       
      </div>


      <div class="form-group">  
    <label for="email" >CABO / MODELO:</label> <br>
    <select  name="cabo" required >
       <option value="06 FO"  >06 FO</option>
       <option value="12 FO"  >12 FO</option>
       <option value="18 FO"  >18 FO</option>
       <option value="24 FO"  >24 FO</option>
       <option value="36 FO"  >36 FO</option>
       <option value="48 FO"  >48 FO</option>
       <option value="72 FO"  >72 FO</option>
       <option value="144 FO"  >144 FO</option>
    </select>
        </div>

        <div class="form-group">
    <label for="cabo">METRAGEM CABO:</label>
      <input type="text" class="form-control"  name="cabo_metro"   required >
       
      </div>

      <div class="form-group">  
    <label for="email" >USO DE CAIXA:</label> <br>
    <select  name="caixa" required >
       <option value="NAO"  >NÃO</option>
       <option value="CEO"  >CEO</option>
       <option value="CDOE"  >CDOE</option>
       <option value="CDOI"  >CDOI</option>
       
    </select>
        </div>


      <img src="img/loading.gif" id="loading" style="display:none; width:50px;height:50px;" /> 
      <div class="form-group" id="dinamico" >
    <label for="cabo">ID TÉCNICO / EQUIPE:</label>
      <input type="text" class="form-control"  name="id" id="id" onblur="completar_campos();" required >
       
      </div>
      
      

      <div class="form-group">  
    <label for="email" >ATIVIDADE:</label> <br>
    <select  name="atv" required >
       <option value="BD"  >Aereo</option>
       <option value="OS"  >OS</option>
    
    </select>
        </div>


        

      <div class="form-group">


        <label for="data">
          DATA DO TERMINO DA ATIVIDADE
        </label>
        <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
        <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

        <!--Font Awesome (added because you use icons in your prepend/append)-->
        <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

        <!-- Inline CSS based on choices in "Settings" tab -->
        <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

        <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
        <div class="bootstrap-iso">

          <div class="row">


            <div class="form-group ">

              <div class="col-sm-10">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar">
                    </i>
                  </div>
                  <input class="form-control" id="date" name="date" autocomplete="off" placeholder="DD/MM/AAAA" type="text" />
                </div>
              </div>
            </div>



          </div>

        </div>


        <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
        <!-- Include jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

        <script>
          $(document).ready(function(){
  var date_input=$('input[name="date"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
  })
 })
</script>





      </div>
      
   
    
     
     

     <div class="form-group">
      <label for="pwd">AÇÃO:</label><br>  
      <textarea name="obs"  cols="70" rows="5"  maxlength="1000"></textarea>
    </div>



    <div class="form-group">  
    <label for="email" >CAUSA:</label> <br>
    <select class="form-control"  name="causa">
       <option value="0" disabled="disabled" required >Escolha uma Causa</option>

        <?php
     
          
         $sql = "SELECT * FROM codigos  group by causa order by cod";
         $qr = mysql_query($sql) or die(mysql_error());
         do {
            echo '<option value="'.$ln['causa'].'">'.$ln['causa'].'</option>';
         }while($ln = mysql_fetch_assoc($qr))
      ?>
    </select>
        </div> 

        <div class="form-group">  
    <label for="email" >SUB:</label> <br>
    <select  name="sub" required >
       <option value="0" disabled="disabled" required>Escolha uma subcausa</option>
    </select>
        </div>


        <div class="form-group">  
    <label for="email" >Serviço:</label> <br>
    <select  name="servico" required >
       <option value="1- RECUPERADO"  required>1- RECUPERADO</option>
       <option value="2- PENDENTE"  required>2- PENDENTE</option>
    </select>
        </div>


        <div class="form-group">  
    <label for="email" >Tipo:</label> <br>
    <select  name="tipo" required >
       <option value="PREVENTIVO"  required>PREVENTIVO</option>
       <option value="REPARO"  required>REPARO</option>
       <option value="BA"  required>BA</option>
    </select>
        </div>

   
    <div class="form-group">

    
    
     
     
  
    <div class="form-group" >
    <label for="email">Fotos:</label> <label style="font-size: 12px; color: red;" >(Permitido apenas fotos menores que 2MB)</label>
    <input type="file"  id="foto1" name="foto1"  /><br>
   
   


   
 
    
     </div>
     <br><br><button type="submit" value="Enviar" class="btn btn-danger" id="enviar"> <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>
 
</div>


</body>
</html>


