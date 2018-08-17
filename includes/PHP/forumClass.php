<?php 

class Forum{

    public $Forum_ID;
    public $Forum_Name;

    public static function GetForumByID($FID){
        $forum = self::ForumQuery("SELECT * FROM forum WHERE Forum_ID = '$FID'");
        return !empty($forum) ? array_shift($forum) : false;
    }

    public static function GetAllForums(){
        return self::ForumQuery("SELECT * FROM forum");
    }

    public static function ForumQuery($sql){
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