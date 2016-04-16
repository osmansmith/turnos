<script src="<?php echo URL; ?>public/dist/jquery-1.11.3.min.js"></script>
<script src="<?php echo URL; ?>public/dist/semantic.min.js"></script>
<script src="<?php echo URL;?>public/js/daterangepicker.js"></script>     
<script src="<?php echo URL;?>public/js/moment.js"></script>  
<script src="<?php echo URL;?>public/js/moment-with-locales.js"></script>    

<div class="ui grid">
  <div  class="two wide column"></div>
<?php
 $con = new Conexion(DB_HOST,DB_NAME,DB_USER,DB_PASS);
     $result = $con->ejecutar("SELECT * FROM turno");
     while($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
         print "<script>
      var fecha = moment('".$fila['FCH_TURNO']."', 'YYYY MM DD', 'es');       
        $('#dat".$fila['FCH_TURNO']."').text(fecha.format('dddd DD'));        
        </script>
         <div style='border:1px solid black;' id='dat".$fila['FCH_TURNO']."' class='two wide column' ></div>";             
        }     
?>
</div>

<?php 
     $result = $con->ejecutar("SELECT IN_HORARIO FROM horario WHERE ID_HORARIO = ALL(SELECT ID_HORARIO FROM turno)");
     while($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
         print "
          <div class='ui grid'>  
         <div class='two wide column' >".$fila['IN_HORARIO']."</div> ";             
        }     
?>
<?php
     $result = $con->ejecutar("SELECT CUPMAX_TURNO FROM turno WHERE ID_HORARIO");
      while($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
         print "
         <div class='two wide column' ><button id='".$fila['CUPMAX_TURNO']."' >".$fila['CUPMAX_TURNO']."</button></div> ";             
        }  
     
     ?>
</div>
 

