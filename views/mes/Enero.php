<?php $dias = array("","Lunes/1","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"); $dato="esto es php";?>
  <head>
   <style>
    td,th{
        text-align: center!important;
    }
</style>
</head>
 
 <div class="ui top attached tabular menu">
  <a class="item active" data-tab="first">Semana 1</a>
  <a class="item" data-tab="second">Semana 2</a>
  <a class="item" data-tab="thirt">Semana 3</a>
  <a class="item" data-tab="fourth">Semana 4</a>
</div>
<div class="ui bottom attached tab segment active" data-tab="first">
  <table class="ui unstackable table">
  <thead class="full-width">
    <tr>
      <th></th>
   <?php  for($i=1;$i<8;$i++)
        { echo '<th>'.$dias[$i].'</th>';} ?>
    </tr> </thead>        
    <?php  
        print ' <tbody> <tr><td class="collapsing"><p>08:30</p></td>';
        for($i=1;$i<8;$i++)
        { echo '<td><a type="button" onclick="datos('.'1'.','.$i.');" class="ui red circular label '.$i.'830">3</a></td>';}  
        print ' </tr> <tr><td class="collapsing"><p>09:30</p></td>';
        for($i=1;$i<8;$i++)
       { echo '<td><a type="button" onclick="datos('.'2'.','.$i.');" class="ui orange circular label '.$i.'930">3</a></td>';}  
        print '</tr><tr><td class="collapsing"><p>10:30</p></td>';
        for($i=1;$i<8;$i++)
        { echo '<td><a type="button" onclick="datos('.'3'.','.$i.');" class="ui yellow circular label '.$i.'1030 ">3</a></td>';}  
      print '</tr><tr><td class="collapsing"><p>12:00</p></td>';
       for($i=1;$i<8;$i++)
       { echo '<td><a  type="button" onclick="datos('.'4'.','.$i.');" class="ui olive circular label '.$i.'12">3</a></td>';}  
      print '</tr><tr><td class="collapsing"><p>14:00</p></td>';
      for($i=1;$i<8;$i++)
        { echo '<td><a  type="button" onclick="datos('.'5'.','.$i.');" class="ui green circular label '.$i.'14">3</a></td>';}  
      print ' </tr><tr><td class="collapsing"><p>15:30</p></td>';
       for($i=1;$i<8;$i++)
        { echo '<td><a type="button" onclick="datos('.'6'.','.$i.');" class="ui teal circular label '.$i.'1530 ">3</a></td>';}  
      print '</tr> <tr><td class="collapsing"><p>17:30</p></td>';
      for($i=1;$i<8;$i++)
        { echo '<td><a  type="button" onclick="datos('.'7'.','.$i.');" class="ui blue circular label '.$i.'1730">3</a></td>';}  
      print '</tr><tr><td class="collapsing"><p>19:00</p></td>';
      for($i=1;$i<8;$i++)
        { echo '<td><a  type="button" onclick="datos('.'8'.','.$i.');" class="ui violet circular label '.$i.'19">3</a></td>';}  
      print '</tr> </tbody>';
          ?>                                                    
    </table>
