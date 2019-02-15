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
          ['JAN', 22, 0, 0],
          ['FEV', 37,0, 0],
          ['MAR', 15, 0, 0],
          ['ABR', 50, 0, 0],
          ['MAI', 42, 0, 0],
          ['JUN', 88, 0, 0],
          ['JUL', 29, 0, 0],
          ['AGO', 11, 0, 0],
          ['SET', 14, 0, 0],
          ['OUT', 65, 0, 0],
          ['NOV', 12, 0, 0],
          ['DEZ', 12, 0, 0]
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
          ['PAULO', 10],
          ['GESTOR Y', 15],
          ['GESTOR W', 13],
          ['GESTOR F', 2],
          ['GESTOR P', 7]
         
          
        ]);

        var options = {
          width: 900,
          legend: { position: 'none' },
          chart: {
            title: 'Total de atividades por gestor ano <?php echo date('Y') ?>',
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
            <ul class="nav navbar-right top-nav">
                <a class="navbar-brand" href="#" > <?php // echo $_SESSION["nome"]?></a>
              
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
          <li style="background:black;"><a href="pesq_ba.php"><span class="glyphicon glyphicon-search"> BUSCA CÉLULA</a></li>
          
                 
                
        
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
                











                <!-- /.row -->



               
              <p style="margin-right:9%; font-size: 10px;"><strong>© Copyright Desenvolvimento Rudinei Rossales  </strong></p>

</body>

</html>
