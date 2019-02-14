


<?php


//-------------------------------------------  GRAFICO TOTAL ANUAL  ----------------------------------------------------------------

$sql1 = mysql_query ("SELECT COUNT(*) AS JAN FROM atv_comp_principal where  MONTH(data) = '01' and year(data) = year(NOW())  and uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql1 )){


  $JAN = $dado["JAN"];

 } 

 $sql2 = mysql_query ("SELECT COUNT(*) AS FEV FROM atv_comp_principal where  MONTH(data) = '02' and year(data) = year(NOW())  and uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql2 )){


  $FEV = $dado["FEV"];

 } 


 $sql3 = mysql_query ("SELECT COUNT(*) AS MAR FROM atv_comp_principal where  MONTH(data) = '03' and year(data) = year(NOW())  and uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql3 )){


  $MAR = $dado["MAR"];

 } 

 $sql4 = mysql_query ("SELECT COUNT(*) AS ABR FROM atv_comp_principal where  MONTH(data) = '04' and year(data) = year(NOW())  and uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql4 )){


  $ABR = $dado["ABR"];

 } 


 $sql5 = mysql_query ("SELECT COUNT(*) AS MAI FROM atv_comp_principal where  MONTH(data) = '05' and year(data) = year(NOW())  and uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql5 )){


  $MAI = $dado["MAI"];

 } 


 $sql6 = mysql_query ("SELECT COUNT(*) AS JUN FROM atv_comp_principal where  MONTH(data) = '06' and year(data) = year(NOW())  and uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql6 )){


  $JUNT = $dado["JUN"];

 } 

 $sql7 = mysql_query ("SELECT COUNT(*) AS JUL FROM atv_comp_principal where  MONTH(data) = '07' and year(data) = year(NOW())  and uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql7 )){


  $JUL = $dado["JUL"];

 } 


 $sql8 = mysql_query ("SELECT COUNT(*) AS AGO FROM atv_comp_principal where  MONTH(data) = '08' and year(data) = year(NOW())  and uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql8 )){


  $AGO = $dado["AGO"];

 } 

 $sql9 = mysql_query ("SELECT COUNT(*) AS SETE FROM atv_comp_principal where  MONTH(data) = '09' and year(data) = year(NOW()) and uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql9 )){


  $SET = $dado["SETE"];

 } 


 $sql10 = mysql_query ("SELECT COUNT(*) AS OUTU FROM atv_comp_principal where  MONTH(data) = '10' and year(data) = year(NOW())  and uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql10 )){


  $OUT = $dado["OUTU"];

 } 


  $sql11 = mysql_query ("SELECT COUNT(*) AS NOV FROM atv_comp_principal where  MONTH(data) = '11' and year(data) = year(NOW())  and uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql11 )){


  $NOV = $dado["NOV"];

 } 

  $sql12 = mysql_query ("SELECT COUNT(*) AS DEZ FROM atv_comp_principal where  MONTH(data) = '12' and year(data) = year(NOW())  and uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql12 )){


  $DEZ = $dado["DEZ"];

 } 

//---------------------------------------- GRÁFICO EQUIPES  -------------------------------------------------

 $sql13 = mysql_query ("select  count(*) as LDA_NT_1 from atv_comp_principal where equipe = 'LDA NT 1' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql13 )){


  $LDA_NT_1 = $dado["LDA_NT_1"];

 } 

 $sql14 = mysql_query ("select  count(*) as MQS_NT_1 from atv_comp_principal where equipe = 'MQS NT 1' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql14 )){


  $MQS_NT_1 = $dado["MQS_NT_1"];

 } 

  $sql15 = mysql_query ("select  count(*) as WBZ_NT_1 from atv_comp_principal where equipe = 'WBZ NT 1' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql15 )){


  $WBZ_NT_1 = $dado["WBZ_NT_1"];

 } 



