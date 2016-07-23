<?php
require 'header.php';
require 'navigation.php';
?>


    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6">
        <hr>
        <?php 
if(isset($_POST['handel'])){
$handel = $_POST['handel'];
$password = $_POST['password'];
$conn = mysqli_connect('localhost','root','','judge');
$sql = "select * from judge.users where handel='" . $handel . "' and password='" . $password . "' ";
$res = mysqli_query($conn,$sql);
$count = mysqli_num_rows($res);
if($count == 0){
  echo '<div class="alert alert-danger">Handel or password incorrect!</div>';
}else{
  session_start();
  $row = mysqli_fetch_array($res);
  $userId=$row['id'];
  $userName = $row['name'];
  $nb = $row['nb_visit'];
  $_SESSION['userId']=$userId;
  $_SESSION['userName'] =$userName;
  $_SESSION['nbVisit'] = $nb+1;
  
  //updating nb_visit
  $sql="update judge.users set nb_visit=nb_visit+1";
  mysqli_query($conn,$sql);
  header('Location: index.php');
}
}
?>
        <br>
          <form action="" method="post">
            <table >
              <tr>
                <td><p class="special-font">handel:</p></td>
                <td> <input type="text" name="handel" class="form-control"  /></td>
              </tr>
              
              <tr>
                <td><p class="special-font">password:</p></td>
                <td><input type="password" name="password" class="form-control" /></td>
              </tr>
            </table>
              <hr>
                <button type="submit"    class="btn btn-default" />Login</button>
          </form>

      </div>
    </div>
</div>





<?php 
require 'footer.php';
?>





