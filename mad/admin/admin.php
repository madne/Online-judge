    <?php
require 'functions.php';
    ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<style>
body {
  padding-top: 50px;
}
</style>

<script>
$(document).ready(function(){
$('#myTab a').click(function (e) {
	 e.preventDefault();
	 $(this).tab('show');
});

$(function () {
$('#myTab a:last').tab('show');
});
});



</script>


<div class="container">
  <div class="jumbotron">
    <h1>/Admin</h1> 
   
</div>





<div class="container">
<ul class="nav nav-tabs" id="myTab">
	<li class="active"><a href="#home">Liste des etulisatuers</a></li>
	<li><a href="#profile">Demandes audio</a></li>
	<li><a href="#messages">Demandes video</a></li>
	<li><a href="#blog">Blog</a></li>
	<li><a href="#gallerie">Gallerie</a></li>
</ul>
 
<div class="tab-content">
	<div class="tab-pane active" id="home">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nom & Prenom</th>
					<th>Alias</th>
					<th>email</th>
					<th>Numero telephone</th>
					<th>Adresse</th>
					<th><i class="glyphicon glyphicon-pencil"></i></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$conn = mysqli_connect('localhost','root','','mydatabase1');
					$sql = "select * from users ";
					$table = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_array($table)){
						$id = $row['id'];
						$name = $row['name'];
						$handel = $row['handel'];
						$number = $row['number'];
						$email = $row['email'];
						$adress = $row['address'];
						echo "<tr><td>$name</td><td>$handel</td><td>$email</td><td>$number</td><td>$adress</td><td>";
						add_icon($name,$id);
                        echo "</td></tr>";
					}
				?>

			</tbody>
		</table>
	</div>

	<div class="tab-pane" id="profile">
        <h4>Liste des demandes audio</h4>
        <hr>
        <table class="table table-striped">
			<thead>
				<tr>
					<th>Alias</th>
					<th>date</th>
					<th>debut</th>
					<th>fin</th>
					<th><i class="glyphicon glyphicon-pencil"></i></th>
				</tr>
                
			</thead>
			<tbody>
				<?php
                    $sql = "select * from audio_requests ";
                    $table =mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($table)){
                        $data = $row['date'];
                        $debut=$row['start_hour'];
                        $fin=$row['end_hour'];
                        $handel = $row['handel']; //handel is unique so it can be used as id                
                        echo "<tr><td>$handel</td><td>$data</td><td>$debut</td><td>$fin</td><td>";
                        ajouter_icone_audio($handel,$data,$debut,$fin);
                        echo "</td></tr>";
                    }   
                ?>
			</tbody>
		</table>
    </div>
    
    
	<div class="tab-pane" id="messages">
          <h4>Liste des demandes video</h4>
        <hr>
        <table class="table table-striped">
			<thead>
				<tr>
					<th>Alias</th>
					<th>date</th>
					<th>debut</th>
					<th>fin</th>
					<th><i class="glyphicon glyphicon-pencil"></i></th>
				</tr>
                
			</thead>
			<tbody>
				<?php
                    $sql = "select * from video_requests ";
                    $table =mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($table)){
                        $data = $row['date'];
                        $debut=$row['start_hour'];
                        $fin=$row['end_hour'];
                        $handel = $row['handel'];
                        echo "<tr><td>$handel</td><td>$data</td><td>$debut</td><td>$fin</td><td>";
                        ajouter_icone_video($handel,$data,$debut,$fin);
                        echo "</td></tr>";
                    }   
                ?>
			</tbody>
		</table>
    </div>
	<div class="tab-pane" id="gallerie">
    <br>
        <button class="btn btn-default" ><a href="add-image.php">Ajouter une image</a></button>    
    &nbsp   
    &nbsp   
    &nbsp   
        <button class="btn btn-default" ><a href="delete-image.php">Supprimer une image</a></button>    
        
    </div>
	
    <div class="tab-pane" id="blog">blog...</div>
</div>
</div>

    
    
    
    
    
<script>    
//audio scripts    
function accept_audio(handel,date,start,end){
    //add audio_event
    $.get("add-event-audio.php?handel="+handel+"&date="+date+"&start="+start+"&end="+end ,function(data){
    alert('event added!');
     });
    del_req_audio(handel,date,start,end);
}
    
function del_req_audio(handel,date,start,end){
     //delete audio_request
     $.get("delete-request-audio.php?handel="+handel+"&date="+date+"&start="+start+"&end="+end,function(data){
     //nothing to do here
    });
}  
    


    
    
//video scripts
function accept_video(handel,date,start,end){
    //add audio_event
    $.get("add-event-video.php?handel="+handel+"&date="+date+"&start="+start+"&end="+end ,function(data){
    alert('event added!');
     });
    del_req_video(handel,date,start,end);
}
function del_req_video(handel,date,start,end){
     //delete audio_request
     $.get("delete-request-video.php?handel="+handel+"&date="+date+"&start="+start+"&end="+end,function(data){
     //nothing to do here
     alert("request deleted");
    });
}  
</script>