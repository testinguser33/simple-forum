<?php

class Category{

    public $Category_ID;
    public $Category_Name;
    public $Category_Description;
    public $Category_TopicsNum;
    public $Category_PostsNum;
    public $Category_LastPerson;
    public $Category_LastPost;
    public $Category_LastTime;

    public static function GetAllCategories($FID){
        return self::CategoryQuery("SELECT * FROM category WHERE Forum_ID = '$FID'");
    }

    public static function CategoryQuery($sql){
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