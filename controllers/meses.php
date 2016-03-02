<?php
class meses extends controller
  {
      function __construct()
      {
          parent::__construct();
      } 
    
    function enero()
      {
           # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
          $this->view->render('mes/Enero');
      }  
    
    
    
    
    
    
    
}







?>