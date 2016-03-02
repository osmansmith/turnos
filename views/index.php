<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">      
</head>
<body>
<div class="container">
 <div class="row">
  <div id="cabezera" class="col-md-4 col-md-offset-4 ">
    <h3 class="titulo">Iniciar Sesión</h3>
  </div>
    <div id="cuerpo" class="col-md-4 col-md-offset-4 ">     
          <form class="form-horizontal" action="<?php echo URL; ?>User/ingreso" method="post">
          <div class="form-group">
            <label for="inputEmail3"  class="col-sm-3 control-label parrafo letra1">E-mail</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="nombre" name="nombre" placeholder="E-mail" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label parrafo letra1">Pass</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Pass" required>
            </div>
          </div> 
          <div class="form-group">
            <div class="col-sm-12 col-sm-offset-4">
              <button type="submit" class="btn btn-primary btn-xs col-sm-4">Ingresar</button>
            </div>
          </div>
          </form>
    <hr>
    <small id="pies">Olvido su contraseña? <button class="btn btn-default btn-xs">Recuperar</button> </small>
    </div>         
     </div>  
      </div>                  
<script src="<?php echo URL; ?>public/js/jquery.js"></script>  
<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script> 
<script>
/*   
$(function(){
    $('#btn_reg').click(function()
    {        
    $.ajax(
    {    
    url: '<?php #echo URL;?>index/registro',
    success : function(data)
            {
            $('#con').html(data);
            }
    }); 
   });                      
});
 */
</script> 
</body>
</html>