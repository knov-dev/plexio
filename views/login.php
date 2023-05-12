<?php
session_start();
$page_title = "Login";
include "modules/header.php";
include "modules/navbar.php";
require "../db/connections.php";
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
include "modules/login_form.php";
require "../controller/login_validation.php";
include "modules/footer.php";