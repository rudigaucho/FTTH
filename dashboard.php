<?php
      include "conn.php"; 
      
      include "grafico.php"; 


         




session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) || ($_SESSION["acesso"] != 'ADM' ) )
{
  header("Location: index.html");
  exit;
  
  
}



 
      ?>







<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="img/logo_serede.png">
   <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Teste', '', ''],
          ['JAN', <?php echo $JAN ?>, 0, 0],
          ['FEV', <?php echo $FEV ?>,0, 0],
          ['MAR', <?php echo $MAR ?>, 0, 0],
          ['ABR', <?php echo $ABR ?>, 0, 0],
          ['MAI', <?php echo $MAI ?>, 0, 0],
          ['JUN', <?php echo $JUN ?>, 0, 0],
          ['JUL', <?php echo $JUL ?>, 0, 0],
          ['AGO', <?php echo $AGO ?>, 0, 0],
          ['SET', <?php echo $SET ?>, 0, 0],
          ['OUT', <?php echo $OUT ?>, 0, 0],
          ['NOV', <?php echo $NOV ?>, 0, 0],
          ['DEZ', <?php echo $DEZ ?>, 0, 0]
        ]);

        var options = {
          chart: {
            title: 'Total Testes  <?php echo date('Y') ?>',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Atividades'],
          ['LOG 1', <?php echo $LOG_1 ?>],
          ['LOG 2', <?php echo $LOG_2 ?>],
          ['LOG 3', <?php echo $LOG_3 ?>],
          ['LOG 4', <?php echo $LOG_4 ?>],
          ['LOG 5', <?php echo $LOG_5 ?>],
          ['LOG 6', <?php echo $LOG_6 ?>],
          ['LOG 7', <?php echo $LOG_7 ?>],
          ['LOG 8', <?php echo $LOG_8 ?>],
          ['LOG 9', <?php echo $LOG_9 ?>],
          ['LOG 10', <?php echo $LOG_10 ?>],
          ['LOG 11', <?php echo $LOG_11 ?>],
          ['LOG 12', <?php echo $LOG_12 ?>]
          

         
          
        ]);

        var options = {
          width: 900,
          legend: { position: 'none' },
          chart: {
            title: 'Total de atividades por gestor ano BACKLOG <?php echo date('Y') ?>',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: 'Equipes'} // Top x-axis.
            }
          },
          bar: { groupWidth: "80%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>




<script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff2);

      function drawStuff2() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Atividades'],
          ['OS 1', <?php echo $OS_1 ?>],
          ['OS 2', <?php echo $OS_2 ?>],
          ['OS 3', <?php echo $OS_3 ?>],
          ['OS 4', <?php echo $OS_4 ?>],
          ['OS 5', <?php echo $OS_5 ?>],
          ['OS 6', <?php echo $OS_6 ?>],
          ['OS 7', <?php echo $OS_7 ?>],
          ['OS 8', <?php echo $OS_8 ?>],
          ['OS 9', <?php echo $OS_9 ?>],
          ['OS 10', <?php echo $OS_10 ?>],
          ['OS 11', <?php echo $OS_11 ?>]
          
          
         
          
        ]);

        var options = {
          width: 900,
          legend: { position: 'none' },
          chart: {
            title: 'Total de atividades por gestor ano OS <?php echo date('Y') ?>',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: 'Equipes'} // Top x-axis.
            }
          },
          bar: { groupWidth: "80%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div2'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>




  





  


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TESTE FTTH</title>

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
<meta http-equiv="refresh" content="60; url=dashboard.php">
</head>

<body >

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
            <ul  class="nav navbar-right top-nav">
                <a  class="navbar-brand" href="#" > <?php echo $_SESSION["nome"]?></a>
              
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
                  
                   <li class="dropdown">

        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-scale">  MENU</span>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
        <li style="background:black;"><a href="cad_ba.php"><span class="glyphicon glyphicon-pencil"> CADASTRO </a></li>
          <li style="background:black;"><a href="pesq_per.php"><span class="glyphicon glyphicon-calendar"> BUSCA PERÍODO</a></li>
          <li style="background:black;"><a href="pesq_ba.php"><span class="glyphicon glyphicon-search"> BUSCA CDO</a></li>
          </li>
          <li style="background:black;"><a href="pesq_celula_final.php"><span class="glyphicon glyphicon-search"> BUSCA CELULA </a></li>
          <li style="background:black;"><a href="pesq_col.php"><span class="glyphicon glyphicon-search"> BUSCA TÉCNICO </a></li>
          
                 
                
        
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
                            Dashboard <small>Controle</small>

                        </h1>
                       
                        <ol class="breadcrumb">
                            <li class="active">
                                <i > <h4>Relatório Gráfico Testes FTTH PR</h4></i>
                            </li>
                        </ol>

                    </div>
                </div>
                <!-- /.row -->

           
                <!-- /.row -->

                <div id="columnchart_material" style="width: 800px; height: 500px;"></div><br><br>
                <div id="top_x_div" style="width: 800px; height: 600px;"></div><br><br><br>
                <div id="top_x_div2" style="width: 800px; height: 600px;"></div><br><br><br>
                

                <?php 

$sql = mysql_query ("select  celula,count(*) as total,sum(total_enc) as encerradas from CELULAS  group by celula" );




$row = mysql_num_rows($sql);


if (mysql_num_rows($sql) > 0){

 

?>


                <table class="table">
  <thead>
    <tr>
      <th scope="col">CÉLULA</th>
      <th scope="col">TOTAL</th>
      <th scope="col">ENCERRADAS</th>
      
    </tr>
  </thead>
  <tbody>

  <?php  while ($dado = mysql_fetch_assoc($sql)){
    $dado2 = mysql_fetch_assoc($sql2); ?>
    <tr>
      
      <td><?php echo $dado ["celula"];  ?></td>
      <td><?php echo $dado ["total"]; ?></td>
      <td><?php echo $dado ["encerradas"]; ?></td>
      
    </tr>
    <?php }} ?> 
  </tbody>
</table>

                



























                <!-- /.row -->



               
              <p style="margin-right:9%; font-size: 10px;"><strong>© Copyright Desenvolvimento Rudinei Rossales  </strong></p>

</body>

</html>
