<!--
Module to display the profile form
-->
<div class="reg-form plexiocontainer" style="padding-top: 1%;">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="pfname">Profile Name</label>
                <input id="pfname" type="text" class="form-control"
                       name="pfname" value="<?php if (isset($profile)) echo $profile['profile_name']?>"
                       placeholder="..." required>
            </div>

            <div class="col-md-6">
                <label for="pfimg">Profile Image</label>
                <input id="pfimg" type="text" class="form-control"
                       name="pfimg" value="<?php if (isset($profile)) echo $profile['profile_img']?>"
                       placeholder="Insert URL...">
            </div>
            <div class="row">
                <div class="buttonrow col-md-12">
                    <button type="submit" class="btn btn-primary" value="profile_manager">Submit</button>
                </div>
            </div>
            <input type="hidden" name="userid" value="<?= isset($user) ?$user['userid'] : '' ?>">
            <input type="hidden" name="profile_id" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">
        </div>
    </form>
</div>