<!DOCTYPE html>
<html>


    <?php include("includes/head.php"); ?>

  <body>

  <?php include("includes/header.php"); ?>

    <?php 
        if($session->IsSigned()){
            header("Location: index.php");
        }

        if(isset($_POST["login"])){
            $username = $_POST["username"];
            $password = $_POST["password"];

            $user = User::VerifyUser($username, $password);
            if($user){
                $session->Login($user);
                header("Location: index.php");
            }
            else{
                echo $user;
            }

        }

    ?>

    <div class="crta"> </div>
    <div style="margin-top:10px;" class="chunk"></div>

    <div class="container">
    <form action="" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" />
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" />
        </div>

        <center>
            <div class="form-group">
                <input style="width:500px;" type="submit" class="btn btn-primary" name="login" value="Login" />
            </div>
        </center>
    </form>
    </div>



    <?php include("includes/footer.php"); ?>
  </body>
</html>