<!--
Module to display the login form
-->

<div class="login-form plexiocontainer">
    <form action="" method="post" novalidate>
        <div class="row">
            <div class="col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
        </div>
        <div class="row" style="justify-content: center;">
            <div class="col"><a href="forgot_password.php">Forgot Password</a></div>
        </div>
        <div class="row">
            <div class="buttonrow col-md-12">
                <button type="submit" class="btn btn-primary" value="login">Submit</button>
            </div>
        </div>
    </form>
</div>