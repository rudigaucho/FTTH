<?php include "conn.php"; ?>
<?php 

session_start();


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="icon" href="img/logo_serede.png">

<script type="text/javascript">
function fnExcelReport() {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

    tab_text = tab_text + '<x:Name>Relatorio </x:Name>';

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
 
  
  <form class="form-inline" role="form"  method="POST" action="pesq_ba.php"  style="margin-left:10%;">
    <div class="form-group">
      <label for="email">Escolha a célula</label>
      <select class="form-control " id="celula" name="celula"  >


    
        <?php
       
          
         $sql = "SELECT * FROM principal GROUP BY celula ASC";
         $qr = mysql_query($sql) or die(mysql_error());
         while($ln = mysql_fetch_assoc($qr)){
            echo '<option value="'.$ln['celula'].'">'.$ln['celula'].'</option>';
         }
      ?>
</select>
    </div>
    
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>
</div>

  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
      <th>CELULA</th>
        <th>CDO</th>
        <th>DATA</th>
        <th>ENDEREÇO</th>
        <th>FACHADA</th>
         <th>DB</th>
         <th>GESTOR</th>
         <th>RELATÓRIO</th>
        <th>ANEXAR FOTOS</th>
        <th>PDF</th>
      
       
      </tr>
    </thead>
  
  <?php
if (isset($_POST ['submit']) )
{
$busca = $_POST['celula'];


$sql = mysql_query ("select * from principal where celula = '".$busca."' " );

$sql2 = mysql_query ("select * from principal where celula = '".$busca."'" );





$row = mysql_num_rows($sql);
$row2 = mysql_num_rows($sql2);

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql )){
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <tbody>
      <tr class="success">
      <td> <?php echo $dado ["celula"];  ?></td>
<td> <?php echo $dado ["cdo"];  ?></td>
<td> <?php echo $dado ["data"];  ?></td>
<td> <?php echo $dado ["logradouro"];  ?></td>
<td> <?php echo $dado ["fachada"];  ?></td>
<td> <?php echo $dado ["db"];  ?></td>

<td> <?php echo $dado ["gestor"];  ?></td>




<?php
$fachada = $dado ["fachada"];
$logradouro = $dado ["logradouro"];

$sql2 = mysql_query ("select  * from foto  where logradouro = '$logradouro' and fachada = '$fachada'" );
$row2 = mysql_num_rows($sql2);
 if  ($row2 > 0)
{


while ($dado2 = mysql_fetch_assoc($sql2)){

$foto1 = $dado2["foto1"];  
$foto2 = $dado2["foto2"];  
$cdo = $dado2["cdo"];  

}
   
  

  
}
?>

<td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dado ['id'];  ?>" >Visualizar</button> </td>
<?php if ($dado ["editada"] == 'N'){ ?>
<td> <a href="enviar_foto.php?id=<?php echo $dado ["id"]; ?>" class="btn btn-info btn-xs active" role="button" aria-pressed="true">Anexar</a> </td>
<?php } else { ?> <td> </td>  <?php } ?>
<td> <a href="gerar_pdf.php?id=<?php echo $dado ["id"]; ?>" target="_blank" class="btn btn-info btn-xs active" role="button" aria-pressed="true">Gerar Pdf</a></td>



<div class="modal fade" id="myModal<?php echo $dado ['id'];  ?>" role="dialog">
    <div class="modal-dialog-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
                  



          <h4 class="modal-title" style="text-align:center">RELATÓRIO<h4>
          <p>CELULA: <strong><?php echo $dado ["celula"];  ?></strong></p>
          <p>CDO: <strong><?php echo $dado ["cdo"];  ?></strong></p>
          <p>DATA: <strong><?php echo $dado ["data"];  ?></strong></p>
          <p>DB: <strong><?php echo $dado ["db"];  ?></strong></p>
          <p>IDENTIFICAÇÃO: <strong><?php echo $dado ["ident"];  ?></strong></p>
          <p>REDE EXTERNA: <strong><?php echo $dado ["rede_ext"];  ?></strong></p>
          <p>REDE INTERNA: <strong><?php echo $dado ["rede_interna"];  ?></strong></p>
          <p>FUSÃO: <strong><?php echo $dado ["fusao"];  ?></strong></p>
          <p>OBS: <strong><?php echo $dado ["obs"];  ?></strong></p>
          <h4 class="modal-title">FOTO ANTES<h4>
        </div>
        <div class="modal-body">

        <?php echo "<img src='fotos/$foto1' class='img-rounded' alt='' width='400' height='400'>" ?>

        <?php echo "<img src='fotos/$foto2' class='img-rounded' alt='' width='400' height='400'>" ?>

        
          
            

        </div>

        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
<!-- <a href="mapa2.php?lat=<?php // echo $coordenadas1 ?>&long=<?php // echo $coordenadas2 ?>" id="test" target="_blank" onClick="javascript:fnExcelReport();">GPS </a> -->

          
         


          
        </div>
      </div>
      
    </div>
  </div>
  
</div>


      </tr> 
  <?php }  } }   
   
    ?>



    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>
<?php 

if (isset($_POST ['ok']) )
{

$id =$_POST['id'];
$serie =$_POST['n_serie'];


$query = "insert into carga_colaborador (n_serie,id_col,data)";
$query.= "values ('$serie','$id',NOW())";
$query2 = "delete from pendente where n_serie = '$serie'";

$sql = mysql_query($query);
$sql2 = mysql_query($query2);
if($sql && $sql2)
{
  
  echo "<h2>Enviado com sucesso!</h2>";
  echo "<script>loginsuccessfully()</script>";
  
}
else
{
  
  echo "Erro no cadastro!";
  
}







}

?>



</body>
</html>

