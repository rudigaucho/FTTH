


<?php


//-------------------------------------------  GRAFICO TOTAL MêS GA ----------------------------------------------------------------

$sql1 = mysql_query ("SELECT count(*) as day_1 from principal where day(data_atv) = '01' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql1 )){


  $day_1 = $dado["day_1"];


 } 

 $sql2 = mysql_query ("SELECT count(*) as day_2 from principal where day(data_atv) = '02' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql2 )){

    $day_2 = $dado["day_2"];
  

 } 


 $sql3 = mysql_query ("SELECT count(*) as day_3 from principal where day(data_atv) = '03' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql3 )){


    $day_3 = $dado["day_3"];
   

 } 

 $sql4 = mysql_query ("SELECT count(*) as day_4 from principal where day(data_atv) = '04' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql4 )){


    $day_4 = $dado["day_4"];
   

 } 


 $sql5 = mysql_query ("SELECT count(*) as day_5 from principal where day(data_atv) = '05' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql5 )){


    $day_5 = $dado["day_5"];
   

 } 


 $sql6 = mysql_query ("SELECT count(*) as day_6 from principal where day(data_atv) = '06' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql6 )){


    $day_6 = $dado["day_6"];


 } 

 $sql7 = mysql_query ("SELECT count(*) as day_7 from principal where day(data_atv) = '07' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql7 )){


    $day_7 = $dado["day_7"];
  

 } 


 $sql8 = mysql_query ("SELECT count(*) as day_8 from principal where day(data_atv) = '08' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql8 )){


    $day_8 = $dado["day_8"];
    


 } 

 $sql9 = mysql_query ("SELECT count(*) as day_9 from principal where day(data_atv) = '09' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql9 )){


    $day_9 = $dado["day_9"];
 

 } 


 $sql10 = mysql_query ("SELECT count(*) as day_10 from principal where day(data_atv) = '10' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql10 )){


    $day_10 = $dado["day_10"];
    

 } 


  $sql11 = mysql_query ("SELECT count(*) as day_11 from principal where day(data_atv) = '11' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql11 )){


    $day_11 = $dado["day_11"];
    

 } 

  $sql12 = mysql_query ("SELECT count(*) as day_12 from principal where day(data_atv) = '12' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql12 )){


    $day_12 = $dado["day_12"];
  
 } 


 $sql12 = mysql_query ("SELECT count(*) as day_12 from principal where day(data_atv) = '12' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql12 )){


    $day_12 = $dado["day_12"];
  
 } 


 $sql15 = mysql_query ("SELECT count(*) as day_13 from principal where day(data_atv) = '13' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql15 )){


    $day_13 = $dado["day_13"];
  
 }

 $sql16 = mysql_query ("SELECT count(*) as day_14 from principal where day(data_atv) = '14' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql16 )){


    $day_14 = $dado["day_14"];
  
 }

 $sql17 = mysql_query ("SELECT count(*) as day_15 from principal where day(data_atv) = '15' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql17 )){


    $day_15 = $dado["day_15"];
  
 }


 $sql18 = mysql_query ("SELECT count(*) as day_16 from principal where day(data_atv) = '16' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql18 )){


    $day_16 = $dado["day_16"];
  
 }

 $sql19 = mysql_query ("SELECT count(*) as day_17 from principal where day(data_atv) = '17' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql19 )){


    $day_17 = $dado["day_17"];
  
 }


 $sql20 = mysql_query ("SELECT count(*) as day_18 from principal where day(data_atv) = '18' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql20 )){


    $day_18 = $dado["day_18"];
  
 }


 $sql21 = mysql_query ("SELECT count(*) as day_19 from principal where day(data_atv) = '19' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql21 )){


    $day_19 = $dado["day_19"];
  
 }


 $sql22 = mysql_query ("SELECT count(*) as day_20 from principal where day(data_atv) = '20' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql22 )){


    $day_20 = $dado["day_20"];
  
 }


 $sql23 = mysql_query ("SELECT count(*) as day_21 from principal where day(data_atv) = '21' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql23 )){


    $day_21 = $dado["day_21"];
  
 }


 $sql24 = mysql_query ("SELECT count(*) as day_22 from principal where day(data_atv) = '22' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql24 )){


    $day_22 = $dado["day_22"];
  
 }

 $sql25 = mysql_query ("SELECT count(*) as day_23 from principal where day(data_atv) = '23' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql25 )){


    $day_23 = $dado["day_23"];
  
 }

 $sql26 = mysql_query ("SELECT count(*) as day_24 from principal where day(data_atv) = '24' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql26 )){


    $day_24 = $dado["day_24"];
  
 }

 $sql27 = mysql_query ("SELECT count(*) as day_25 from principal where day(data_atv) = '25' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql27 )){


    $day_25 = $dado["day_25"];
  
 }

 $sql28 = mysql_query ("SELECT count(*) as day_26 from principal where day(data_atv) = '26' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql28 )){


    $day_26 = $dado["day_26"];
  
 }


 $sql29 = mysql_query ("SELECT count(*) as day_27 from principal where day(data_atv) = '27' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql29 )){


    $day_27 = $dado["day_27"];
  
 }


 $sql30 = mysql_query ("SELECT count(*) as day_28 from principal where day(data_atv) = '28' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql30 )){


    $day_28 = $dado["day_28"];
  
 }


 $sql31 = mysql_query ("SELECT count(*) as day_29 from principal where day(data_atv) = '29' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql31 )){


    $day_29 = $dado["day_29"];
  
 }


 $sql32 = mysql_query ("SELECT count(*) as day_30 from principal where day(data_atv) = '30' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql32 )){


    $day_30 = $dado["day_30"];
  
 }


 $sql33 = mysql_query ("SELECT count(*) as day_31 from principal where day(data_atv) = '31' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql33 )){


    $day_31 = $dado["day_31"];
  
 }





