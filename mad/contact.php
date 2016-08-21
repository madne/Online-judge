  <?php 
require 'header.php';
require 'config.php';
  ?>

<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    //insert to database
    $conn = mysqli_connect('localhost','root','','mydatabase1');
    $sql = "insert into contact (name,email,country,address,phone,subject,message) values ";
    $sql.= " ('$name','$email','$country','$address',$phone,'$subject','$message') ";
    $query = mysqli_query($conn,$sql);
    if($query){
        echo '<div style="height:40px;"></div><div class="alert alert-success">Votre message a ete envoye avec succes</div>';
    }else{
        echo '<div style="height:40px;"></div><div class="alert alert-danger">Votre message n\'est pas envoye veiller ressaye </div>';
    }
}
?>


<div class="scrollblock">
  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="span12">
          <article>
            <p>Coordonnees du studio</p>
            <center><h1>
            <table id="tb1">
                <tr>
                  <td>Telephone</td>
                  <td>73160609</td>
                </tr>
                <tr>
                  <td>Adresse</td>
                  <td>Rue de nasr tunis</td>
                </tr>
                <tr>
                  <td>Adresse email</td>
                  <td>contact-studio@gmail.com</td>
                </tr>
            </table>
          </h1></center>
          </article>
        </div>
      </div>
    </div>
  </section>
</div>


<style>
#tb1 td{
  width: 200px;
  height: 50px;
}
</style>






<section id="contact" class="single-page scrollblock">
  <div class="container">
    <div class="align"><i class="icon-mail-2"></i></div>
    <h1>Contacter nous maintenant!</h1>
    <div class="row">
      <div class="span12">
        <div class="cform" id="theme-form">
          <form action="" method="post" class="cform-form">
            <div class="row">
              <div class="span6"> <span class="your-name">
                <input type="text" name="name" placeholder="Votre nom" class="cform-text" size="40" title="your name">
                </span> </div>
              <div class="span6"> <span class="your-email">
                <input type="text" name="email" placeholder="Votre Email" class="cform-text" size="40" title="your email">
                </span> </div>
            </div>
           
            <div class="row">
              <div class="span6"> <span class="company">
                <input type="text" name="country" placeholder="Votre origine" class="cform-text" size="40" title="country">
                </span> </div>
              <div class="span6"> <span class="website">
                <input type="text" name="address" placeholder="Votre Adresse" class="cform-text" size="40" title="Adress">
                </span> </div>
            </div>
            <div class="row">
              <div class="span6"> <span class="company">
                <input type="text" name="phone" placeholder="Votre telephone" class="cform-text" size="40" title="Phone">
                </span> </div>
              <div class="span6"> <span class="website">
                <input type="text" name="subject" placeholder="Sujet" class="cform-text" size="40" title="Subject">
                </span> </div>
            </div>
            <div class="row">
              <div class="span12"> <span class="message">
                <textarea name="message" class="cform-textarea" cols="40" rows="10" title="drop us a line."></textarea>
                </span> </div>
            </div>
            <div>
              <input type="submit" value="Envoyer message"  class="cform-submit pull-left">
            </div>
            <div class="cform-response-output"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>



<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/site.js"></script>


    
<?php
    require 'footer.php';
?>
    
