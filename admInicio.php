﻿<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Responsive Multi-level Flat Menu</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
	<link rel="stylesheet" href="style3.css" type="text/css" media="screen">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css" >
	
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
    <![endif]-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript" ></script>
    <script src="js/menu.js" type="text/javascript"></script> 

</head>
  
 <body>
 
 <div class="mainWrap">
 <a id="touch-menu" class="mobile-menu" href="#"><i class="icon-user"></i>Menu</a>

    <nav>
    <ul class="menu">

   <ul class="sub-menu">
   </ul>
   </li>
   
   
  <li><a  href="#"><i class="icon-user"></i><?php $nombre=$_GET["txtnombre"];  echo$nombre?></a>
  <ul class="sub-menu">
   <li><a href="principal.html">SALIR</a></li>
    <ul>
    </ul>
   </li>
   </ul>
  </li>

  
  </ul>
  </nav>
 
  <title>Crear Cotizacion </title>
    <meta charset="utf-8">

    <style type="text/css">
      
      form,h1{
        text-align: center;
      }
    </style>
        


 </div><!--end mainWrap-->
<form name="frmdatos" action="cotizacion.php" " method="get">
 <br>
 <br>
 <big><i>      Crear Cotizaciones  </big></i>

    
 


</form>
<form name="frmdatos2" action="cotizaciones_completas.php" " method="get">
   <input type="submit" name="btnCompletas" value="Ver cotizaciones Completas">
      <input type="text" name="txtNombre" value=<?php echo $nombre ?> <div style="visibility: hidden;"> </div> 
  
</form>
</form>
<form name="frmdatos3" action="cotizaciones_incompletas.php" " method="get">
   <input type="submit" name="btnCompletas" value="Ver cotizaciones Incompletas ">
         <input type="text" name="txtNombre" value=<?php echo $nombre ?> <div style="visibility: hidden;"> </div> 
  
</form>
    
</body>
</html>