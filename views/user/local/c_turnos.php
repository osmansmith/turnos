<script src="<?php echo URL; ?>public/dist/jquery-1.11.3.min.js"></script>
<script src="<?php echo URL; ?>public/dist/semantic.min.js"></script>
<script src="<?php echo URL;?>public/js/daterangepicker.js"></script>     
<script src="<?php echo URL;?>public/js/moment.js"></script>  
<script src="<?php echo URL;?>public/js/moment-with-locales.js"></script>   
  <h4 class="ui horizontal divider header" >Registrar Turno</h4>

 
<form class="ui form">
<div class="three fields"> 
<div class="field">
       <label for="fecha"> Fecha de turno :</label>
       <input type="text" name="fecha_turno" id="fecha_turno" placeholder="ej 2016/12/01">         
</div>
<div class="field"> <label for="">Cantidad de cupos :</label><input type="number" name="cant" id="cant" placeholder="Registrar cantidad"></div>
<div class="field">
<label for="">Horario :</label><select name="sel_hora" id="sel_hora" class="ui dropdown">
   <option value="" selected> Seleccione Horario </option>
    <?php
     $con = new Conexion(DB_HOST,DB_NAME,DB_USER,DB_PASS);
     $result = $con->ejecutar("SELECT * FROM horario");
     while($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          $inicio = $fila['IN_HORARIO']; 
         $final = $fila['OUT_HORARIO'];    
         print "
         <option value='".$fila["ID_HORARIO"]."'>inicio : ".date("H:i", strtotime($inicio))." Termino : ".date("H:i", strtotime($final))." </option>";             
        }        
    ?>
</select>
    </div>
  </div>   
<div class="inline field"><button id="btn_guardar_turno" class="blue ui button">Guardar Turno</button></div>
</form>
 
<h4 class="ui horizontal divider header" >Turnos disponibles</h4>
 <!-- Vista de elementos de los turnos-->
   
   <div class="ui middle aligned divided list">     
   <?php    
     $con = new Conexion(DB_HOST,DB_NAME,DB_USER,DB_PASS);
     $result = $con->ejecutar("SELECT * FROM horario INNER JOIN turno ON horario.ID_HORARIO = turno.ID_HORARIO");
        if($result)
        {
     while($fila = mysqli_fetch_array($result, MYSQLI_ASSOC))
     {
          $inicio = $fila['IN_HORARIO']; 
         $final = $fila['OUT_HORARIO'];    
         print '
         <script>
      var fecha = moment("'.$fila['FCH_TURNO'].'", "YYYY MM DD", "es");       
        $("#dat'.$fila['FCH_TURNO'].'").append(fecha.format("dddd DD MMMM"));        
        </script>
  <div class="item">
    <div class="right floated content">
      <div class="ui button">Editar</div>
    </div>    
    <div class="content">
   <strong><p id="dat'.$fila['FCH_TURNO'].'">Fecha : </p> Cupos : '.$fila['CUPMAX_TURNO'].' Inicio : '.date("H:i", strtotime($inicio)).' Termino : '.date("H:i", strtotime($final)).'</strong> 
    </div>
  </div>
       ';             
     }
        }
    ?> 
        </div>    


    
<script>
$('#fecha_turno').hover(function(){$('#fecha_turno').daterangepicker({ singleDatePicker: true,format: 'YYYY/MM/DD'},''); return false; },1000);
$('#btn_guardar_turno').click(function(e){
    e.preventDefault();
    var fecha_turno = $('#fecha_turno').val();
    var cant = $('#cant').val();
    var sel_hora = $('#sel_hora').val();
    var datos_turno = {
        
          'fecha_turno' : fecha_turno,
          'cant' : cant,
          'sel_hora' : sel_hora
        
        }
      
    if(fecha_turno != "" && cant != "" && sel_hora != "")
        {
            $.post('<?php echo URL;?>registro/registro_turno',datos_turno,function(datos){ alert('Datos guardados satisfactoriamente c: ');});
        }else{
            alert('Complete todos los campos');
        }
});

</script>  

        
