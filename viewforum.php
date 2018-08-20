<!DOCTYPE html>
<html>

    <?php include("includes/head.php"); ?>

  <body>

  <?php include("includes/header.php"); ?>
  <?php include("includes/sessionCheck.php"); ?>
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