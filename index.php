<?php
session_start();
require "db/connections.php";
$page_title = "Login or Register";
include "views/modules/header.php";
include "views/modules/navbar.php";

if(!isset($_SESSION['email'])){
    echo "<div class='login-form plexiocontainer'><h1>Welcome to plexio</h1></div> ";
} else if (!isset($_SESSION["profile_id"])) {
    header("Location: views/profile_manager.php");
} else {
    header("Location: views/home.php");
}
include "views/modules/footer.php";