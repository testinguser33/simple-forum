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
    <?php $user = User::GetUserByID($session->UserID); ?>
    <?php

    if(isset($_GET["source"])){
        switch($_GET["source"]){
            case "profile":
                include("includes/UCP/userControlPanelProfile.php");
                break;
            case "signature":
                include("includes/UCP/userControlPanelSignature.php");
                break;
            case "avatar":
                include("includes/UCP/userControlPanelAvatar.php");
                break;
            case "account":
                include("includes/UCP/userControlPanelAccount.php");
                break;
        }
    }
    else{
        include("includes/UCP/userControlPanelProfile.php");
    }

    ?>

    <?php include("includes/footer.php"); ?>
  </body>
</html>