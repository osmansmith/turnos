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
       # metodo inicio
      function admin()
      {
           # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
          $this->view->render('admin/admin');
      }
      function encargadolocal()
      {
           # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
          $this->view->render('user/local');
      }
      function encargadoempaque()
      {
           # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
          $this->view->render('user/encargado');
      }
      function piocha()
      {
           # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
          $this->view->render('user/piocha');
      }           
      function empaque()
      {
          if(isset($_POST['location']))
          {
          echo "<script>alert('".$_POST['location']."')</script>";
          }
         $this->view->render('user/empaque');  
      } 
      
      
      function data()
      {
          header("location:".URL."sse/sse.php");
      }
      
      
  }
?>