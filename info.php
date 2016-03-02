<?php

# MVC EN PHP

/*  Antes de ver los comentarios en el codigo, explicare como esta compuesto el proyecto

 5 carpetas y 3 archivos en la raiz del proyecto
 
 Carpetas
 
 *controllers
  |- index.php
  |- User.php
  
 *libs
  |- Conexion.php
  |- Controller.php
  |- Model.php
  |- Session.php
  |- View.php
  
 *models
  |- User_model.php
  
 *public
  *css  
  *img
  *js
   
 *views
  |- empaque.php
  |- index.php
  
  .htaccess
  config.php
  index.php
  
  
  Cuando se inicia el proyecto la pagina que se muestra es la pagina views->index.php , hasta entonces se espera que se manden datos al controlador para que se mande una tarea al modelo, entonces el modelo procesa la informacion para devolverla al controlador para que este muestre una respuesta a la vista

*/