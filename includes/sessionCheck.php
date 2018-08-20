<?php 
if(!$session->IsSigned()){
    header("Location: loginForm.php");
}
?>