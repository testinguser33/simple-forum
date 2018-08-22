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

    public function Create($postName, $postDescription, $postMain, $postUserID, $postTopicID, $postCategoryID){
        global $db;
        $postDate = date("Y-m-d H:i:s");

        $db->Query("INSERT INTO post (Post_Name, Post_Description, Post_Date, Post_Main, Topic_ID, User_ID) VALUES ('$postName', '$postDescription', '$postDate', '$postMain', '$postTopicID', '$postUserID')");
        $postAuthor = User::GetUserByID($postUserID);
        $db->Query("UPDATE topic SET Topic_LastPerson = '$postAuthor->User_Username', Topic_LastTime = '$postDate' WHERE Topic_ID = '$postTopicID'");
        // echo $categoryID = $db->Query("SELECT Category_ID FROM topic WHERE Topic_ID = '$postTopicID'");
        $db->Query("UPDATE category SET Category_LastPerson = '$postAuthor->User_Username', Category_LastPost = '$postName', Category_LastTime = '$postDate' WHERE Category_ID = '$postCategoryID'");

    }
}

?>