<?php 
if(isset($_GET["t"])){
    
$topic = Topic::GetTopicByID($_GET["t"]);

?>
     
     <div class="container">
     <?php 

     $allPosts = Post::GetAllPosts($topic->Topic_ID);

     foreach($allPosts as $post){
        $user = User::GetUserByID($post->User_ID);
     ?>
        <table style="border: 1px solid #EBEBEB;" class="table">
        <tr style="border:none;">
        <td style="border:none;border-right:1px solid #EBEBEB" class="col-xs-5" align="center"><?php echo $user->User_Username; ?></td>
        <td style="border:none;" class="col-md-7">  <div style="float:left;width:50%;"><h5><?php echo $post->Post_Name; ?></h5></div> <div style="float:right;width:50%;text-align:right;"><i style="padding-right:10px;" class="material-icons">flag</i><i class="material-icons">format_quote</i></div></td>
        </tr>
        <tr style="border:none;">
        <td align="center" style="font-size:12px;border:none;border-right:1px solid #EBEBEB;" class="col-xs-5"><img src="<?php echo $user->User_Avatar; ?>" alt="Avatar" height="130px" /><strong>Posts: </strong><?php echo $user->CountUserPosts(); ?><br/><strong>Game name: </strong><?php echo $user->User_GameName; ?></td>
        <td style="border:none;" class="col-md-7"><?php echo $post->Post_Description; ?></td>
        </tr>
        <tr style="border:none;">
        <td style="border:none;border-right:1px solid #EBEBEB" class="col-xs-5" align="center"><img src="http://forum.sa-mp.im/images/ranks/associate.gif" alt="Rank"></td>
        <td style="border:none;" class="col-md-7"><small><?php DateTimeFormat::Convert($post->Post_Date); ?></small></td>
        </tr>
        </table>
        <?php 
     }
        ?>
        </div>

        <div class="container">
                <?php

                if(isset($_POST["post"])){
                        $name = $_POST["name"];
                        $content = $_POST["content"];

                        $postNew = new Post();
                        $postNew->Create($name, $content, 0, $session->UserID, $topic->Topic_ID, $topic->Category_ID);
                }
                
                ?>
                <table style="border: 1px solid #EBEBEB;" class="table">
                <form action="" method="POST">
                        <tr style="border:none;">
                                <td style="border:none;">
                                        <center><div class="form-group"><input name="name" type="text" value="Re: <?php echo $topic->Topic_Name; ?>" class="form-control" readonly /></div></center>
                                </td>
                        </tr>
                        <tr style="border:none;">
                                <td style="border:none;">
                                        <center><textarea name="content" class="form-control" style="margin-top:15px;" rows="9" cols="90"></textarea></center>
                                </td>
                        </tr>
                        <tr style="border:none;">
                                <td style="border:none;">
                                        <center><input name="post" type="submit" class="btn" style="border-radius: 0;" value="Post"></center>
                                </td>
                        </tr>
                </form>
                </table>
        </div>
<? 
}
?>
        <div class="chunk2"></div>