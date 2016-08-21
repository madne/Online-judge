  <?php 
require 'header.php';
require 'config.php';
  ?>


<?php
$id = $_GET['id'];
$sql = "select * from blog where id=$id";
$conn = mysqli_connect('localhost','root','','mydatabase1');
$table = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($table);
$title = $row['title'];
$content = $row['content'];
echo "<h1 align='center' >$title</h1><hr><br><div class='container' >$content</div>";
?>



<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/site.js"></script>

<?php
require 'footer.php';
?>