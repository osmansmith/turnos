    <div class="row">
     <div style="margin-top:5%; border-radius: 10px; box-shadow: 0 0 15px black;
background: rgba(245,250,253, 0.5); padding:0% 1% 1% 1%;" class="col-md-4 col-md-offset-4 ">
         <h3 style="text-align:center;">Registre sus datos</h3>
     <hr>
  <form class="form-horizontal" action="<?php echo URL; ?>registro/datos_registro" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nombre</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="nom" name="nom" placeholder="Nombre" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Apellido_P</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="ap" name="ap" placeholder="Apellido.P" required>
    </div>
  </div> 
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Apellido_M</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="am" name="am" placeholder="Apellido.M" required>
    </div>
  </div> 
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">fono</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="fono" name="fono" placeholder="Fono" required>
    </div>
  </div> 
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Dirección</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="dir" name="dir" placeholder="Direccion" required>
    </div>
  </div> 
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Usuario</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="nick" name="nick" placeholder="Usuario" required>
    </div>
  </div> 
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">pass</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="pass" name="pass" placeholder="Pass" required>
    </div>
  </div> 
  <div class="form-group">
    <div class="col-sm-12 col-sm-offset-4">
      <button type="submit" class="btn btn-default btn-xs col-sm-4">Guardar</button>
    </div>
  </div>
</form>
    <hr>
    <small style="text-align:center;"><button id="btn" >Volver</button> </small>
       </div>
     </div>   
<script> 

 $(function(){
          $('#btn').click(function(){              
                $.ajax({                                        
                url: '<?php echo URL;?>index/actual',
                    success : function(dat){
                            $('#con2').html(dat);
                        }
                 }); 
           });
  });
</script>


