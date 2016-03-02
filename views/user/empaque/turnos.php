<hr>  
<h1 style="text-align:center;">Toma de Turnos Online</h1>   
<hr>
<h3 style="text-align:center;">Elige los turnos disponibles</h3> 
<div id="contenido">
<button id="enero" class="ui button">Enero</button>
<button id="febrero" class="ui button">Febrero</button>
<button id="marzo" class="ui button">Marzo</button>
<button id="abril" class="ui button">Abril</button>
<button id="mayo" class="ui button">Mayo</button>
<button id="junio" class="ui button">Junio</button>
<button id="julio" class="ui button">Julio</button>
<button id="agosto" class="ui button">Agosto</button>
<button id="septiembre" class="ui button">Septiembre</button>
<button id="octubre" class="ui button">Octubre</button>
<button id="noviembre" class="ui button">Noviembre</button>
<button id="diciembre" class="ui button">Diciembre</button>
</div> 
<script>
    /* $('.ui.dropdown').dropdown();    
     $("#sm1").click(function(){           
         $('.coupled.modal').modal({ blurring: true, allowMultiple: true});             
        for (i = 1; i < 8 ; i++) {  $('.second.modal').modal('attach events', '.first.modal .button'+i+'830');}
        for (i = 1; i < 8 ; i++) {  $('.second.modal').modal('attach events', '.first.modal .button'+i+'930');}
        for (i = 1; i < 8 ; i++) {  $('.second.modal').modal('attach events', '.first.modal .button'+i+'1030');}
        for (i = 1; i < 8 ; i++) {  $('.second.modal').modal('attach events', '.first.modal .button'+i+'12');}
        for (i = 1; i < 8 ; i++) {  $('.second.modal').modal('attach events', '.first.modal .button'+i+'14');}
        for (i = 1; i < 8 ; i++) {  $('.second.modal').modal('attach events', '.first.modal .button'+i+'1530');}
        for (i = 1; i < 8 ; i++) {  $('.second.modal').modal('attach events', '.first.modal .button'+i+'1730');}
        for (i = 1; i < 8 ; i++) {  $('.second.modal').modal('attach events', '.first.modal .button'+i+'19');}            
         $('.first.modal').modal('show');                       
           });    
    function datos(datoshora,datosdias){       
        switch(datosdias){
                case 1:
                datosdias = "Lunes";
                break;
                case 2:
                datosdias = "Martes";
                break;
                case 3:
                datosdias = "Miercoles";
                break;
                case 4:
                datosdias = "Jueves";
                break;
                case 5:
                datosdias = "Viernes";
                break;
                case 6:
                datosdias = "Sabado";
                break;
                case 7:
                datosdias = "Domingo";
                break;
        }
        switch(datoshora){
                case 1:
                datoshora = "Horario: 8:30 - 9:30";
                break;
                case 2:
                datoshora = "Horario: 9:30 - 10:30";
                break;
                case 3:
                datoshora = "Horario: 10:30 - 12:00";
                break;
                case 4:
                datoshora = "Horario: 12:00 - 14:00";
                break;
                case 5:
                datoshora = "Horario: 14:00 - 15:30";
                break;
                case 6:
                datoshora = "Horario: 15:30 - 17:30";
                break;
                case 7:
                datoshora = "Horario: 17:30 - 19:00";
                break;
                case 8:
                datoshora = "Horario: 19:00 - 22:30";
                break;
        }                
        var datostotales =datoshora+', Día '+datosdias;
         $("#text").text(datostotales);
    }*/
    $("#enero").click(function()
     {
       $.ajax(
       {			 
			type: "POST",
			url: "<?php echo URL;?>meses/enero",						
			success: function(data){$('#contenido').html(data);}											                      
			});	 
       });  
</script>