<!DOCTYPE html>
<html>

    <?php include("includes/head.php"); ?>

  <body>
  
  <?php include("includes/PHP/init.php"); ?>

  <?php 
    if(!$session->IsSigned()){
        include("includes/headerNotLogged.php");
        header("Location: index.php");
    }
    else{
        include("includes/header.php");
    }
  ?>
    <div class="crta"> </div>
    <div class="chunk"></div>

    
    <?php
      if(isset($_GET["f"])){
      include("includes/viewforumContent.php"); 
      }
      else if(isset($_GET["c"])){
        include("includes/viewcategoryContent.php");
      }
      else if(isset($_GET["t"])){
        include("includes/viewtopicContent.php");
      }
    ?>



    <?php include("includes/footer.php"); ?>
  </body>
</html>