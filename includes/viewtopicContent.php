<?php 
if(isset($_GET["t"])){
    

?>
     
     <div class="container">
     <?php 
     $topic = Topic::GetTopicByID($_GET["t"]);
     ?>
        <table style="border: 1px solid #EBEBEB;" class="table">
        <tr style="border:none;">
        <td style="border:none;border-right:1px solid #EBEBEB" class="col-xs-5" align="center">Johnny4</td>
        <td style="border:none;" class="col-md-7">  <div style="float:left;width:50%;"><h5>Donate 4 Cash - Trading Center</h5></div> <div style="float:right;width:50%;text-align:right;"><i style="padding-right:10px;" class="material-icons">flag</i><i class="material-icons">format_quote</i></div></td>
        </tr>
        <tr style="border:none;">
        <td  align="center" style="font-size:12px;border:none;border-right:1px solid #EBEBEB;" class="col-xs-5"><img src="http://i.imgur.com/NuHlM44.png" alt="Avatar" height="130px" /><strong>Posts: </strong>4141<br/><strong>Game name: </strong>John Wick</td>
        <td style="border:none;" class="col-md-7">
            <?php echo $topic->Topic_Description; ?>
        </td>
        </tr>
        <tr style="border:none;">
        <td style="border:none;border-right:1px solid #EBEBEB" class="col-xs-5" align="center"><img src="http://forum.sa-mp.im/images/ranks/associate.gif" alt="Rank"></td>
        <td style="border:none;" class="col-md-7"><small>August 17th, 2018, 5:27 pm</small></td>
        </tr>
        </table>
        </div>
<? 
}
?>
        <div class="chunk2"></div>