<?php
if(isset($_POST['id'])){
    $id = $_POST['id'];
    
    //get the src
    $conn = mysqli_connect('localhost','root','','mydatabase1');
    $sql = "select * from gallery_images where id=$id";
    $res = mysqli_query($conn,$sql);
    $ress = mysqli_fetch_array($res);
    $src = $ress['src'];
    
    //delete file from database and file system
    $sql = "delete from gallery_images where id=$id";
    $query = mysqli_query($conn,$sql);
    if($query){
        unlink("../$src");
        echo "<script>alert('image supprime!');</script>";
        
    }else{
        echo "<script>alert('image non supprime!');</script>";
    }
}
?>

<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/bootstrap.css">


<hr>
<section id="news" class="single-page scrollblock">
  <div class="container">
    <div class="align"></div>
    <h1>Tous les images:</h1>
      <hr>
      <form action="" method="post" >
          <p>selectionner avec id:<input type="text" name="id" ></p>
          <p><input type="submit" class="btn btn-default" style="padding:5px;"/></p>
      </form>
      <hr>
    <div class="row" style="margin-bottom:50px;">


<?php 
$conn = mysqli_connect('localhost','root','','mydatabase1');
$sql = "select * from gallery_images ";
$table = mysqli_query($conn,$sql);
$i=0;
while($row = mysqli_fetch_array($table)){
    $src = $row['src'];
    $id = $row['id'];
    echo '<article class="span4 post"> <img class="img-news" style="height:250px;" src="../'.$src.'" alt="">
        <div class="inside">
          <p class="post-date"><i class="icon-calendar"></i><h3>id='. $id .'</h3></p>
        </div>
      </article>';
    
    $i++;  
    if($i==3){
        $i=0;
        echo '</div> <div class="row" style="margin-bottom:50px;">';
    }
}
        if($i!=0)
            echo '</div>';
?>
<button class="btn btn defualt" ><a href="admin.php">retourner</a></button>
</div>