</div>
<div class="ui bottom attached tab segment" data-tab="second">
  <table class="ui unstackable table">
  <thead class="full-width">
    <tr>
      <th></th>
   <?php  for($i=1;$i<8;$i++)
        { echo '<th>'.$dias[$i].'</th>';} ?>
    </tr> </thead>        
    <?php  
         print ' <tbody> <tr><td class="collapsing"><p>08:30</p></td>';
        for($i=1;$i<8;$i++)
        { echo '<td><a type="button" onclick="datos('.'1'.','.$i.');" class="ui red circular label '.$i.'830">3</a></td>';}  
        print ' </tr> <tr><td class="collapsing"><p>09:30</p></td>';
        for($i=1;$i<8;$i++)
       { echo '<td><a type="button" onclick="datos('.'2'.','.$i.');" class="ui orange circular label '.$i.'930">3</a></td>';}  
        print '</tr><tr><td class="collapsing"><p>10:30</p></td>';
        for($i=1;$i<8;$i++)
        { echo '<td><a type="button" onclick="datos('.'3'.','.$i.');" class="ui yellow circular label '.$i.'1030 ">3</a></td>';}  
      print '</tr><tr><td class="collapsing"><p>12:00</p></td>';
       for($i=1;$i<8;$i++)
       { echo '<td><a  type="button" onclick="datos('.'4'.','.$i.');" class="ui olive circular label '.$i.'12">3</a></td>';}  
      print '</tr><tr><td class="collapsing"><p>14:00</p></td>';
      for($i=1;$i<8;$i++)
        { echo '<td><a  type="button" onclick="datos('.'5'.','.$i.');" class="ui green circular label '.$i.'14">3</a></td>';}  
      print ' </tr><tr><td class="collapsing"><p>15:30</p></td>';
       for($i=1;$i<8;$i++)
        { echo '<td><a type="button" onclick="datos('.'6'.','.$i.');" class="ui teal circular label '.$i.'1530 ">3</a></td>';}  
      print '</tr> <tr><td class="collapsing"><p>17:30</p></td>';
      for($i=1;$i<8;$i++)
        { echo '<td><a  type="button" onclick="datos('.'7'.','.$i.');" class="ui blue circular label '.$i.'1730">3</a></td>';}  
      print '</tr><tr><td class="collapsing"><p>19:00</p></td>';
      for($i=1;$i<8;$i++)
        { echo '<td><a  type="button" onclick="datos('.'8'.','.$i.');" class="ui violet circular label '.$i.'19">3</a></td>';}  
      print '</tr> </tbody>';
          ?>                                                    
    </table>
</div>
<div class="ui bottom attached tab segment" data-tab="thirt">
   <table class="ui unstackable table">
  <thead class="full-width">
    <tr>
      <th></th>
   <?php  for($i=1;$i<8;$i++)
        { echo '<th>'.$dias[$i].'</th>';} ?>
    </tr> </thead>        
    <?php  
       print ' <tbody> <tr><td class="collapsing"><p>08:30</p></td>';
        for($i=1;$i<8;$i++)
        { echo '<td><a type="button" onclick="datos('.'1'.','.$i.');" class="ui red circular label '.$i.'830">3</a></td>';}  
        print ' </tr> <tr><td class="collapsing"><p>09:30</p></td>';
        for($i=1;$i<8;$i++)
       { echo '<td><a type="button" onclick="datos('.'2'.','.$i.');" class="ui orange circular label '.$i.'930">3</a></td>';}  
        print '</tr><tr><td class="collapsing"><p>10:30</p></td>';
        for($i=1;$i<8;$i++)
        { echo '<td><a type="button" onclick="datos('.'3'.','.$i.');" class="ui yellow circular label '.$i.'1030 ">3</a></td>';}  
      print '</tr><tr><td class="collapsing"><p>12:00</p></td>';
       for($i=1;$i<8;$i++)
       { echo '<td><a  type="button" onclick="datos('.'4'.','.$i.');" class="ui olive circular label '.$i.'12">3</a></td>';}  
      print '</tr><tr><td class="collapsing"><p>14:00</p></td>';
      for($i=1;$i<8;$i++)
        { echo '<td><a  type="button" onclick="datos('.'5'.','.$i.');" class="ui green circular label '.$i.'14">3</a></td>';}  
      print ' </tr><tr><td class="collapsing"><p>15:30</p></td>';
       for($i=1;$i<8;$i++)
        { echo '<td><a type="button" onclick="datos('.'6'.','.$i.');" class="ui teal circular label '.$i.'1530 ">3</a></td>';}  
      print '</tr> <tr><td class="collapsing"><p>17:30</p></td>';
      for($i=1;$i<8;$i++)
        { echo '<td><a  type="button" onclick="datos('.'7'.','.$i.');" class="ui blue circular label '.$i.'1730">3</a></td>';}  
      print '</tr><tr><td class="collapsing"><p>19:00</p></td>';
      for($i=1;$i<8;$i++)
        { echo '<td><a  type="button" onclick="datos('.'8'.','.$i.');" class="ui violet circular label '.$i.'19">3</a></td>';}  
      print '</tr> </tbody>';
          ?>                                                    
    </table>
