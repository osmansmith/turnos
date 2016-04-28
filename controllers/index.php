<?php  
  class index extends controller
  {
      # la funcion constructora hereda de controller
      function __construct()
      {
          parent::__construct();
      }            
      # metodo index
      function index()
      {
          # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
          $this->view->render('index');
      }       
      function encargadolocal()
      {           
          $this->view->render('body/local/head');
          $this->view->render('user/local');
          $this->view->render('body/local/footer');
      }
      function encargadoempaque()
      {
           # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
          $this->view->render('user/encargado');
      }
      function piocha()
      {         
          $this->view->render('body/empaque/head');
          $this->view->render('user/piocha');
          $this->view->render('body/empaque/footer');
      }           
      function empaque()
     {   
         $this->view->render('body/empaque/head');
         $this->view->render('user/empaque'); 
         $this->view->render('body/empaque/footer');
      } 
      
      
      function data()
      {
          header("location:".URL."sse/sse.php");
      }
      
      
  }
?>