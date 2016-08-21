  <?php 
require 'header.php';
require 'config.php';
  ?>



<hr>
<section id="news" class="single-page scrollblock">
  <div class="container">
    <div class="align"></div>
    <h1>Blog</h1>
    <div class="row" style="margin-bottom:50px;">


  

        <?php
        $conn = mysqli_connect('localhost','root','','mydatabase1');
        $sql = "select * from blog ";
        $table = mysqli_query($conn,$sql);
        $i = 0;
        while($row = mysqli_fetch_array($table)){
            $id = $row['id'];
            $title = $row['title'];
            $src = $row['src'];
            echo '<article class="span4 post"> <img class="img-news" style="height:300px;" src="'.$src.'" alt=""/>
        <div class="inside">
          <p class="post-date"><i class="icon-calendar"></i><a href="blog-show.php?id='.$id.'">'. $title .'</a></p>
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
</section>

        
    
    

<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/site.js"></script>
<?php
require 'footer.php';
?>