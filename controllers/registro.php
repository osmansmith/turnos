<?php

  class registro extends controller
  {
      # la funcion constructora hereda de controller
      function __construct()
      {
          parent::__construct();
      }
      public $url = URL;
      public function registro_()
      {    
          # Array Asociativo
          $datos = [   
              'imagen' => $_POST['imagen'],
              'nombre' => $_POST['nombre'],
              'apaterno' => $_POST['apellidop'],
              'amaterno' => $_POST['apellidom'],
              'fono' => $_POST['fono'],
              'direccion' => $_POST['direccion'],
              'email' => $_POST['email'],
              'pass' => $_POST['pass'],
              'tipo' => $_POST['tipo']
          ];                                             
              $this->model->registrar($datos);                       
      }
      
      public function registro_img()
     {                   
          $extension = "";          
          foreach ($_FILES as $key ) {
          $extension = pathinfo($key['name'], PATHINFO_EXTENSION);          
          } 
          if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg'){
          foreach ($_FILES as $key ) {
          $name =time().$key['name'];
          $path2 = 'public/img/'.$name;  
          $path = '../turnos/public/img/'.$name;                                
          move_uploaded_file($key['tmp_name'],$path);
          }
          session::setValue('img',$path2);            
          $dat = [  'img' => $path2];                                   
          $this->model->actualizar_img($dat);         
          }else{
          echo "no";
          }
      }
      public function registro_turno()
      {
          $datos = [                      
              'fecha' => $_POST['fecha']             
          ];  
          $this->model->ingresar_turno($datos);
         
      }
      public function registro_horario()
      {
           $datos = [
              'fech' => $_POST['fech'],
              'cant' => $_POST['cant'],
              'horain' => $_POST['horain'],
              'horaout' => $_POST['horaout']
              ];
          $this->model->ingresar_horario($datos);
      }
    
  }