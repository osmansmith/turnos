<?php
 class local extends controller
  {
      function __construct()
      {
          parent::__construct();
      } 
     
     function turnos()
     {
        $this->view->render('user/local/turnos');    
     }
     function usuario()
     {
        $this->view->render('user/local/usuario');    
     }
     function mensaje()
     {
        $this->view->render('user/local/mensaje');    
     }
     function verTurnos()
     {
         $this->view->render('user/local/ver');
     }
                        
 }