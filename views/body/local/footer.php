</div>
</div>
</body>
<script src="<?php echo URL; ?>public/dist/jquery-1.11.3.min.js"></script>
<script src="<?php echo URL; ?>public/dist/semantic.min.js"></script>
<script src="<?php echo URL;?>public/js/daterangepicker.js"></script>     
<script src="<?php echo URL;?>public/js/moment.js"></script>        

<script> 
$('.ui.accordion').accordion();  
$('.ui.dropdown').dropdown(); 
$("#registro").click(function(){ $.post("<?php echo URL;?>local/turnos",function(data){ $("#contenido").html(data)});}); 
$("#usuario").click(function(){ $.post("<?php echo URL;?>local/usuario",function(data){ $("#contenido").html(data)});});   
$("#mensaje").click(function(){ $.post("<?php echo URL;?>local/mensaje",function(data){ $("#contenido").html(data)});}); 
$.post("<?php echo URL;?>local/turnos",function(data){ $("#contenido").html(data)});   
     var url = "<?php echo URL;?>";   
     $('#btn').click(function(){   
    var fd = new FormData();    
    fd.append( 'img', $('#photo')[0].files[0]);                     
    $.ajax( {
      url: url+'registro/registro_img',
      type: 'POST',
      data: fd,
      processData: false,
      contentType: false,
      success: function(res){
          if(res == "no"){
          alert("El archivo no es compatible");
              $('#photo').val("");              
          }else{
          alert("Actualización Completa");
           $('#photomodal').attr("src", res);
           $('#photouser').attr("src",res);
           $('#photo').val("");
           return false;
       }
      }
    });
   });
   $('#img').click(function(e){$('.ui.modal.imagen').modal('show'); e.preventDefault();})         
            
</script>
</html>