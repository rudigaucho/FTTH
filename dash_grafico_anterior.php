<?php  include "conn.php";   
$mes = $_POST['mes'];
$ano = $_POST['ano'];



include "grafico_mes_anterior.php";  ?>


<?php 




session_start();



if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) || ($_SESSION["acesso"] == 'TEC' ) )
{
  header("Location: index.html");
  exit;
  
  
}






 


?>



<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript" src="loader.js"></script>
   <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart3);
    function drawChart3() {
      var data = google.visualization.arrayToDataTable([
        ["Atividades", "Total", { role: "style" } ],
        ["1", <?php echo $day_1 ?>, "blue"],
        ["2", <?php echo $day_ ?>, "blue"],
["3", <?php echo $day_3 ?>, "blue"],
["4", <?php echo $day_4 ?>, "blue"],
["5", <?php echo $day_5 ?>, "blue"],
["6", <?php echo $day_6 ?>, "blue"],
["7", <?php echo $day_7 ?>, "blue"],
["8", <?php echo $day_8 ?>, "blue"],
["9", <?php echo $day_9 ?>, "blue"],
["10", <?php echo $day_10 ?>, "blue"],
["11", <?php echo $day_11 ?>, "blue"],
["12", <?php echo $day_12 ?>, "blue"],
["13", <?php echo $day_13 ?>, "blue"],
["14", <?php echo $day_14 ?>, "blue"],
["15", <?php echo $day_15 ?>, "blue"],
["16", <?php echo $day_16 ?>, "blue"],
["17", <?php echo $day_17 ?>, "blue"],
["18", <?php echo $day_18 ?>, "blue"],
["19", <?php echo $day_19 ?>, "blue"],
["20", <?php echo $day_20 ?>, "blue"],
["21", <?php echo $day_21 ?>, "blue"],
["22", <?php echo $day_22 ?>, "blue"],
["23", <?php echo $day_23 ?>, "blue"],
["24", <?php echo $day_24 ?>, "blue"],
["25", <?php echo $day_25 ?>, "blue"],
["26", <?php echo $day_26 ?>, "blue"],
["27", <?php echo $day_27 ?>, "blue"],
["28", <?php echo $day_28 ?>, "blue"],
["29", <?php echo $day_29 ?>, "blue"],
["30", <?php echo $day_30 ?>, "blue"],
["31", <?php echo $day_31 ?>, "blue"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Atividades mes <?php echo $mes ?>",
        width: 1100,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("line_top_x"));
      chart.draw(view, options);
  }
  </script>




<link rel="icon" href="img/icon.ico">
   <script type="text/javascript" src="loader.js"></script>
   <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Atividades", "QUANTIDADE", { role: "style" } ],
        ["BA", <?php echo $BA ?>, "blue"],
        ["PREVENTIVO", <?php echo $PREVENTIVO ?>, "blue"],
        ["REPARO", <?php echo $REPARO ?>, "blue"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Contagem de tipo de Serviços <?php echo date('Y') ?>",
        width: 1000,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("top_x_div"));
      chart.draw(view, options);
  }
  </script>

<script type="text/javascript" src="loader.js"></script>
   <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart6);
    function drawChart6() {
      var data = google.visualization.arrayToDataTable([
        ["EQUIPE", "QUANTIDADE", { role: "style" } ],
        ["WILIAM GERSON",<?php echo $eqp1 ?>, "blue"],
        ["VALDICLEI DE LIMA",<?php echo $eqp2 ?>, "blue"],
        ["ADRIANO DOS SANTOS", <?php echo $eqp3 ?>, "blue"],
        ["VICTOR HENRIQUE", <?php echo $eqp4 ?>, "blue"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Contagem de atividade por equipe mês <?php echo $mes ?>",
        width: 1000,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("top_x_div3"));
      chart.draw(view, options);
  }
  </script>

    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Atividades", "Total", { role: "style" } ],
        ["JAN", <?php echo $JAN_TOTAL ?>, "blue"],
        ["FEV", <?php echo $FEV_TOTAL ?>, "blue"],
        ["MAR", <?php echo $MAR_TOTAL ?>, "blue"],
        ["ABR", <?php echo $ABR_TOTAL ?>, "blue"],
        ["MAI", <?php echo $MAI_TOTAL ?>, "blue"],
        ["JUN", <?php echo $JUN_TOTAL ?>, "blue"],
        ["JUL", <?php echo $JUL_TOTAL ?>, "blue"],
        ["AGO", <?php echo $AGO_TOTAL ?>, "blue"],
        ["SET", <?php echo $SETE_TOTAL ?>, "blue"],
        ["OUTU", <?php echo $OUTU_TOTAL ?>, "blue"],
        ["NOV", <?php echo $NOV_TOTAL ?>, "blue"],
        ["DEZ", <?php echo $DEZ_TOTAL ?>, "blue"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Atividades ano <?php echo date('Y') ?>",
        width: 1100,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("top_x_div2"));
      chart.draw(view, options);
  }
  </script>


<script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Fibra invertida',    <?php echo $F_INVERTIDA ?>],
          ['Spliter danificado',    <?php echo $SPLITER ?>],
          ['Carga alta/cabo baixo',    <?php echo $CABO ?>],
          ['Chuva / tempestades',    <?php echo $CHUVA ?>],
          ['Ação de terceiros',    <?php echo $ACAO ?>],
          ['Vandalismo',    <?php echo $VANDALISMO ?>],
          ['Falha na construção',    <?php echo $FALHA ?>],
          ['Sala Gpon',    <?php echo $GPON ?>],
          ['Sem intervenção',    <?php echo $SEM_INT ?>],
          ['Ataque de roedores e insetos',    <?php echo $INSETOS ?>],
          ['Fibra quebrada',    <?php echo $FIBRA ?>],
          ['Atenuação',    <?php echo $ATENU ?>]
          
        ]);

        var options = {
          title: 'Causas ofensoras ano <?php echo date('Y') ?> ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>




<script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Fibra invertida',    <?php echo $F_INVERTIDA_MES_BD ?>],
          ['Spliter danificado',    <?php echo $SPLITER_MES_BD ?>],
          ['Carga alta/cabo baixo',    <?php echo $CABO_MES_BD ?>],
          ['Chuva / tempestades',    <?php echo $CHUVA_MES_BD ?>],
          ['Ação de terceiros',    <?php echo $ACAO_MES_BD ?>],
          ['Vandalismo',    <?php echo $VANDALISMO_MES_BD ?>],
          ['Falha na construção',    <?php echo $FALHA_MES_BD ?>],
          ['Sala Gpon',    <?php echo $GPON_MES_BD ?>],
          ['Sem intervenção',    <?php echo $SEM_INT_MES_BD ?>],
          ['Ataque de roedores e insetos',    <?php echo $INSETOS_MES_BD ?>],
          ['Fibra quebrada',    <?php echo $FIBRA_BD ?>],
          ['Atenuação',    <?php echo $ATENU_BD ?>]
          
        ]);

        var options = {
          title: 'Causas ofensoras BD mês <?php echo $mes ?> ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));
        chart.draw(data, options);
      }
    </script>



