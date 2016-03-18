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
      
      
  }
?>