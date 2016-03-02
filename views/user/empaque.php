<?php if($_SESSION['nom']){}else{header("location:".URL."index/index");} 
$id = session::getValue('id');
?>
<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title> <?php echo ucwords(session::getValue('nom'));?> <?php echo ucwords(session::getValue('ap'));?></title>
    <link rel="Stylesheet" href="<?php echo URL; ?>public/dist/semantic.min.css"/>
</head>
<body>
<input type="text" id="clave" value="<?php print $id;?>" hidden>
<div class="ui container">
     <div class="ui stackable two column grid">    
             <div style=" min-height: 70px; padding-top:2%;" class="twelve wide column">

      <div class="ui items">
      <div class="item">
        <a class="ui tiny image" id="img">
          <img id="photouser" src="<?php echo URL;?><?php echo session::getValue('img');?>">
        </a>
        <div class="content">
          <a class="header"><?php echo ucwords(session::getValue('nom'));?> <?php echo ucwords(session::getValue('ap'));?></a>
          <div class="description">
            <p>Ultima conexión :<small> <?php echo strftime( "%Y/%m/%d", time() );;?></small></p>
          </div>
        </div>
      </div>
        </div>

             </div>                 
             <div style=" min-height: 70px; padding:4% 0 0 4%;" class="four wide column">
             <div class="ui dropdown">
      <i class="sidebar icon"></i>
      <span class="text">Configuracion de perfil</span>
      <div class="menu">
        <div class="ui icon search input">
          <i class="search icon"></i>
          <input type="text" placeholder="Search tags...">
        </div>
        <div class="divider"></div>
        <div class="header">
          <i class="tags icon"></i>
          Tag Label
        </div>
        <div class="scrolling menu">
       <!--   <div class="item">
            <div class="ui red empty circular label"></div>
            Important
          </div>
          <div class="item">
            <div class="ui blue empty circular label"></div>
            Announcement
          </div>
          <div class="item">
            <div class="ui black empty circular label"></div>
            Cannot Fix
          </div>
          <div class="item">
            <div class="ui purple empty circular label"></div>
            News
          </div>
          <div class="item">
            <div class="ui orange empty circular label"></div>
            Enhancement
          </div>
          <div class="item">
            <div class="ui empty circular label"></div>
            Change Declined
          </div>
          <a href="<?php echo URL;?>User/cambio1" class="item">
            <div class="ui yellow empty circular label"></div>
            Estilo 1
          </a>
          <a href="<?php echo URL;?>User/cambio2" class="item">
            <div class="ui pink empty circular label"></div>
            Estilo 2
            </a>-->
         <a class="item" href="<?php echo URL;?>User/matar"> 

            <div class="ui red empty circular label"></div>
            Cerrar sesion

          </a>
        </div>
      </div>
    </div>    
             </div>         
     </div>    
    <div class="ui ui stackable two column grid">
  <?php /*echo session::getValue('panel1');*/?>  <div id="capa1" style=" min-height: 450px;" class="four wide column">

 
 <!--<div class="ui fluid vertical menu">
  <div class="ui dropdown item">
    Turnos Online
    
    <i class="dropdown icon"></i>
    <div class="ui green circular label">51</div>
    <div class="menu">
      <a id="turno" class="item"><i class="edit icon"></i> Turnos Online</a>
      <a id ="regalo" class="item"><i class="globe icon"></i> Regalos de Turno</a>
      <a id="cambio" class="item"><i class="settings icon"></i> Cambios de Turno</a>
    </div>
  </div>
  <a  class="item">    
     <div class="ui green circular label">51</div>
  Mis Turnos
  </a>
  <a  class="item">   
     <div class="ui teal circular label">51</div>
   Mensajes del jefe
  </a>
</div>-->
<div class="ui styled fluid accordion">
  <div class="title">
    <i class="dropdown icon"></i>
    Turnos
  </div>
  <div class="content">
    <p class="transition hidden">
   <div class="ui vertical text menu">
  <!--<div class="header item">Sort By</div>-->
  <a id="turno" class="item active">
    Toma de turnos
  </a>
  <a id="regalo" class="item">
    Regalos
  </a>
  <a id="cambio" class="item">
    Cambios
  </a>
</div>
 </p>
  </div>
  <div class="title">
    <i class="dropdown icon"></i>
    Mi Perfil
  </div>
  <div class="content">
    <p class="transition hidden"><div class="ui vertical text menu">
  <div class="header item">Sort By</div>
  <a class="item active">
    Closest
  </a>
  <a class="item">
    Most Comments
  </a>
  <a class="item">
    Most Popular
  </a>
</div>
 </p>
  </div>
  <div class="title">
    <i class="dropdown icon"></i>
    Nose que ira aca
  </div>
  <div class="content">
    <p>Three common ways for a prospective owner to acquire a dog is from pet shops, private owners, or shelters.</p>
    <p>A pet shop may be the most convenient way to buy a dog. Buying a dog from a private owner allows you to assess the pedigree and upbringing of your dog before choosing to take it home. Lastly, finding your dog from a shelter, helps give a good home to a dog who may not find one so readily.</p>
  </div>
</div>
 
    
       
          
                </div>    
  <?php /*echo session::getValue('panel2');**/?> <div id="capa2" style=" min-height: 450px; padding:1% 1% 1% 1%;" class="twelve wide column">
        <div id="contenido">
            
        </div>
        </div>
</div>

</div>

<div class="ui modal">
 <i class="close icon"></i>
  <div class="header">Cambiar foto de Perfil</div>
  <div class="image content">
     <div class="ui form">
     <div class="ui two column middle aligned very relaxed grid">
        <div class="column">
             <div class="item">
              <a class="ui image">
               <img id="photomodal" src="<?php echo URL;?><?php echo session::getValue('img');?>">
              </a>
             </div>            
        </div>
        
        <div class="center aligned column">
         <p><h1>Seleccione la imagen a subir</h1></p>
         <form id="form">
         <div class="ui form" >
          <input type="file" id="photo" name="photo">        
         </div>
         <br />
         <div class="ui form actions">
          <div  class="ui button" id="btn"  >Guardar</div>
          <div class="ui cancel button">Cancelar</div>
         </div> 
         </form>
        </div>
     </div>
    </div>            
</div>
</div>
</body>
<script src="<?php echo URL; ?>public/dist/jquery-1.11.3.min.js"></script>
<script src="<?php echo URL; ?>public/dist/semantic.min.js"></script>
<script src="<?php echo URL; ?>public/js/foto.js"></script>
<script>  
 $('.ui.accordion').accordion();    
 $('.ui.dropdown').dropdown();    
 $("#turno").click(function(){$.post('<?php echo URL;?>empaque/turno','',function(data){ $('#contenido').html(data)}); });  
 $("#cambio").click(function(){$.post('<?php echo URL;?>empaque/cambio','',function(data){ $('#contenido').html(data)}); });    
 $("#regalo").click(function(){$.post('<?php echo URL;?>empaque/regalo','',function(data){ $('#contenido').html(data)}); });  
 $.post('<?php echo URL;?>empaque/turno','',function(data){ $('#contenido').html(data)});   
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
    } );
   });
   $('#img').click(function(e){$('.ui.modal').modal('show'); e.preventDefault();})                           
</script>
</html>