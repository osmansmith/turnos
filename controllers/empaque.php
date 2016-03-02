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
     function cambio()
     {
        $this->view->render('user/empaque/cambio');    
     }
     function regalo()
     {
        $this->view->render('user/empaque/regalo');    
     }
    
     
     
     
     
 }