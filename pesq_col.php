<?php include "conn.php"; session_start(); ?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="img/logo_serede.png">

<script type="text/javascript">
function fnExcelReport() {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

    tab_text = tab_text + '<x:Name>Relatorio Caixa Fechada</x:Name>';

    tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
    tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

    tab_text = tab_text + "<table border='1px'>";
    tab_text = tab_text + $('#myTable').html();
    tab_text = tab_text + '</table></body></html>';

    var data_type = 'data:application/vnd.ms-excel';
    
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        if (window.navigator.msSaveBlob) {
            var blob = new Blob([tab_text], {
                type: "application/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob, 'Test file.xls');
        }
    } else {
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'relatorio.xls');
    }

}





</script>





<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='adm.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
  <title>TESTE FTTH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Serede</a>
    </div>
    <ul class="nav navbar-nav">
      
      
      <li class="active" style="float:right"> <a href="#" id="test" onClick="javascript:fnExcelReport();">Gerar excel</a></li>
      <li class="active" style="float:right"><a href="logout.php">Logout</a></li>

      

      <?php if($_SESSION["acesso"] == 'ADM' ){?>   
        <li class="active" style="float:right"><a href="dashboard.php">Voltar</a></li>
      
      <?php } else { ?>
      <li class="active" style="float:right"><a href="cadastro.php">Voltar</a></li>

      <?php }  ?>
 
      
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>


  <form class="form-inline" role="form"   method="POST" action="pesq_col.php" style="margin-left:10%;">
    
<br>
<div class="form-group">
      <label for="email">  ID COLABORADOR  </label>
      <input type="text" class="form-control" id="id" name="id"  required placeholder="Pesquisa" >
    </div>

    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>


  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
      <th>BA</th>
      <th>CELULA</th>
      <th>CDOE/I</th>
      <th>TIPO2</th>
      <th>LOCALIDADE</th>
        <th>ENDEREÇO</th>
        <th>EQUIPE</th>
        <th>NOME</th>
        <th>DATA ATIVIDADE</th>
        <th>ATIVIDADE</th>
        
         <th>CAUSA</th>
         <th>SUB</th>
         <th>AÇÃO</th>
         <th>TIPO</th>
         <th>REDE</th>
        
         <th>RELATÓRIO</th>
        <th>PDF</th>
         
        
        
        
        

      </tr>
    </thead>
  
  <?php
  if (isset($_POST ['submit']) )
{


$data = $_POST['date'];
$data2 = $_POST['date2'];
$id = $_POST['id'];






$sql = mysql_query ("select  * from principal  where tecnico = '$id'" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );
$sql3 =  mysql_query ("select  * from principal  where tecnico = '$id'" );
 


}


$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">

      <td> <?php echo $dado ["ba"];  ?></td>
      <td> <?php echo $dado ["celula"];  ?></td>
      <td> <?php echo $dado ["cdoe_i"];  ?></td>
      <td> <?php echo $dado ["tipo2"];  ?></td>
      <td> <?php echo $dado ["localidade"];  ?></td>
<td> <?php echo $dado ["endereco"];  ?></td>
<td> <?php echo $dado ["equipe"];  ?></td>
<td> <?php echo $dado ["nome"];  ?></td>
<td> <?php echo $dado ["data_atv"];  ?></td>
<td> <?php echo $dado ["atividade"];  ?></td>
<td> <?php echo ereg_replace("[^A-Z, a-z]", " ", $dado ["causa"])  ?></td>

<td> <?php echo ereg_replace("[^A-Z, a-z]", " ", $dado ["sub_causa"]);  ?></td> 
<td> <?php echo $dado ["obs"];  ?></td>
<td> <?php echo $dado ["tipo"];  ?></td>
<td> <?php echo $dado ["rede"];  ?></td>






<?php
$foto1 = $dado ["foto"];
$protocolo = $dado ["protocolo"];
?>



<td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dado ['protocolo'];  ?>" >Visualizar</button> </td>

<td> <a href="gerar_pdf.php?protocolo=<?php echo $dado ["protocolo"]; ?>" target="_blank" class="btn btn-info btn-xs active" role="button" aria-pressed="true">Gerar Pdf</a></td>



<div class="modal fade" id="myModal<?php echo $dado ['protocolo'];  ?>" role="dialog">
    <div class="modal-dialog-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">RELATÓRIO<h4>
          <p>BA: <strong><?php echo $dado ["ba"];  ?></strong></p>
          <p>CELULA: <strong><?php echo $dado ["celula"];  ?></strong></p>
          <p>CDOE/I: <strong><?php echo $dado ["cdoe_i"];  ?></strong></p>
          <p>ENDEREÇO: <strong><?php echo $dado ["endereco"];  ?></strong></p>
          <p>ID TÉC: <strong><?php echo $dado ["tecnico"];  ?></strong></p>
          <p>EQUIPE: <strong><?php echo $dado ["equipe"];  ?></strong></p>
          <p>DATA: <strong><?php echo $dado ["data_atv"];  ?></strong></p>
          <p>CAUSA: <strong><?php echo $dado ["causa"];  ?></strong></p>
          <p>SUB: <strong><?php echo $dado ["sub_causa"];  ?></strong></p>
          <p>SERVIÇO: <strong><?php echo $dado ["servico"];  ?></strong></p>
          <p>CABO: <strong><?php echo $dado ["cabo"];  ?></strong></p>
          <p>CABO METRAGEM: <strong><?php echo $dado ["cabo_metro"];  ?></strong></p>
          <p>CAIXA: <strong><?php echo $dado ["caixa"];  ?></strong></p>
          
          <p>AÇÃO: <strong><?php echo $dado ["obs"];  ?></strong></p>


         
          


        <div class="modal-header" style="float:right; margin-top:-26%; margin-right:5%;">
        
            </div>
          <br><h4 class="modal-title">FOTOS<h4>
        
        </h4>
        <div class="modal-body">



        <?php echo "<img src='fotos/$foto1' class='img-rounded' alt='' width='400' height='400'>" ?>

     

         

        
            

        </div>
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
<!-- <a href="mapa2.php?lat=<?php // echo $coordenadas1 ?>&long=<?php // echo $coordenadas2 ?>" id="test" target="_blank" onClick="javascript:fnExcelReport();">GPS </a> -->
          



          </form>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


      </tr> 
  <?php } 
while ($dado = mysql_fetch_assoc($sql3))
  {
     $conta = $dado ["conta"]; 
  }
   }   

    ?>
  <span class="label label-primary" style="float:right; margin-right:2%;"><?php echo $conta;?></span>


    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>






</body>
</html>

