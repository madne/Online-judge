    <?php
function add_icon($name,$id){
    echo '<a href="#myModal' . $id . '" role="button" class="glyphicon glyphicon-ban-circle" data-toggle="modal"></a>
	<div id="myModal' . $id . '" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Effacer etulisateur</h3>
	</div>
  
	<div class="modal-body">
        <p>Etes vous sure vous vouler efface l\'etulisateur <b> ' . $name . '</b></p>
	</div>
  
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
		<button class="btn btn-primary" onclick="remove1(' . $id . ')">Confirmer</button>
	</div>
  
	</div>
	</div>
	</div>

	<script>
		function remove1(id){
			//sends a request to another php script that will connect to database and delete user 
            $.get( "delete-user.php?id='.$id.'", function( data ) {
            //do nothing
            alert( "delete was performed" );
});
		}

	</script>
';
}


//audio functions
function ajouter_icone_audio($handel,$date,$start,$end){
     echo '<a href="#' . $handel . '" role="button" class="glyphicon glyphicon-ban-circle" data-toggle="modal"></a>
	<div id="' . $handel . '" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">demande propose par ' . $handel . '</h3>
	</div>
  
	<div class="modal-body">
        <p>Vouler vous <b>accepter</b> ou <b>refuser</b> cette demande.</p>
	</div>
  
	<div class="modal-footer">
    <button class="btn" onclick="accept(\''.$handel.'\',\''.$date.'\','.$start.','.$end.')" >accepter</button>
    <button class="btn" onclick="del_req(\''.$handel.'\',\''.$date.'\','.$start.','.$end.')" >refuser</button>
	
	</div>
  
	</div>
	</div>
	</div>
';  
    echo "<br>";
}

//video functions
function ajouter_icone_video($handel,$date,$start,$end){
     echo '<a href="#' . $handel . '" role="button" class="glyphicon glyphicon-ban-circle" data-toggle="modal"></a>
	<div id="' . $handel . '" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">demande propose par ' . $handel . '</h3>
	</div>
  
	<div class="modal-body">
        <p>Vouler vous <b>accepter</b> ou <b>refuser</b> cette demande.</p>
	</div>
  
	<div class="modal-footer">
    <button class="btn" onclick="accept_video(\''.$handel.'\',\''.$date.'\','.$start.','.$end.')" >accepter</button>
    <button class="btn" onclick="del_req_video(\''.$handel.'\',\''.$date.'\','.$start.','.$end.')" >refuser</button>
	
	</div>
  
	</div>
	</div>
	</div>
';  
    echo "<br>";
}

?>
