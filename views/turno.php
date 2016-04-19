<script src="<?php echo URL; ?>public/dist/jquery-1.11.3.min.js"></script>
<script src="<?php echo URL; ?>public/dist/semantic.min.js"></script>
<script src="<?php echo URL;?>public/js/daterangepicker.js"></script>     
<script src="<?php echo URL;?>public/js/moment.js"></script>  
<script src="<?php echo URL;?>public/js/moment-with-locales.js"></script>    

<!-- esto es el horario de la toma de turnos-->
<style>
    tr,td{
        text-align: center;
    }
</style>

<table class="ui unstackable table" >
 <thead>
     <tr>
        <th></th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sabado</th>
        <th>Domingo</th>              
     </tr>
 </thead>    
    <tbody>
        <tr>
            <td>8:30</td>
            <td><input type="button" id="btnn" value="3"/></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
        </tr>
        <tr>
            <td>8:30</td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
        </tr>
        <tr>
            <td>8:30</td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
        </tr>
        <tr>
            <td>8:30</td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
        </tr>
        <tr>
            <td>8:30</td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
            <td><button>3</button></td>
        </tr>
    </tbody>                    
</table>
 <script>
$("#btnn").click(function(){
    var btn = $("#btnn").val();   
    var num = 1;   
   
   if(btn>=1){
     btn = btn-1;       
   } 
    if(btn == 1){
         $("#btnn").addClass("orange");  
    }
    
    $("#btnn").attr("value",btn);
     if(btn == 0){
       
        //$("#btnn").removeClass("green");
        $("#btnn").addClass("red");     
        alert("se acabaron los turnos");
   } 
});

if($("#btnn").attr("value") == 0)
    {
         $("#btnn").removeClass();
        $("#btnn").addClass("ui button red");
    }else{
        $("#btnn").removeClass();
        $("#btnn").addClass("ui button green");
    }
     
     
     
     
     
     
</script>

