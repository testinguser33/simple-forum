<?php include("PHP/init.php"); ?>

<?php 
if($session->IsSigned()){
    header("Location: ../index.php");
}

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = User::VerifyUser($username, $password);
    if($user){
        $session->Login($user);
        header("Location: ../index.php");
    }

}

?>