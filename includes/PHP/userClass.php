<?php 

class User{

    public $User_ID;
    public $User_Username;
    private $User_Password;
    private $User_Email;
    public $User_GameName;
    public $User_Avatar;
    public $User_PostsNum;

    public static function GetUserByID($UID){
        $user = self::UserQuery("SELECT * FROM user WHERE User_ID = '$UID'");
        return !empty($user) ? array_shift($user) : false;
    }

    public static function GetAllUsers($UID){
        return self::UserQuery("SELECT * FROM user");
    }

    public static function UserQuery($sql){
        global $db;
        $ForumArray = array();
        $ForumQ = $db->Query($sql);
        while($row = mysqli_fetch_assoc($ForumQ)){
            $ForumArray[] = self::AddAutoValues($row);
        }
        return $ForumArray;
    }

    public static function AddAutoValues($foundRow){
        $ForumInstance = new self;

        foreach ($foundRow as $key => $value) {
            if($ForumInstance->HasProperty($key)){
                $ForumInstance->$key = $value;
            }
        }
        return $ForumInstance;
    }

    private function HasProperty($prop){
        $object_props = get_object_vars($this);
        return array_key_exists($prop, $object_props);
    }

    public function CountUserPosts(){
        global $db;
        $sql = "SELECT * FROM post WHERE User_ID = '$this->User_ID'";
        $result = $db->connection->query($sql);
        return $result->num_rows;
    }

}

$userObject = new User();

?>