
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">



<div class="container">
<h3> ajouter image</h3>
<hr>
    <form action="" method="post" enctype="multipart/form-data">
    <p>Selectionner le fichier: <input type='file' name="file" id="file"/></p>
    <p><input type='submit' value="confirmer"/></p>
    </form>
</div>




<?php
if(isset($_POST['file'])){
$target_dir = "../gallery";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
}else {
    echo "Sorry, there was an error uploading your file.";
}
}
?>