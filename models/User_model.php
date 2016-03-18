<?php
    # Metodo User_model() que hereda de la clase model
    class User_model extends model
    {
      private $nombre,$clave,$sw,$idi,$rango = array('','empaque','piocha','encargadolocal','encargadoempaque');                   
      # funcion constructora heredada de model
      function __construct()
      {
          parent::__construct();
      }       
        # metodo red() con 2 parametros para consultar en la base de datos
        function red($nom,$pas)
        {   
            $this->nombre = $nom;
            $this->clave = $pas;            
            $this->consulta();                                                                                                      
        }        
        function consulta()
        {            
           $val=0;              
           $sql = "SELECT * FROM usuario WHERE EMAILUSUARIO='".$this->nombre."' and PASSUSUARIO ='".$this->clave."'";           
           $con = $this->db->ejecutar($sql);                                            
              if ($row = mysqli_fetch_assoc($con)) 
              {  
                session::setValue('id',$row["IDUSUARIO"]);  
                session::setValue('nom',$row["NOMBREUSUARIO"]); 
                session::setValue('ap',$row["APUSUARIO"]); 
                session::setValue('am',$row["AMUSUARIO"]);  
                session::setValue('fono',$row["FONOUSUARIO"]); 
                session::setValue('dir',$row["DIRECCIONUSUARIO"]); 
                session::setValue('emi',$row["EMAILUSUARIO"]);
                session::setValue('img',$row["IMGUSUARIO"]);                                                                 
              $this->idi = session::getValue('id'); $val = 1;                                            
              }else{ $val = 0; }             
              if($val == 1){ $this->select(); }else{ header("location:".URL."index/index"); }
        }                                  
        function select()
        {                 
                 $lis = "ok";$val = 1;                                  
                 while( $lis == "ok")
                  {
                        $sql = "SELECT * FROM ".$this->rango[$val]." WHERE IDUSUARIO=".$this->idi."";  
                        $con = $this->db->ejecutar($sql);
                        if ($row = mysqli_fetch_assoc($con)){  $lis = "adios"; }else{ $val += 1;}
                 }
            header("location:".URL."index/".$this->rango[$val]."");
            
        }
    }    
?>