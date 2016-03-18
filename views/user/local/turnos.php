  <head>
   <link rel="stylesheet" href="<?php echo URL;?>public/css/daterangepicker.css">
   <script src="<?php echo URL;?>public/js/daterangepicker.js"></script>     
<script src="<?php echo URL;?>public/js/moment.js"></script>     
<script src="<?php echo URL;?>public/js/moment-with-locales.js"></script>        
</head>
       
     


<h4 class="ui horizontal divider header" >Registrar Horario</h4>

 
<form class="ui form">
<div class="two fields"> 
<div class="field"><label for="">fecha</label><select name="selfecha" id="selfecha" class="ui dropdown">
   <option value="" selected> Seleccione una Fecha </option>
    <?php
     $con = new Conexion(DB_HOST,DB_NAME,DB_USER,DB_PASS);
     $result = $con->ejecutar("SELECT * FROM turnoempaques");
     while($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)){
         print "<script>
      var fecha = moment('".$fila['FECHATURNOEM']."', 'YYYY MM DD', 'es');       
        $('#dat".$fila['FECHATURNOEM']."').text(fecha.format('dddd DD MMMM YYYY'));        
        </script>
         <option id='dat".$fila['FECHATURNOEM']."' value='".$fila["IDTURNOEM"]."'></option>";             
        }        
    ?>
</select></div>
<div class="field">
   <button style="margin-top:6%;" id="btn_crear_fecha" class="blue ui button">Crear Fecha</button>  
    </div>
   </div>
<div class="three fields">
 <div class="field"> <label for="">cantidad</label><input type="text" name="cant" id="cant" placeholder="Registrar cantidad"></div>
<div class="field"><label for="">hora inicio:</label><input type="time" name="horain" id="horain" placeholder="Registrar hora inicio"></div>
<div class=" field"><label for="">hora termino:</label><input type="time" name="horaout" id="horaout" placeholder="Registrar hora termino"></div>
    </div>
<div class="inline field"><button id="btn_horario" class="blue ui button">Guardar horario</button></div>
</form>
 
<h4 class="ui horizontal divider header" >Ver Horario</h4>
 <!-- Vista de elementos de los turnos-->
 <select name="selturnos" id="selturnos" class="ui dropdown">
 <option value=""> Seleccione una fecha</option>
 <?php
     
      $result = $con->ejecutar("SELECT * FROM turnoempaques");
     while($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)){
         print '<script>
      var fechaEs = moment("'.$fila['FECHATURNOEM'].'", "YYYY MM DD", "es");
       
        $("#dt'.$fila['FECHATURNOEM'].'").text(fechaEs.format("dddd DD MMMM YYYY")); 
       
        </script>   
         <div class="ui relaxed divided list">
  <div class="item">
    <i class="calendar middle aligned icon"></i>
    <div  class="content">
            <option id="dt'.$fila['FECHATURNOEM'].'" value="'.$fila['IDTURNOEM'].'">        
      </option>     
    </div>
  </div>
 </div>';             
        }           
     ?>
  </select> 
  
 <button id="eliminar" class="red ui button">Eliminar Fecha</button> 
 
<div id="turnos"></div>    
<div class="ui modal crear">
  <i class="close icon"></i>
  <div class="header">
   Guardar Fecha
  </div>
  <div class="image content">
   
    <div class="description">
           
          <form class="ui form"> 
<div class="two fields">
<div class="field"><div class="ui left icon input">
<input type="text" name="birthday" id="birthday" placeholder="Registrar fecha">
<i class="calendar icon"></i></div></div>
<div class="field"><button id="btn_fecha" class="blue ui button">Guardar Fecha</button></div>    
</div>
</form>  
    </div>
  </div>
  <div class="actions">
    <div class="ui cancel button">Cancel</div>  
  </div>
