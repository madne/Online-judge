  <?php 
require 'header.php';
require 'config.php';
  ?>




<div id="gogo"><br><br><br><br><h1 align="center">Formulaire d'inscription</h1></div>

<?php 

if(isset($_POST['name'])){
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$handel = $_POST['handel'];
$adress = $_POST['adress'];
$number = $_POST['number'];
$sql = "INSERT INTO $database_name.users (name,password,handel,email,number,address)";
$sql .= " VALUES ('$name','$password','$handel','$email',$number,'$adress') ";

$mysqli = new mysqli($url, $admin_user_name, $pwd, $database_name);
if($mysqli->query($sql)){
   echo '<div class="container"><div class="alert alert-success"> Felecitation vous ete inscri dans le site </div></div>';
}else{
     echo '<div class="container"><div class="alert alert-danger"> Erreure d\'inscription  </div></div>';
}
}


?>

<div class="container">
<div class="row">
<div class="span6">
<img src="img/inscription.png" style="margin-left:20%;margin-top:16%;width:120px;height:120px;" />
</div>
<div class="span6">
<div id="local1">
<form   action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<style>
table td{
  width: 250px;
}

</style>
<table >
  <tr>
    <td><h5>Name:</h5></td>
    <td><input type="text" name="name"></td>
 </tr>

  <tr>
    <td><h5>Adresse:</h5></td>
    <td><input type="text" name="adress" ></td>
 </tr>
   <tr>
    <td><h5>Numero telephone</h5></td>
    <td><input type="text" name="number"></td>
 </tr>

  <tr>
    <td><h5>Choisir votre alias:</h5></td>
    <td><input type="text" name="handel" ></td>
  </tr>

  <tr>
    <td><h5>email:</h5></td>
    <td><input type="email"  name="email"></td>
 </tr>

   <tr>
    <td><h5>Mot de passe:</h5></td>
    <td><input type="password" name="password"></td>
  </tr>

</table>
<input type="submit" value="confirmer" class="btn btn-default" id="btn2" style="width:150px;height:30px;" />
</form>
</div>
</div>


</div>
</div>







<?php 
require 'footer.php';
?>