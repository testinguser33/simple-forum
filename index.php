<!DOCTYPE html>
<html>

    <?php include("includes/head.php"); ?>

  <body>

   <?php include("includes/PHP/init.php"); ?>

   <?php 
    if(!$session->IsSigned()){
        include("includes/headerNotLogged.php");
    }
    else{
      include("includes/header.php");
    }
    ?>

    <div class="crta"> </div>
    <div class="chunk"></div>
<b>test</b>
    <?php include("includes/main.php"); ?>



    <?php include("includes/footer.php"); ?>
  </body>
</html>