<div class="container">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="?source=profile" class="list-group-item list-group-item-action">Edit profile</a>
                    <a href="?source=signature" class="list-group-item list-group-item-action">Edit signature</a>
                    <a href="?source=avatar" class="list-group-item list-group-item-action">Edit avatar</a>
                    <a href="?source=account" style="background-color:#DDDDDD; color:black; border:#DDDDDD" class="list-group-item list-group-item-action active">Edit account settings</a>
                </div>
            </div>
            <div style="background-color:#F0F0F0;height:390px;border:1px solid #EBEBEB;border-radius:4px;" class="col-9">
                <table class="table" style="border:none;">
                    <tr style="border:none;">
                        <td style="border:none;">Username:</td>
                        <td style="border:none;"><div class="form-group"><input type="text" value="<?php echo $user->User_Username ?>" class="form-control" readonly /></div></td>
                    </tr>
                    <tr style="border:none;">
                        <td style="border:none;">Email:</td>
                        <td style="border:none;"><div class="form-group"><input type="text" value="<?php echo $user->User_Email ?>" class="form-control" /></div></td>
                    </tr>
                    <tr style="border:none;">
                        <td style="border:none;">Password:</td>
                        <td style="border:none;"><div class="form-group"><input type="password" class="form-control" /></div></td>
                    </tr>
                    <tr style="border:none;">
                        <td style="border:none;"></td>
                        <td style="border:none;padding-left:150px;"><input name="submit" type="submit" class="btn" value="Submit" style="border-radius: 0;"></td>
                        <td style="border:none;"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>