<script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Fibra invertida',    <?php echo $F_INVERTIDA_MES_OS ?>],
          ['Spliter danificado',    <?php echo $SPLITER_MES_OS ?>],
          ['Carga alta/cabo baixo',    <?php echo $CABO_MES_OS ?>],
          ['Chuva / tempestades',    <?php echo $CHUVA_MES_OS ?>],
          ['Ação de terceiros',    <?php echo $ACAO_MES_OS ?>],
          ['Vandalismo',    <?php echo $VANDALISMO_MES_OS ?>],
          ['Falha na construção',    <?php echo $FALHA_MES_OS ?>],
          ['Sala Gpon',    <?php echo $GPON_MES_OS ?>],
          ['Sem intervenção',    <?php echo $SEM_INT_MES_OS ?>],
          ['Ataque de roedores e insetos',    <?php echo $INSETOS_MES_OS ?>],
          ['Fibra quebrada',    <?php echo $FIBRA_OS ?>],
          ['Atenuação',    <?php echo $ATENU_OS ?>]
          
        ]);

        var options = {
          title: 'Causas ofensoras OS mês <?php echo $mes ?> ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d3'));
        chart.draw(data, options);
      }
    </script>


    
<script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['BD',    <?php echo $MES_BD ?>],
          
          ['OS',    <?php echo $MES_OS ?>]
          
        ]);

        var options = {
          title: 'Causas ofensoras OS e BD mês <?php $mes ?> ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d4'));
        chart.draw(data, options);
      }
    </script>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CONTROLE DE EQP</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->

