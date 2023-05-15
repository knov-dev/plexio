<?php
//Retrieve the session and connect to the database.
session_start();
$page_title = "Login";
include "modules/header.php";
include "modules/navbar.php";
require "../db/connections.php";
//If there is a 'register' parameter.
// if the value is one, display a 'successful registration' message on screen.
//if it also contains a 'msg' parameter, display a 'successful password change' message on screen
if (isset($_GET['register'])) {
    if($_GET['register'] == '1'){
        echo "<div class='form plexiocontainer'>
                <h3>You are registered successfully. You can log in now:</h3>
              </div>";
    }elseif($_GET['msg'] == "1"){
        echo "<div class='form plexiocontainer'>
                <h3>Password successfully changed. You can log in now:</h3>
              </div>";
    }
}
//Otherwise display the login form.
include "modules/login_form.php";
require "../controller/login_validation.php";
include "modules/footer.php";