</div>
<div class="ui modal eliminar">
  <i class="close icon"></i>
  <div class="header">
   Escoja la fechas a eliminar
  </div>
  <div class="image content">
   
    <div class="description">
           
          <form class="ui form"> 
     <?php
              $cont = 0;
      $result = $con->ejecutar("SELECT * FROM turnoempaques");
     while($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)){
         print '<script>
      var fechaEs = moment("'.$fila['FECHATURNOEM'].'", "YYYY MM DD", "es");
       
        $("#dtu'.$fila['FECHATURNOEM'].'").text(fechaEs.format("dddd DD MMMM YYYY")); 
       
        </script> 
        <div class="inline field" >
        <div class="ui checkbox">
         <input id="ch'.$cont.'" value="'.$fila['IDTURNOEM'].'" type="checkbox" name="fechas" tabindex="0" class="hidden">
      <label id="dtu'.$fila['FECHATURNOEM'].'"></label>
      </div>
      </div>
         '
             ;
         $cont++;
     }
    ?>
     
    
<div class="field"><button id="btn_eliminar" class="blue ui button" onclick="btn_boton()">Eliminar fecha</button></div>    

</form>  
    </div>
  </div>
  <div class="actions">
    <div class="ui cancel button">Cancel</div>  
  </div>
</div>
<script>    
$('.ui.dropdown').dropdown({on: 'click'});
$('.ui.checkbox').checkbox();
$('#birthday').hover(function(){$('#birthday').daterangepicker({ singleDatePicker: true,format: 'YYYY/MM/DD'},''); return false; },1000);
$('#btn_fecha').click(function(e)
{
     e.preventDefault();
     var fecha = $('#birthday').val();    
     var datos = {'fecha' : fecha};
     if(fecha != "")
         {
              $.post('<?php echo URL;?>registro/registro_turno',datos,'');
             $('#birthday').val("");
         }else{
             alert("porfavor escriba una fecha :( ");
         }
    
 });
$('#btn_crear_fecha').click(function(e){ e.preventDefault(); $('.ui.modal.crear').modal('show'); });
$('#btn_horario').click(function()
{    
     var fech = $('#selfecha').val();  
     var cant = $('#cant').val();
     var horain = $('#horain').val();
     var horaout = $('#horaout').val();
     var registro = {
         'fech' : fech,
         'cant' : cant,
         'horain' : horain,
         'horaout' : horaout
     };
    
     $.post('<?php echo URL;?>registro/registro_horario',registro,function(dat){alert('datos enviados');});
 });  
$('#selturnos').change(function()
{
    var valor = $( this ).val();
    var valores = {
        'aidi' : valor
    };
    if(valor == "")
        {    
        }else{
     $.post("<?php echo URL;?>local/verTurnos",valores,function(data){ $("#turnos").html(data)});      
        }
});
$('#eliminar').click(function(e)
{
    e.preventDefault();    
    $('.ui.modal.eliminar').modal('show');
           
   /* v = $('#selturnos').val();
    valor = { 'valorId' : v }
    if(v !== "")                   
        {            
         $.post('<?php echo URL;?>registro/eliminarHorario',valor,function(dat){alert('fecha eliminada');});   
        }*/
});
function btn_boton()
{
   var contador = <?php echo $cont;?>;  
    var chek = new Array();  
  // var chek = [];
    var i = 0;
    var el;
    var it;
      for( i ; i<contador;i++)
        {    
            if($('input:checkbox[id=ch'+i+']:checked').val() != undefined)
                { 
                    el = $('input:checkbox[id=ch'+i+']:checked').val(); 
            //chek[i] = $('input:checkbox[id=ch'+i+']:checked').val();             
            
                chek['che'+i] = el;
                }
        }
       
          
         var fechasAr = JSON.parse(JSON.stringify(chek));         
     console.log(chek);     
    $.post('<?php echo URL;?>registro/eliminarHorario',chek,function(dat){alert(dat);});   
           
    }
    /* var fechaEs = moment('2016-02-23', "YYYY MM DD", "es");
 console.log("Fecha con localización :"+ fechaEs.format("dddd DD MMMM YYYY"));*/        
</script>