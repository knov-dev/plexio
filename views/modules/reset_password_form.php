<!--
Module to display the reset password form
-->

<div class="login-form">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <label for="pw1">Password</label>
                <input type="password" class="form-control" name="pw1" id="pw1" placeholder="...">
            </div>
            <div class="col-md-6">
                <label for="pw2">Repeat Password</label>
                <input type="password" class="form-control" name="pw2" id="pw2" placeholder="...">
            </div>
        </div>
        <div class="row">
            <div class="buttonrow col-md-12">
                <button type="submit" class="btn btn-primary" value="login">Submit</button>
                <input type="hidden" name="userid" value="<?=$user['userid']?>">
            </div>
        </div>
    </form>
</div>