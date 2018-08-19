<?php 

class Post{
    public $Post_ID;
    public $Post_Name;
    public $Post_Description;
    public $Post_Date;
    public $Post_Main;
    public $Topic_ID;
    public $User_ID;

    public static function GePostByID($PID){
        $post = self::PostQuery("SELECT * FROM post WHERE Post_ID = '$PID'");
        return !empty($post) ? array_shift($post) : false;
    }

    public static function GetAllPosts($PID2){
        return self::PostQuery("SELECT * FROM post WHERE Topic_ID = '$PID2'");
    }

    public static function PostQuery($sql){
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
}

?>