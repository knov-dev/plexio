<?php
//Retrieve the session and conect to the database
session_start();
require "db/connections.php";
$page_title = "Login or Register";
include "views/modules/header.php";
include "views/modules/navbar.php";
//If there is no email set in the session, display a welcome message and allow user to login or register
if(!isset($_SESSION['email'])){
    echo "<div class='login-form plexiocontainer'><h1>Welcome to plexio</h1></div> ";
    //If there is an email, depending on whether the user has already created/selected an user or not,
    //redirect either to the profile create/select screen or to the home view.
} else if (!isset($_SESSION["profile_id"])) {
    header("Location: views/profile_manager.php");
} else {
    header("Location: views/home.php");
}
include "views/modules/footer.php";