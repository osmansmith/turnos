<?php
 class empaque extends controller
  {
      function __construct()
      {
          parent::__construct();
      } 
     
     function turno()
     {
        $this->view->render('user/empaque/turnos');    
     }
      function toma_turnos()
     {
        $this->view->render('turno');    
     }
     function cambio()
     {
        $this->view->render('user/empaque/cambio');    
     }
     function regalo()
     {
        $this->view->render('user/empaque/regalo');    
     }
    
     
     
     
     
 }