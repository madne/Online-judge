  <?php 
require 'header.php';
require 'config.php';
  ?>



<hr>
<section id="news" class="single-page scrollblock">
  <div class="container">
    <div class="align"></div>
    <h1>Gallerie</h1>
    <div class="row" style="margin-bottom:50px;">




<?php 
$conn = mysqli_connect('localhost','root','','mydatabase1');
$sql = "select * from gallery_images ";
$table = mysqli_query($conn,$sql);
$i=0;
while($row = mysqli_fetch_array($table)){
    $src = $row['src'];
    $date = $row['date'];
    echo '<article class="span4 post"> <img class="img-news" style="height:400px;" src="'.$src.'" alt="">
        <div class="inside">
          <p class="post-date"><i class="icon-calendar"></i>'. $date .'</p>
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



    
    
    <a href="blog.php" class="btn btn-large">Voir notre blog</a> </div>
</section>
<hr>
    
    
    
    
    
    
    <?php
        require 'footer.php';
    ?>
    
    
    