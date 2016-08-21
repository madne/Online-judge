  <?php 
require 'header.php';
require 'config.php';
  ?>


  <!--Page dependencies-->
    <link rel="stylesheet" href="css/timetablejs.css">
    <link rel="stylesheet" href="css/demo.css">
    <script src="js/timetable.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>



<div id="m31">
    <div style="height:60%"></div>
    <button class="btn btn-default" id="btn11" ><a href="gallery.php">Voir gallerie</a></button>
</div>




<!--calendrier-->
    <div class="hero-unit">
      <h1 align="center">Calendrier</h1>
    </div>
<div class="timetable"></div>
<script>
var timetable = new Timetable();
timetable.setScope(8,18);

<?php 
//inserting dates As table row Headlines
$corrent_day = date('Y-m-d');
echo "timetable.addLocations(['$corrent_day'";
for( $i=1;$i<8;$i++){
    $new_date = date('Y-m-d', strtotime($corrent_day. " + $i days"));
    echo ",'$new_date'";
}
echo "]);";


//connect to database to retrieve all dates then display them on sckedual using reserve function
$conn = mysqli_connect($url,$admin_user_name,$pwd,$database_name);
$i--; // i extends in the for loop thats why it needs to be decreased
$last_date = date('Y-m-d', strtotime($corrent_day. " + $i days"));
$sql = "SELECT * FROM $database_name.video_events WHERE date >= '$corrent_day' and date <= '$last_date' ";
$table = mysqli_query($conn,$sql);
$count = mysqli_num_rows($table);
if($count==0){
  echo 'alert("Pas de reservarions pour cette semaine , avoir l\'honneure d\'etre le premier ! ");';
}
while($row = mysqli_fetch_array($table)){
    $date = $row['date'];
    $start_hour = $row['start_hour'];
    $end_hour = $row['end_hour'];
    //displaying data:
    reserve($date,$start_hour,$end_hour);
}

?>

//drawing the table
var renderer = new Timetable.Renderer(timetable);
renderer.draw('.timetable');
</script>

<style>
#contain{
  margin-left:auto;
  margin-right: auto;
  width: 60%;
}
</style>


<br>
<br>

<div id="contain">
  <hr>
  <div id="msg"></div>
 <center>
  <form class="form-inline" role="form" action="process_demand_video.php" method="post">  
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" id="btn2">Reserver</button>
  </center>
  <div id="demo" class="collapse">


<br>
<div class="row">
<div class="span6">
<div class="form-group">
    <label for="start_time"><h4>Heure de debut</h4></label>
  <select class="form-control" id="start_time" name="start_time">
    <option>9</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
    <option>13</option>
    <option>14</option>
    <option>15</option>
    <option>16</option>
    <option>17</option>
  </select>
</div>
</div>
<div class="span6">
<div class="form-group">
    <label for="end_time"><h4>Heure de fin</h4></label>
  <select class="form-control" id="end_time" name="end_time">
    <option>10</option>
    <option>11</option>
    <option>12</option>
    <option>13</option>
    <option>14</option>
    <option>15</option>
    <option>16</option>
    <option>17</option>
    <option>18</option>
  </select>
</div>
</div>
</div>
      <h4>Entrer la date</h4>
 <p><input class="form-control" style="width:20%;" id="datepicker" type="text" name="date" id="date">
<label for="date" class="glyphicon glyphicon-cog"></label> </p>
      
<script>
$('#datepicker').datepicker();
</script>
      
      
      
      
  <div class="form-group">
      <label for="handel"><h4>Votre identifiant</h4></label>
    <input type="text" class="form-control" style="width:20%;" id="handel" name="handel" >
   
  </div>
  <div class="form-group">
      <label for="password"><h4>Mot de passe</h4></label>
    <input type="password" class="form-control" id="password" name="password" style="width:20%;">
  </div>
  <button type="button" class="btn btn-default" data-toggle="modal"  data-target="#myModal" id="btn1">Envoyer demande</button>
</div>
</div>

<!--Modal-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Confirmer votre demande</h3>
        <div id="output"></div>
        <script>
          $("#btn1").click(function(){
            //get data
            var handel = $('#handel').val();
            var start_time = parseInt($('#start_time').val());
            var end_time = parseInt($('#end_time').val());
            var date = $('#datepicker').val();

            //form controle
              if(handel.length < 3){
                $("#output").html("<div class='alert alert-warning'><b>Verifie Handel input!</b></div>"); 
                $("#hideMe").hide();  
                return;
              }
             if(password.length < 3){
                $("#output").html("<div class='alert alert-warning'><b>Verifie Password input!</b></div>");   
                $("#hideMe").hide();
                return;
              }if(date.length != 10){
                $("#output").html("<div class='alert alert-warning'><b>Verifie Date input!</b></div>");   
                $("#hideMe").hide();
                return;
              }if(start_time>=end_time){
                $("#output").html("<div class='alert alert-warning'><b>Verifie time input!</b></div>");   
                $("#hideMe").hide();
                return;
              }
              $("#hideMe").show();
            
            var output = "<table style='padding:10px;'><tr><td><b>Handel:&nbsp&nbsp</b></td><td>"+handel+"</td></tr><tr><td><b>Date:</b></td><td>"+date+"</td></tr><tr><td><b>Start:</b></td><td>";
            output+=start_time +"</td><tr><td><b>End:</b></td><td>" + end_time+"</td></tr></table>";
            output+="<div class='alert alert-success'>Vous recever un email consernant votre demande!</div> "
            $("#output").html(output);
          });
        </script>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" onclick="form_controle()" id="hideMe">Confirm</button>
      </div>
    </div>
  </div>
</div>
</form>

<div style="height:200px;"></div>




<?php 
require 'footer.php';
?>