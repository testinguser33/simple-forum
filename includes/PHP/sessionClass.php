<?php 

class Session{

    private $signedIn;
    public $UserID;

    function __construct(){
        session_start();
        $this->CheckLogin();
    }

    private function CheckLogin(){
        if($_SESSION["User_ID"]){
            $this->UserID = $_SESSION["User_ID"];
            $this->signedIn = true;
        }
        else{
            unset($this->UserID);
            $this->signedIn = false;
        }
    }

    public function IsSigned(){
        return $this->signedIn;
    }

    public function Login($user){
        if($user){
            $this->UserID = $_SESSION["User_ID"] = $user->User_ID;
            $this->signedIn = true;
        }
    }

    public function Logout(){
        unset($_SESSION["User_ID"]);
        unset($this->UserID);
        $this->signedIn = false;
    }

}

$session = new Session();

?>