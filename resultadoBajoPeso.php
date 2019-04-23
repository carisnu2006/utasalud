<?php
$variable1=($_GET['variable1']);
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Navigation Tabs - jQuery EasyUI Mobile Demo</title>  
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.7.6/themes/metro/easyui.css">  
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.7.6/themes/mobile.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.7.6/themes/icon.css">  
    <script type="text/javascript" src="jquery-easyui-1.7.6/jquery.min.js"></script>  
    <script type="text/javascript" src="jquery-easyui-1.7.6/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.7.6/jquery.easyui.mobile.js"></script>
</head>
<body>
    <div class="easyui-navpanel">
    <header>
            <div class="m-toolbar">
                <div class="m-title">
                <input type="hidden" id="mas" name="mas">
                    Resultado: Bajo Peso
                    
                    <input type="text" read_only="read_only" id="ee" name="ee" value="<?php echo $variable1 ; ?> "> 
                    <div class="m-right">
                      
                            <a href="formularioModifica.php?variable1=<?php echo $variable1;?>" class="easyui-menubutton" data-options="iconCls:'icon-more',menu:'#mm',menuAlign:'right',hasDownArrow:false"></a> 
                           
                    </div>
                </div>
            </div>
            
        </header>
        <div id="mm" class="easyui-menu" style="width:150px;">
                <a href="#" name="boton" id="boton" class="easyui-linkbutton" style="width:100%;height:40px"><span style="font-size:16px">modificar</span></a>
        </div>        
        <div class="easyui-tabs" data-options="tabHeight:60,fit:true,tabPosition:'bottom',border:false,pill:true,narrow:true,justified:true">
            <div style="padding:10px">
                <div class="panel-header tt-inner">
                    <img src='imagenes/UTA ESALUD IMAGO.jpg'/><br>Generalidades
                </div>
                <div class="m-toolbar">
                        <img src="imagenes/salud/BAJO PESO/1 GENERALIDADES/R-NUTRICIONALES.jpg" style="margin:0;width:70%;height:40%;"> 
     
                </div>
            </div>
            <div style="padding:10px">
                <div class="panel-header tt-inner">
                    <img src='imagenes/ALIMENTACIÓN 1.jpg'/><br>Alimentaciòn
                </div>
                    <div class="easyui-tabs" data-options="fit:true,border:false,pill:true,justified:true,tabWidth:80,tabHeight:35">
            <div title="Carbohidratos" style="padding:10px">
                <img src="imagenes/salud/BAJO PESO/2 ALIMENTACION/CARBOHIDRATOS/R-NUTRICIONALES.jpg"margin:0;width:70%;height:40%;"> 
            </div>
            <div title="Grasas" style="padding:10px">
                <img src="imagenes/salud/BAJO PESO/2 ALIMENTACION/GRASAS/R-NUTRICIONALES.jpg"margin:0;width:70%;height:40%;"> 
            </div>
            <div title="Proteinas" style="padding:10px">
                <img src="imagenes/salud/BAJO PESO/2 ALIMENTACION/PROTEINAS/R-NUTRICIONALES.jpg"margin:0;width:70%;height:40%;"> 
             </div>
             </div>
            <style scoped>
            p{
            line-height:150%;
            }
            </style>
            </div>
            <div style="padding:10px">
                <div class="panel-header tt-inner">
                    <img src='imagenes/EJERCICIO 1.jpg'/><br>Ejercicio
                </div>
                <img src="imagenes/salud/BAJO PESO/3 EJERCICIO/R-NUTRICIONALES.jpg"margin:0;width:70%;height:40%;"> 
            </div>
            <div style="padding:10px">
                <div class="panel-header tt-inner">
                    <img src='imagenes/TERAPIA 1.jpg'/><br>Terapia
                </div>
                <img src="imagenes/salud/BAJO PESO/4 TERAPIA/R-NUTRICIONALES.jpg"margin:0;width:70%;height:40%;"> 
            </div>
        </div>
    </div>
    <style scoped>
       .tt-inner{
            display:inline-block;
            line-height:12px;
            padding-top:5px;
        }
        p{
            line-height:150%;
        }
    </style>
</body>    
</html>

﻿
Copyright © 2010-2019 www.jeasyui.com
