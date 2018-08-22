<div class="container">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="?source=profile" class="list-group-item list-group-item-action">Edit profile</a>
                    <a href="?source=signature" class="list-group-item list-group-item-action">Edit signature</a>
                    <a href="?source=avatar" class="list-group-item list-group-item-action active">Edit avatar</a>
                    <a href="?source=account" class="list-group-item list-group-item-action">Edit account settings</a>
                </div>
            </div>
            <div style="background-color:#F0F0F0;height:390px;border:1px solid #EBEBEB;border-radius:4px;" class="col-9">
                <table class="table" style="border:none;">
                    <tr style="border:none;">
                        <td style="border:none;">Current image:</td>
                        <td style="border:none;"><center><img src="<?php echo $user->User_Avatar ?>" alt="Avatar" height="130px"></center></td>
                    </tr>
                    <tr style="border:none;">
                        <td style="border:none;">Upload:</td>
                        <td style="border:none;"><div class="custom-file"><input type="file" class="custom-file-input" /><label class="custom-file-label" for="customFile">Choose file</label></div></td>
                    </tr>
                    <tr style="border:none;">
                        <td style="border:none;"></td>
                        <td style="border:none;padding-left:160px;"><a href="#" class="btn btn-primary">Submit</a></td>
                        <td style="border:none;"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>