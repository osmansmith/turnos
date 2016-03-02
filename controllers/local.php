<?php
 class local extends controller
  {
      function __construct()
      {
          parent::__construct();
      } 
     
     function turnos()
     {
        $this->view->render('forms/turnos');    
     }
     function usuario()
     {
        $this->view->render('forms/usuario');    
     }
     function mensaje()
     {
        $this->view->render('forms/mensaje');    
     }
     function verTurnos()
     {
         $this->view->render('forms/ver');
     }
                        
 }