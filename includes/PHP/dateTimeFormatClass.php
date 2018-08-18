<?php 

class DateTimeFormat{

    public static function Convert($date){
        $today = new DateTime();
        $inputDate = new DateTime($date);
        $formatted["Date"] = $inputDate->format("Y-m-D");
        $formatted["Time"] = $inputDate->format("g:i A");
        $formatted["Full"] = $inputDate->format("F jS, Y g:i A");

        if($today->diff($inputDate)->days === 0){
            echo "Today, ".$formatted["Time"];
        }
        else if($today->diff($inputDate)->days === 1){
            echo "Yesterday, ".$formatted["Time"];
        }
        else{
            echo $formatted["Full"];
        }
        
    }
}
?>