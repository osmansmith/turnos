<?php

   class registro_model extends model
    {
        private $iduser,$idhor;
            # funcion constructora heredada de model
              function __construct()
              {
                  parent::__construct();
              }       
       function registrar($dato)
       {    
        $imagen = $dato['imagen'];   
        $nombre = $dato['nombre'];
        $apaterno = $dato['apaterno'];
        $amaterno = $dato['amaterno'];
        $fono = $dato['fono'];
        $direccion = $dato['direccion'];
        $email = $dato['email'];
        $pass = $dato['pass'];
        $tipo = $dato['tipo'];           
        $this->db->ejecutar("INSERT INTO usuario(IMGUSUARIO,NOMBREUSUARIO,APUSUARIO,AMUSUARIO,FONOUSUARIO,DIRECCIONUSUARIO,EMAILUSUARIO,PASSUSUARIO)
        VALUES('".$imagen."','".$nombre."','".$apaterno."','".$amaterno."',".$fono.",'".$direccion."','".$email."','".$pass."')");           
         $this->usuario($tipo);                               
       }       
       function usuario($tipo)
       {             
         $result = $this->db->ejecutar("SELECT MAX(IDUSUARIO) as IDUSUARIO FROM usuario");
         while($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $this->iduser = $fila["IDUSUARIO"];             
        }
           $this->db->ejecutar("INSERT INTO ".$tipo."(IDUSUARIO) VALUES(".$this->iduser.")");
       }       
       function actualizar_img($datos)
       {
           $id = session::getValue('id');
           $img = $datos['img'];
           $this->db->ejecutar("UPDATE usuario SET IMGUSUARIO ='".$img."' WHERE IDUSUARIO = ".$id."" );
       }
       function ingresar_turno($dat)
       {
           $fecha = $dat['fecha'];            
           $this->db->ejecutar("INSERT INTO turnoempaques(FECHATURNOEM)VALUES('".$fecha."')");                    
        }
      function ingresar_horario($dat)
       {
            $fech = $dat['fech'];
            $cant = $dat['cant'];
            $horain= $dat['horain'];
            $horaout = $dat['horaout'];
          
$this->db->ejecutar("INSERT INTO horarioempaque(IDTURNOEM,CANTIDADEM,HORAINEM,HORAOUTEM)VALUES(".$fech.",".$cant.",'".$horain."','".$horaout."')"); 
       }
       function eliminarHora($datos)
       {
           $valorId = $datos['valorId'];
                      
           $this->db->ejecutar("DELETE FROM turnoempaques WHERE IDTURNOEM = ".$valorId."");
           
       }
       
       
      
   }