</head>

<body >


<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Período</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      <form class="form-inline" role="form"   method="POST" action="dash_grafico_anterior.php">
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Mês</label>
    <select class="form-control" id="exampleFormControlSelect1"  name="mes" >
      <option value="01" >Janeiro </option>
      <option value="02"> Fevereiro </option>
      <option value="03"> Março</option>
      <option value="04"> Abril</option>
      <option value="05" >Maio</option>
      <option value="06" >Junho</option>
      <option value="07">Julho</option>
      <option value="08">Agosto</option>
      <option value="09">Setembro</option>
      <option value="10" >Outubro</option>
      <option value="11">Novembro</option>
      <option value="12" >Dezembro</option>
    </select>
  </div>
  <div class="form-group">
  <label for="exampleFormControlSelect1">Ano</label>
    <select class="form-control" id="exampleFormControlSelect1" name="ano">
      <option value="2018" >2018</option>
      <option value="2019" selected >2019</option>
      <option value="2020">2020</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Buscar</button>
</form>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

        
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <a class="navbar-brand" href="#" > <?php echo $_SESSION["nome"]?></a>
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>   <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                      <!--
                        <li>
                            <a href="modifica_senha.php"><i class="fa fa-fw fa-gear"></i> Trocar senha</a> 
                        </li> 
                        <li class="divider"></li> -->
                        <li>
                            <a href="Logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                  <?php if($_SESSION["acesso"] == 'NOC' ){?>
                   <li class="dropdown">

        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-scale">  EQUIPAMENTOS</span>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
         
                 
                
        
        </ul>
      </li>
      <?php } ?>
      <li class="dropdown">

        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-transfer"> MENU
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        
          <li style="background:black;"><a href="dashboard.php"><span class="glyphicon "> Dashboard</a></li></span>
          
         
        
                 
                
        
        </ul>



      </li>
      
               
                   
                   
                </ul>
               


            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div  class="row" >
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Controle </small>

                        </h1>
                       
                        

           
                <!-- /.row -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Procurar Mês e Ano
</button>

                <div id="line_top_x" style="width: 1100px; height: 600px;"></div><br>
                <div id="top_x_div" style="width: 800px; height: 600px;"></div><br>
                <div id="top_x_div3" style="width: 400px; height: 300px;"></div><br><br><br>
                <div id="top_x_div2" style="width: 400px; height: 300px;"></div><br><br><br>
                
                <div id="piechart_3d" style="width: 800px; height: 600px;"></div><br><br><br>
               <div  id="piechart_3d2" style="width: 800px; height: 600px;"></div> <br><br><br>
               <div  id="piechart_3d3" style="width: 800px; height: 600px;"></div> <br><br><br>
               <div  id="piechart_3d4" style="width: 800px; height: 600px;"></div> 











                <!-- /.row -->



               
              <p style="margin-right:9%; font-size: 10px;"><strong>© Copyright Desenvolvimento Rudinei Rossales  </strong></p>

</body>

</html>
