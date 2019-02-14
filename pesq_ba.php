<?php include "conn.php"; ?>
<?php 

session_start();


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="icon" href="img/logo_oi.ico">

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
  <title>PREVENTIVA DE FIBRA</title>
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
      <label for="email">Digite o N° do B.A</label>
      <input type="text" class="form-control" id="ba" name="ba" placeholder="Pesquisa" required>
    </div>
    
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>
</div>

  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
        <th>B.A</th>
        <th>EQUIPE</th>
        <th>UF</th>
        <th>Data</th>
         <th>ENTRE LOCALIDADES</th>
       
      
    
        <th>COORDENADAS</th>
         <th>COORDENADAS</th>
        <th>RELATÓRIO</th>
        <th>ANEXAR FOTOS</th>
        <th>Gerar Pdf</th>
      
       
      </tr>
    </thead>
  
  <?php
if (isset($_POST ['submit']) )
{
$busca = $_POST['ba'];

if ($_SESSION["acesso"] == 'TEC'){
$sql = mysql_query ("select * from atv_comp_principal where ba = '".$busca."' and equipe = '".$_SESSION['equipe']."'" );

$sql2 = mysql_query ("select * from fotos where ba = '".$busca."'and equipe = '".$_SESSION['equipe']."'" );

}

else{

  $sql = mysql_query ("select * from atv_comp_principal where ba = '".$busca."'" );

  $sql2 = mysql_query ("select * from fotos where ba = '".$busca."'" );


}

$row = mysql_num_rows($sql);
$row2 = mysql_num_rows($sql2);

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql )){
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <tbody>
      <tr class="success">
      <td> <?php echo $dado ["ba"];  ?></td>
<td> <?php echo $dado ["equipe"];  ?></td>
<td> <?php echo $dado ["uf"];  ?></td>
<td> <?php echo $dado ["data"];  ?></td>
 <td> <?php echo $dado ["entre_loc"];  ?></td>




<td> <?php echo $dado ["coordenadas1"];  ?></td>
<td> <?php echo $dado ["coordenadas2"];  ?></td>
<?php $foto_ant1 = $dado ["foto_antes1"];  ?>
<?php $foto_ant2 = $dado ["foto_antes2"];  ?>
<?php $foto_ant3 = $dado ["foto_antes3"];  ?>
<?php $foto_ant4 = $dado ["foto_antes4"];  ?>
<?php $foto_ant5 = $dado ["foto_antes5"];  ?>

<?php $foto_dep1 = $dado ["foto_dep1"];  ?>
<?php $foto_dep2 = $dado ["foto_dep2"];  ?>
<?php $foto_dep3 = $dado ["foto_dep3"];  ?>
<?php $foto_dep4 = $dado ["foto_dep4"];  ?>
<?php $foto_dep5 = $dado ["foto_dep5"];  ?>
<?php $coordenadas1 = $dado ["coordenadas1"];  ?>
<?php $coordenadas2 = $dado ["coordenadas2"];  ?>






<td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dado ['ba'];  ?>" >Visualizar</button> </td>
<?php if ($_SESSION["acesso"] == 'TEC' and $dado ["editada"] == 'N'){ ?>
<td> <a href="enviar_foto.php?ba=<?php echo $dado ["ba"]; ?>" class="btn btn-info btn-xs active" role="button" aria-pressed="true">Anexar</a> </td>
<?php } else { ?> <td> </td>  <?php } ?>
<td> <a href="gerar_pdf.php?ba=<?php echo $dado ["ba"]; ?>" target="_blank" class="btn btn-info btn-xs active" role="button" aria-pressed="true">Gerar Pdf</a>


<div class="modal fade" id="myModal<?php echo $dado ['ba'];  ?>" role="dialog">
    <div class="modal-dialog-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
                  



          <h4 class="modal-title" style="text-align:center">RELATÓRIO<h4>
          <p>BA: <strong><?php echo $dado ["ba"];  ?></strong></p>
        <p>EQUIPE: <strong><?php echo $dado ["equipe"];  ?></strong></p>
        <p>Data: <strong><?php echo $dado ["data"];  ?></strong></p>
        <p>ENTRE LOCALIDADES: <strong><?php echo $dado ["entre_loc"];  ?></strong></p>
        <p>VISTORIASN DE CABOS: <strong><?php echo $dado ["vist_cabos"];  ?></strong></p>
        <p>POSTES SUBS: <strong><?php echo $dado ["poste_subs"];  ?></strong></p>
        <p>POSTES APRU: <strong><?php echo $dado ["postes_apru"];  ?></strong></p>
        <p>READEQUAÇÃO: <strong><?php echo $dado ["read_rede"];  ?></strong></p>
        <p>REDISPOSIÇÃO DE CABOS: <strong><?php echo $dado ["read_cabos"];  ?></strong></p>
        <p>LANÇAMENTOS DE CABOS: <strong><?php echo $dado ["lancamentos_cab"];  ?></strong></p>
        <p>PODA ROÇADAS: <strong><?php echo $dado ["poda_rocada"];  ?></strong></p>
        <p>POSTES IMPLANTADOS: <strong><?php echo $dado ["postes_implant"];  ?></strong></p>

        <p>CABO: <strong><?php echo $dado ["cabo"];  ?></strong></p>
        <p>VISTÓRIAS ESTÁTICAS: <strong><?php echo $dado ["vistorias_esta"];  ?></strong></p>
       
            <p>COORDENADAS: <strong><?php echo $dado ["coordenadas1"];  ?></strong></p>
            <p>COORDENADAS: <strong><?php echo $dado ["coordenadas2"];  ?></strong></p>
          <h4 class="modal-title">FOTO ANTES<h4>
        </div>
        <div class="modal-body">

        <?php echo "<img src='fotos/$foto_ant1' class='img-rounded' alt='' width='400' height='400'>" ?>

          <?php echo "<img src='fotos/$foto_ant2' class='img-rounded' alt='' width='400' height='400'>" ?>

          <?php echo "<img src='fotos/$foto_ant3' class='img-rounded' alt='' width='400' height='400'>" ?>

          <?php echo "<img src='fotos/$foto_ant4' class='img-rounded' alt='' width='400' height='400'>" ?>

          <?php echo "<img src='fotos/$foto_ant5' class='img-rounded' alt='' width='400' height='400'>" ?>

        <form method="post" action="busca_pendente.php">
          
            

        </div>

         <div class="modal-body">
         <h4 class="modal-title">FOTO DEPOIS<h4>

        <?php echo "<img src='fotos/$foto_dep1' class='img-rounded' alt='' width='400' height='400'>" ?>

            <?php echo "<img src='fotos/$foto_dep2' class='img-rounded' alt='' width='400' height='400'>" ?>

              <?php echo "<img src='fotos/$foto_dep3' class='img-rounded' alt='' width='400' height='400'>" ?>

                <?php echo "<img src='fotos/$foto_dep4' class='img-rounded' alt='' width='400' height='400'>" ?>

                  <?php echo "<img src='fotos/$foto_dep5' class='img-rounded' alt='' width='400' height='400'>" ?>

        <form method="post" action="mapa2.php">
          
            

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