$sql16 = mysql_query ("select  count(*) as LDA_1 from atv_comp_principal where equipe = 'LDA 1' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql16 )){


  $LDA_1 = $dado["LDA_1"];

 }


$sql17 = mysql_query ("select  count(*) as APU_1 from atv_comp_principal where equipe = 'APU 1' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql17 )){


  $APU_1 = $dado["APU_1"];

 }

 $sql18 = mysql_query ("select  count(*) as JZO_1 from atv_comp_principal where equipe = 'JZO 1' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql18 )){


  $JZO_1 = $dado["JZO_1"];

 }

  $sql19 = mysql_query ("select  count(*) as LDA_2 from atv_comp_principal where equipe = 'LDA 2' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql19 )){


  $LDA_2 = $dado["LDA_2"];

 }
   $sql20 = mysql_query ("select  count(*) as WBZ_1 from atv_comp_principal where equipe = 'WBZ 1' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql20 )){


  $WBZ_1 = $dado["WBZ_1"];

 }

 $sql21 = mysql_query ("select  count(*) as WBA_1 from atv_comp_principal where equipe = 'WBA 1' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql21 )){


  $WBA_1 = $dado["WBA_1"];

 }


 $sql22 = mysql_query ("select  count(*) as IVP_ML from atv_comp_principal where equipe = 'IVP ML' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql22 )){


  $IVP_ML = $dado["IVP_ML"];

 }

  $sql23 = mysql_query ("select  count(*) as LDA_CL from atv_comp_principal where equipe = 'LDA CL' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql23 )){


  $LDA_CL = $dado["LDA_CL"];

 }

  $sql24 = mysql_query ("select  count(*) as WBZ_ML from atv_comp_principal where equipe = 'WBZ ML' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql24 )){


  $WBZ_ML = $dado["WBZ_ML"];

 }








$sql25 = mysql_query ("select  count(*) as LDA_D from atv_comp_principal where equipe = 'LDA D' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql25 )){


  $LDA_D = $dado["LDA_D"];

 }


 $sql26 = mysql_query ("select  count(*) as PGO_D from atv_comp_principal where equipe = 'PGO D' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql26 )){


  $PGO_D = $dado["PGO_D"];

 }


 // ----------------------------------------- GRÁFICO KM -----------------------------------------


$sql27 = mysql_query ("SELECT sum(read_cabos) AS red_cab FROM atv_comp_principal where uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql27)){


  $red_cab = $dado["red_cab"];

 }

 $sql28 = mysql_query ("SELECT sum(lancamentos_cab) AS lancamentos_cab FROM atv_comp_principal where uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql28)){


  $lancamentos_cab = $dado["lancamentos_cab"];

 }


 


   $sql30 = mysql_query ("SELECT sum(vist_cabos) AS vist_cabos FROM atv_comp_principal where uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql30)){


  $vist_cabos = $dado["vist_cabos"];

 }



 



   $sql31 = mysql_query ("SELECT sum(poda_rocada) AS poda_rocada FROM atv_comp_principal where uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql31)){


  $poda_rocada = $dado["poda_rocada"];

 }

 $sql32 = mysql_query ("SELECT sum(read_rede) AS read_rede FROM atv_comp_principal where uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql32)){


  $read_rede = $dado["read_rede"];

 }




 //------------------------------------------------------------------------------------

  $sql33 = mysql_query ("SELECT sum(postes_apru) AS postes_apru FROM atv_comp_principal where uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql33)){


  $postes_apru = $dado["postes_apru"];

}


  $sql34 = mysql_query ("SELECT sum(poste_subs) AS poste_subs FROM atv_comp_principal where uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql34)){


  $poste_subs = $dado["poste_subs"];

}

  $sql35 = mysql_query ("SELECT sum(postes_implant) AS postes_implant FROM atv_comp_principal where uf = 'PR'" );
 while ($dado = mysql_fetch_assoc($sql35)){


  $postes_implant = $dado["postes_implant"];

}


 






?>

