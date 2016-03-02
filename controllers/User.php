<?php
  class User extends controller
  {
      # funcion constructora heredada de controller
      function __construct()
      {
          parent::__construct();
      }
      
      # metodo ingreso para recepcion de datos de login
      public function ingreso()
      {
          if(isset($_POST['nombre']) and isset($_POST['pass']))
          {
               # datos del formulario de login 
              $nom = $_POST['nombre'];
              $pas = $_POST['pass']; 
              $this->model->red($nom,$pas);
          }else
          {
              $this->view->render('index');
          }                             
          # metodo red que recibe 2 parametros para procesarlos en models->User_model.php                                       
      }
       public function emp()
     {

    $this->model->empaque();
     }
      # metodo para destruir sesiones
      public function matar()
      {
          # Se llama al metodo estatico para destruir toda sesion activa
          session::destroy();
          # Se redirige a la pagina de login 
          $this->view->render('index');                          
      }  
      function cambio1()
      {
          if($_SESSION['nom'])
          { session::setValue('panel1','<div style=" min-height: 450px;" class="four wide column">
        <div class="ui fluid vertical menu">
  <a id="turno" class="item active">
    <h4 class="ui header">Turnos </h4>
    <div class="ui yellow circular label">51</div>
    <p>Toma tus turnos on-line.</p>
  </a>
  <a id="cambio" class="item">
    <h4 class="ui header">Cambios</h4>
     <div class="ui green circular label">51</div>
    <p>Revisa quien quiere cambiar turnos.</p>
  </a>
  <a id ="regalo" class="item">
    <h4 class="ui header">Regalos</h4>
     <div class="ui teal circular label">51</div>
    <p>Acepta turnos, que ofrecen como obsequio.</p>
  </a>
</div>
    </div> '); 
                session::setValue('panel2', '<div style=" min-height: 450px; padding:1% 1% 1% 1%;" class="twelve wide column">
        <div id="contenido">
            
        </div>
    </div>'); }
         
            $this->view->render('user/empaque');  
      }
      function cambio2()
      {
           if($_SESSION['nom'])
          {
          session::setValue('panel1', '<div style=" min-height: 450px; padding:1% 1% 1% 1%;" class="twelve wide column">
        <div id="contenido">
            
        </div>
    </div>'); 
                session::setValue('panel2','<div style=" min-height: 450px;" class="four wide column">
        <div class="ui fluid vertical menu">
  <a id="turno" class="item active">
    <h4 class="ui header">Turnos </h4>
    <div class="ui yellow circular label">51</div>
    <p>Toma tus turnos on-line.</p>
  </a>
  <a id="cambio" class="item">
    <h4 class="ui header">Cambios</h4>
     <div class="ui green circular label">51</div>
    <p>Revisa quien quiere cambiar turnos.</p>
  </a>
  <a id ="regalo" class="item">
    <h4 class="ui header">Regalos</h4>
     <div class="ui teal circular label">51</div>
    <p>Acepta turnos, que ofrecen como obsequio.</p>
  </a>
</div>
    </div> '); 
           }
            $this->view->render('user/empaque');  
      }
      
      
      
      
  }
?>