</div>
<div class="ui bottom attached tab segment " data-tab="fourth">
  <table class="ui unstackable table">
  <thead class="full-width">
    <tr>
      <th></th>
   <?php  for($i=1;$i<8;$i++)
        { echo '<th>'.$dias[$i].'</th>';} ?>
    </tr> </thead>        
    <?php  
        print ' <tbody> <tr><td class="collapsing"><p>08:30</p></td>';
        for($i=1;$i<8;$i++)
        { echo '<td><a type="button" onclick="datos('.'1'.','.$i.');" class="ui red circular label '.$i.'830">3</a></td>';}  
        print ' </tr> <tr><td class="collapsing"><p>09:30</p></td>';
        for($i=1;$i<8;$i++)
       { echo '<td><a type="button" onclick="datos('.'2'.','.$i.');" class="ui orange circular label '.$i.'930">3</a></td>';}  
        print '</tr><tr><td class="collapsing"><p>10:30</p></td>';
        for($i=1;$i<8;$i++)
        { echo '<td><a type="button" onclick="datos('.'3'.','.$i.');" class="ui yellow circular label '.$i.'1030 ">3</a></td>';}  
      print '</tr><tr><td class="collapsing"><p>12:00</p></td>';
       for($i=1;$i<8;$i++)
       { echo '<td><a  type="button" onclick="datos('.'4'.','.$i.');" class="ui olive circular label '.$i.'12">3</a></td>';}  
      print '</tr><tr><td class="collapsing"><p>14:00</p></td>';
      for($i=1;$i<8;$i++)
        { echo '<td><a  type="button" onclick="datos('.'5'.','.$i.');" class="ui green circular label '.$i.'14">3</a></td>';}  
      print ' </tr><tr><td class="collapsing"><p>15:30</p></td>';
       for($i=1;$i<8;$i++)
        { echo '<td><a type="button" onclick="datos('.'6'.','.$i.');" class="ui teal circular label '.$i.'1530 ">3</a></td>';}  
      print '</tr> <tr><td class="collapsing"><p>17:30</p></td>';
      for($i=1;$i<8;$i++)
        { echo '<td><a  type="button" onclick="datos('.'7'.','.$i.');" class="ui blue circular label '.$i.'1730">3</a></td>';}  
      print '</tr><tr><td class="collapsing"><p>19:00</p></td>';
      for($i=1;$i<8;$i++)
        { echo '<td><a  type="button" onclick="datos('.'8'.','.$i.');" class="ui violet circular label '.$i.'19">3</a></td>';}  
      print '</tr> </tbody>';
          ?>                                                    
    </table>
</div>

<div class="ui small modal">
  <div id="text"class="header"></div>
  <div class="content">
    
  </div>
  <div class="actions">
    <div class="ui approve button">Aceptar</div>
    <div class="ui button">Neutral</div>
    <div class="ui cancel button">Cancelar</div>
  </div>
</div>

<script>
  
    $('.menu .item').tab();
 // $('.ui.dropdown').dropdown();  
     for (i = 1; i < 8 ; i++) {  $("."+i+"830").click(function(){$('.small.modal').modal('show')}) }
    for (i = 1; i < 8 ; i++) {  $("."+i+"930").click(function(){$('.small.modal').modal('show')}) }
    for (i = 1; i < 8 ; i++) {  $("."+i+"1030").click(function(){$('.small.modal').modal('show')}) }
    for (i = 1; i < 8 ; i++) {  $("."+i+"12").click(function(){$('.small.modal').modal('show')}) }
    for (i = 1; i < 8 ; i++) {  $("."+i+"14").click(function(){$('.small.modal').modal('show')}) }
    for (i = 1; i < 8 ; i++) {  $("."+i+"1530").click(function(){$('.small.modal').modal('show')}) }
    for (i = 1; i < 8 ; i++) {  $("."+i+"1730").click(function(){$('.small.modal').modal('show')}) }
    for (i = 1; i < 8 ; i++) {  $("."+i+"19").click(function(){$('.small.modal').modal('show')}) }         
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
    }
</script>