//---------------------------------------- GRÁFICO EQUIPES BACKLOG  -------------------------------------------------



 $sql13 = mysql_query ("SELECT COUNT(*) AS TOTAL, (SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and tipo = 'BA') AS BA,(SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and tipo = 'REPARO') AS REPARO, (SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and tipo = 'PREVENTIVO') AS PREVENTIVO" );
 while ($dado = mysql_fetch_assoc($sql13 )){


  $REPARO = $dado["REPARO"];
  $BA = $dado["BA"];
  $PREVENTIVO = $dado["PREVENTIVO"];

 } 

 $sql14 = mysql_query ("SELECT COUNT(*) AS TOTAL, (SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and SERVICO = '1- RECUPERADO') AS RECUPERADO,(SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and SERVICO = '2- PENDENTE') AS PENDENTE" );
 while ($dado = mysql_fetch_assoc($sql14 )){


  $RECUPERADO = $dado["RECUPERADO"];
  $PENDENTE = $dado["PENDENTE"];

 } 



 //---------------------------------------------------- GRÁFICO ANUAL ATIVIDADES ------------

 $sql34  = mysql_query ("select  count(*) as JAN_TOTAL  from principal where  MONTH(data_atv) = '01' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql34 )){


  $JAN_TOTAL = $dado["JAN_TOTAL"];
  

 } 

 $sql35 = mysql_query ("select  count(*) as FEV_TOTAL  from principal where  MONTH(data_atv) = '02' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql35 )){

    $FEV_TOTAL = $dado["FEV_TOTAL"];
    

 } 


 $sql36 = mysql_query ("select  count(*) as MAR_TOTAL  from principal where  MONTH(data_atv) = '03' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql36 )){


    $MAR_TOTAL = $dado["MAR_TOTAL"];
    

 } 

 $sql37 = mysql_query ("select  count(*) as ABR_TOTAL  from principal where  MONTH(data_atv) = '04' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql37 )){


    $ABR_TOTAL = $dado["ABR_TOTAL"];
   

 } 


 $sql38 = mysql_query ("select  count(*) as MAI_TOTAL  from principal where  MONTH(data_atv) = '05' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql38 )){


    $MAI_TOTAL = $dado["MAI_TOTAL"];
   

 } 


 $sql39 = mysql_query ("select  count(*) as JUN_TOTAL  from principal where  MONTH(data_atv) = '06' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql39 )){


    $JUN_TOTAL = $dado["JUN_TOTAL"];
    

 } 

 $sql40 = mysql_query ("select  count(*) as JUL_TOTAL  from principal where  MONTH(data_atv) = '07' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql40 )){


    $JUL_TOTAL = $dado["JUL_TOTAL"];
    

 } 


 $sql41 = mysql_query ("select  count(*) as AGO_TOTAL  from principal where  MONTH(data_atv) = '08' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql41 )){


    $AGO_TOTAL = $dado["AGO_TOTAL"];
   


 } 

 $sql42 = mysql_query ("select  count(*) as SETE_TOTAL  from principal where  MONTH(data_atv) = '09' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql42 )){


    $SETE_TOTAL = $dado["SETE_TOTAL"];
  
 } 


 $sql43 = mysql_query ("select  count(*) as OUTU_TOTAL  from principal where  MONTH(data_atv) = '10' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql43 )){


    $OUTU_TOTAL = $dado["OUTU_TOTAL"];
    

 } 


  $sql44 = mysql_query ("select  count(*) as NOV_TOTAL  from principal where  MONTH(data_atv) = '11' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql44 )){


    $NOV_TOTAL = $dado["NOV_TOTAL"];
    

 } 

  $sql45 = mysql_query ("select  count(*) as DEZ_TOTAL  from principal where  MONTH(data_atv) = '12' and year(data_atv) = '$ano'" );
 while ($dado = mysql_fetch_assoc($sql45 )){


    $DEZ_TOTAL = $dado["DEZ_TOTAL"];
  

 }



 $sql46 = mysql_query ("SELECT COUNT(*) AS TOTAL, (SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and CAUSA = '1-  Fibra Invertida') AS F_INVERTIDA,(SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and CAUSA = '2- Splitter Danificado') AS SPLITER,(SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and CAUSA = '3- Carga alta/cabo baixo') AS CABO,(SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and CAUSA = '5- Chuvas Tempestadas') AS CHUVA,(SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and CAUSA = '4- Acao de terceiros') AS ACAO,(SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and CAUSA = '6- Vandalismo') AS VANDALISMO,(SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and CAUSA = '7- Ataque de Roedores/Insetos') AS INSETOS,(SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and CAUSA = '8- Falha na construcao') AS FALHA,(SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and CAUSA = '9- Sala GPON') AS GPON,(SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and CAUSA = '10 - Sem intervencao') AS SEM_INT,(SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and CAUSA = 'Fibra quebrada') AS FIBRA,(SELECT COUNT(*)  FROM principal where YEAR(data_ATV) = '$ano' and CAUSA = 'Atenuacao') AS ATENU" );
 while ($dado = mysql_fetch_assoc($sql46)){


    $F_INVERTIDA = $dado["F_INVERTIDA"];
    $SPLITER = $dado["SPLITER"];
    $CABO = $dado["CABO"];
    $CHUVA = $dado["CHUVA"];
    $ACAO = $dado["ACAO"];
    $VANDALISMO = $dado["VANDALISMO"];
    $INSETOS = $dado["INSETOS"];
    $FALHA = $dado["FALHA"];
    $GPON = $dado["GPON"];
    $SEM_INT = $dado["SEM_INT"];
    $FIBRA = $dado["FIBRA"];
    $ATENU = $dado["ATENU"];
   

  

 }



 $sql47 = mysql_query ("SELECT COUNT(*) AS TOTAL, (SELECT COUNT(*)  FROM principal where atividade = 'BD' and MONTH(data_ATV) = '$mes' and CAUSA = '1-  Fibra Invertida' and year(data_atv) = '$ano') AS F_INVERTIDA_MES_BD,(SELECT COUNT(*)  FROM principal where atividade = 'BD' and MONTH(data_ATV) = '$mes' and CAUSA = '2- Splitter Danificado' and year(data_atv) = '$ano') AS SPLITER_MES_BD,(SELECT COUNT(*)  FROM principal where atividade = 'BD' and MONTH(data_ATV) = '$mes' and CAUSA = '3- Carga alta/cabo baixo' and year(data_atv) = '$ano') AS CABO_MES_BD,(SELECT COUNT(*)  FROM principal where atividade = 'BD' and MONTH(data_ATV) = '$mes' and CAUSA = '5- Chuvas Tempestadas' and year(data_atv) = '$ano') AS CHUVA_MES_BD,(SELECT COUNT(*)  FROM principal where atividade = 'BD' and MONTH(data_ATV) = '$mes' and CAUSA = '4- Acao de terceiros' and year(data_atv) = '$ano') AS ACAO_MES_BD,(SELECT COUNT(*)  FROM principal where atividade = 'BD' and MONTH(data_ATV) = '$mes' and CAUSA = '6- Vandalismo' and year(data_atv) = '$ano') AS VANDALISMO_MES_BD,(SELECT COUNT(*)  FROM principal where atividade = 'BD' and MONTH(data_ATV) = '$mes' and CAUSA = '7- Ataque de Roedores/Insetos' and year(data_atv) = '$ano') AS INSETOS_MES_BD,(SELECT COUNT(*)  FROM principal where atividade = 'BD' and MONTH(data_ATV) = '$mes' and CAUSA = '8- Falha na construcao' and year(data_atv) = '$ano') AS FALHA_MES_BD,(SELECT COUNT(*)  FROM principal where atividade = 'BD' and MONTH(data_ATV) = '$mes' and CAUSA = '9- Sala GPON' and year(data_atv) = '$ano') AS GPON_MES_BD,(SELECT COUNT(*)  FROM principal where atividade = 'BD' and MONTH(data_ATV) = '$mes' and CAUSA = '10 - Sem intervencao' and year(data_atv) = '$ano') AS SEM_INT_MES_BD,(SELECT COUNT(*)  FROM principal where atividade = 'BD' and MONTH(data_ATV) = '$mes' and CAUSA = 'Fibra quebrada' and year(data_atv) = '$ano') AS FIBRA_BD,(SELECT COUNT(*)  FROM principal where atividade = 'BD' and MONTH(data_ATV) = '$mes' and CAUSA = 'Atenuacao' and year(data_atv) = '$ano') AS ATENU_BD" );
 while ($dado = mysql_fetch_assoc($sql47)){


    $F_INVERTIDA_MES_BD = $dado["F_INVERTIDA_MES_BD"];
    $SPLITER_MES_BD = $dado["SPLITER_MES_BD"];
    $CABO_MES_BD = $dado["CABO_MES_BD"];
    $CHUVA_MES_BD = $dado["CHUVA_MES_BD"];
    $ACAO_MES_BD = $dado["ACAO_MES_BD"];
    $VANDALISMO_MES_BD = $dado["VANDALISMO_MES_BD"];
    $INSETOS_MES_BD = $dado["INSETOS_MES_BD"];
    $FALHA_MES_BD = $dado["FALHA_MES_BD"];
    $GPON_MES_BD = $dado["GPON_MES_BD"];
    $SEM_INT_MES_BD = $dado["SEM_INT_MES_BD"];
    $FIBRA_BD = $dado["FIBRA_BD"];
    $ATENU_BD = $dado["ATENU_BD"];
  

  

 }



 $sql48 = mysql_query ("SELECT COUNT(*) AS TOTAL, (SELECT COUNT(*)  FROM principal where atividade = 'OS' and MONTH(data_ATV) = '$mes' and CAUSA = '1-  Fibra Invertida' and year(data_atv) = '$ano') AS F_INVERTIDA_MES_OS,(SELECT COUNT(*)  FROM principal where atividade = 'OS' and MONTH(data_ATV) = '$mes' and CAUSA = '2- Splitter Danificado' and year(data_atv) = '$ano') AS SPLITER_MES_OS,(SELECT COUNT(*)  FROM principal where atividade = 'OS' and MONTH(data_ATV) = '$mes' and CAUSA = '3- Carga alta/cabo baixo' and year(data_atv) = '$ano') AS CABO_MES_OS,(SELECT COUNT(*)  FROM principal where atividade = 'OS' and MONTH(data_ATV) = '$mes' and CAUSA = '5- Chuvas Tempestadas' and year(data_atv) = '$ano') AS CHUVA_MES_OS,(SELECT COUNT(*)  FROM principal where atividade = 'OS' and MONTH(data_ATV) = '$mes' and CAUSA = '4- Acao de terceiros' and year(data_atv) = '$ano') AS ACAO_MES_OS,(SELECT COUNT(*)  FROM principal where atividade = 'OS' and MONTH(data_ATV) = '$mes' and CAUSA = '6- Vandalismo' and year(data_atv) = '$ano') AS VANDALISMO_MES_OS,(SELECT COUNT(*)  FROM principal where atividade = 'OS' and MONTH(data_ATV) = '$mes' and CAUSA = '7- Ataque de Roedores/Insetos' and year(data_atv) = '$ano') AS INSETOS_MES_OS,(SELECT COUNT(*)  FROM principal where atividade = 'OS' and MONTH(data_ATV) = '$mes' and CAUSA = '8- Falha na construcao' and year(data_atv) = '$ano') AS FALHA_MES_OS,(SELECT COUNT(*)  FROM principal where atividade = 'OS' and MONTH(data_ATV) = '$mes' and CAUSA = '9- Sala GPON' and year(data_atv) = '$ano') AS GPON_MES_OS,(SELECT COUNT(*)  FROM principal where atividade = 'OS' and MONTH(data_ATV) = '$mes' and CAUSA = '10- Sem intervencao' and year(data_atv) = '$ano') AS SEM_INT_MES_OS,(SELECT COUNT(*)  FROM principal where atividade = 'OS' and MONTH(data_ATV) = '$mes' and CAUSA = 'Fibra quebrada' and year(data_atv) = '$ano') AS FIBRA_OS,(SELECT COUNT(*)  FROM principal where atividade = 'OS' and MONTH(data_ATV) = '$mes' and CAUSA = 'Atenuacao' and year(data_atv) = '$ano') AS ATENU_OS" );
 while ($dado = mysql_fetch_assoc($sql48)){


    $F_INVERTIDA_MES_OS = $dado["F_INVERTIDA_MES_OS"];
    $SPLITER_MES_OS = $dado["SPLITER_MES_OS"];
    $CABO_MES_OS = $dado["CABO_MES_OS"];
    $CHUVA_MES_OS = $dado["CHUVA_MES_OS"];
    $ACAO_MES_OS = $dado["ACAO_MES_OS"];
    $VANDALISMO_MES_OS = $dado["VANDALISMO_MES_OS"];
    $INSETOS_MES_OS = $dado["INSETOS_MES_OS"];
    $FALHA_MES_OS = $dado["FALHA_MES_OS"];
    $GPON_MES_OS = $dado["GPON_MES_OS"];
    $SEM_INT_MES_OS = $dado["SEM_INT_MES_OS"];
    $FIBRA_OS = $dado["FIBRA_OS"];
    $ATENU_OS = $dado["ATENU_OS"];
  

  

 }


 $sql49 = mysql_query ("SELECT COUNT(*) AS TOTAL, (SELECT COUNT(*)  FROM principal where  MONTH(data_ATV) = '$mes' and ATIVIDADE = 'BD' and year(data_atv) = '$ano') AS MES_BD,(SELECT COUNT(*)  FROM principal where  MONTH(data_ATV) = '$mes' and ATIVIDADE = 'OS' and year(data_atv) = '$ano') AS MES_OS;" );
 while ($dado = mysql_fetch_assoc($sql49)){


    $MES_OS = $dado["MES_OS"];
    $MES_BD  = $dado["MES_BD"];

  

 }


 $sql50 = mysql_query ("SELECT count(*) as total ,(select COUNT(*)  from PRINCIPAL WHERE EQUIPE = '1' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano') as eqp1,(select COUNT(*)  from PRINCIPAL WHERE EQUIPE = '2' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano') as eqp2,(select COUNT(*)  from PRINCIPAL WHERE EQUIPE = '3' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano') as eqp3,(select COUNT(*)  from PRINCIPAL WHERE EQUIPE = '4' and MONTH(data_atv) = '$mes' and year(data_atv) = '$ano') as eqp4" );
 while ($dado = mysql_fetch_assoc($sql50)){


    $eqp1 = $dado["eqp1"];
    $eqp2 = $dado["eqp2"];
    $eqp3 = $dado["eqp3"];
    $eqp4 = $dado["eqp4"];

  

 }



?>

