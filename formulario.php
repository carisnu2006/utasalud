<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Basic Form - jQuery EasyUI Mobile Demo</title>
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.7.6/themes/metro/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.7.6/themes/mobile.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.7.6/themes/icon.css">
    <script type="text/javascript" src="jquery-easyui-1.7.6/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.7.6/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.7.6/jquery.easyui.mobile.js"></script>
</head>
<body>
    <div class="easyui-navpanel" style="position:relative;padding:20px">
        <header>
            <div class="m-toolbar">
                <div class="m-title"> <img src="imagenes/BannerEntrevistas2.png" style="margin:0;width:100%;height:50%;"></div>
              
        </header>
        
        
        <form id="ff" method="POST" action="http://localhost/utaSalud/acceso.php">
            
            
            <input type="hidden" id="op" name="op" value="insert">
           
            
            <div style="margin-bottom:10px">
                    <input name="email" id="email" class="easyui-textbox" readonly="true" label="email:" prompt="email" style="width:100%" value="<?php echo $_POST['vv'];?>">
            </div>

            <div style="margin-bottom:10px">
                <input name="nombre" id="nombre" class="easyui-textbox" label="Nombre:" prompt="nombre" style="width:100%">
            </div>

            <div style="margin-bottom:10px">
                <input name="apellido" id="apellido" class="easyui-textbox" label="Apellido:" prompt="apellido" style="width:100%">
            </div>

            
            <div style="margin-bottom:20px">
              <input id="sexo" class="easyui-combobox" name="sexo" style="width:100%;" data-options="
                      valueField: 'id',
                      textField: 'sexo',
                      label: 'Sexo:',
                      labelPosition: 'top'
                      ">
            </div>   
            
            <div style="margin-bottom:10px">
                    <input name="edad" id="edad" class="easyui-numberbox" label="Edad:" prompt="Ej. 31" style="width:100%">
            </div>
            
            <div style="margin-bottom:10px">
                <input name="peso" id="peso" class="easyui-numberbox" label="Peso:" prompt="Ej. 70 en Kilos" style="width:100%">
            </div>
            
            <div style="margin-bottom:10px">
                <input name="estatura" id="estatura" class="easyui-numberbox" label="Estatura:" prompt="Ej. 170 en cm" style="width:100%">
            </div>

            <div style="margin-bottom:20px">
                    <input id="carrera" class="easyui-combobox" name="carrera" style="width:100%;" data-options="
                            valueField: 'id',
                            textField: 'carrera',
                            label: 'Carrera:',
                            labelPosition: 'top'
                            ">
            </div>   
            <input type="hidden" id="mas" name="mas">    
            <div style="text-align:center;margin-top:30px">
                    <a href="#" name="boton" id="boton" onclick="calc_imc();" class="easyui-linkbutton" style="width:100%;height:40px"><span style="font-size:16px">Ingresar</span></a>
                   
                    <a href="javascript:void(0)" class="easyui-linkbutton" plain="true" outline="true" onclick="$('#ff').form('reset')" style="font-size:16px">Limpiar</a>
                    
            </div>
            
        </form>
    </div>
    <script>
      function submitForm() {
           $('#ff').form('submit');
           $('#ff').form({
              success: function (data) {
              console.log(data);
              if (data.indexOf("ERROR") !== -1)
              $.messager.alert('ERROR', data, 'error');
              else {
                $.messager.alert(data);
              }
          }
       });
      }
  </script>

    <script>
            $( document ).ready(function(){
                $( "#carrera" ).combobox("reload",'carreras.json');
                $( "#sexo" ).combobox("reload",'sexo.json');
             });
    </script>
   

<script>

  function calc_imc()
  {
    var altura=document.getElementById("estatura").value;
    altura=altura.toString().replace(',','.');
    var alturaMetro=altura/100;
    var peso1=document.getElementById("peso").value;
    var email=document.getElementById("email").value;
    var nombre=document.getElementById("nombre").value;
    var apellido=document.getElementById("apellido").value;
    var sexo=document.getElementById("sexo").value;
    var edad=document.getElementById("edad").value;
    
    if(email==""){
        alert("Por favor, introduce tu email.");
    }
    else if(nombre==""){
        alert("Por favor, introduce tu nombre.");
    }
    else if(apellido==""){
        alert("Por favor, introduce tu apellido.");
    }
    else if(sexo==""){
        alert("Por favor, introduce tu sexo.");
    }
    else if(edad==""){
        alert("Por favor, introduce tu edad.");
    }
    
    else if(altura==""){
        alert("Por favor, introduce tu altura.");
    }
    else if(altura<0){
      alert("La altura que ingrese debe ser positiva");
    }
    else if(altura<20){
        alert("Ha introducido la altura en metros.Por favor, multipliquela por 100 para introducirla en centimetros.");
    }
    else{
        
        if(peso1==""){
         alert("Por favor, introduce tu peso.");
        }
        else if(peso1<0){
            alert("El peso que ingrese debe ser positivo.");
        }
        else{
               
          /*CALCULO IMC*/
          var alturaCuadrado=alturaMetro*alturaMetro;
          var imc=peso1/alturaCuadrado;
          document.getElementById('mas').value=imc; 
          /*CALCULO DESCRIPCION IMC*/
          if(imc<18.5){
            submitForm();
           /* enviar_formulario();*/
              $( document ).ready(function(){
              $( "#boton" ).on( "click", function() {
                  $(location).attr('href', 'resultadoBajoPeso.php?variable1=<?php echo $_POST['vv'];?>');
              });
              });  
          }
         else if(imc<25){
          submitForm();
         /* enviar_formulario();*/
              $( document ).ready(function(){
              $( "#boton" ).on( "click", function() {
                  $(location).attr('href', 'resultadoNormal.php?variable1=<?php echo $_POST['vv'];?>');
              });
              });      
          }
          else if(imc>25){
            submitForm();
            /*enviar_formulario();*/
              $( document ).ready(function(){
              $( "#boton" ).on( "click", function() {
                  $(location).attr('href', 'resultadoSobrePeso.php?variable1=<?php echo $_POST['vv'];?>');
              });
              });   
          }
          
        }
    }
  }
  </script>
  
  <script>
    function enviar_formulario(){
       document.ff.submit();
    }
    </script> 
</body>
</html>

