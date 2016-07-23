<?php
require 'header.php';
require 'navigation.php';
?>








    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6">

<?php 
if (isset($_POST['handel'])){
	$handel = $_POST['handel'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$conn = mysqli_connect('localhost','root','','judge');
	$sql = "insert into judge.users (name,handel,email,password,nb_visit) values ('$name','$handel','$email','$password',0) ";
	mysqli_query($conn,$sql);
	echo '<div class="alert alert-success">you are now member of our site. Try to log in</div>';
}
?>


        <hr>
        <br>
          <form action="" method="post">
            <table >
              <tr>
                <td><p class="special-font-small">name:</p></td>
                <td> <input type="text" name="name" class="form-control"  /></td>
              </tr>
              
              <tr>
                <td><p class="special-font-small">password:</p></td>
                <td><input type="password" name="password" class="form-control" /></td>
              </tr>

               <tr>
                <td><p class="special-font-small">handel:</p></td>
                <td><input type="text" name="handel" class="form-control" /></td>
              </tr>

               <tr>
                <td><p class="special-font-small" >email:</p></td>
                <td><input type="text" name="email" class="form-control" /></td>
              </tr>
            </table>
              <hr>
                <button type="submit"    class="btn btn-default" />Sign in</button>
          </form>

      </div>
    </div>
</div>














<?php 
require 'footer.php';
?>



