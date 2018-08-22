<?php 

class Topic{
    
    public $Topic_ID;
    public $Topic_Name;
    public $Topic_Author;
    public $Topic_CreationDate;
    public $Topic_Replies;
    public $Topic_Views;
    public $Topic_LastPerson;
    public $Topic_LastTime;
    public $Category_ID;

    public static function GetTopicByID($TID2){
        $topic = self::TopicQuery("SELECT * FROM topic WHERE Topic_ID = '$TID2'");
        return !empty($topic) ? array_shift($topic) : false;
    }

    public static function GetAllTopics($TID){
        return self::TopicQuery("SELECT * FROM topic WHERE Category_ID = '$TID'");
    }

    public static function TopicQuery($sql){
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

    public static function GetLast(){
        global $db;
        $sql = $db->connection->query("SELECT * FROM post ORDER BY Post_ID DESC LIMIT 1");
        $lastData = $sql->fetch_assoc();
        $lastUserID = $lastData["User_ID"];
        $lastPersonQuery = $db->connection->query("SELECT User_Username FROM user WHERE User_ID = '$lastUserID'");
        $lastPerson = $lastPersonQuery->fetch_assoc();

        $lastOut["Author"] = $lastPerson["User_Username"];
        $lastOut["Date"] = $lastData["Post_Date"];
        $lastOut["Name"] = $lastData["Post_Name"];

        return $lastOut;
    }
    
}

?>