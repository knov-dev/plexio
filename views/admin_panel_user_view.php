<?php
//Retrieve the session and connect to the database
session_start();
require "../db/connections.php";
//If there is a post method, include the user controller

if ($_POST) {
    include "../controller/manage_user.php";
}
//If the url comes with an error parameter, display an error message on screen

if (isset($_GET['error'])) {
    if ($_GET['error'] = '1') {
        echo "<p> Passwords don't match! </p>";
    }
}
include "modules/header.php";
include "modules/navbar.php";
//If there is an id in the URL, select the user by id from the database
//Otherwise display the user form to be filled
if (isset($_GET['id'])) {
    $query = "SELECT * FROM users WHERE userid = " . $_GET['id'];
    $user = mysqli_fetch_assoc(mysqli_query($con, $query));
    if (!$user) {
        echo "<p> That user doesn't exist</p>";
    } else {
        include "modules/registration_form.php";
    }
} else {
    include "modules/registration_form.php";
}


include "modules/footer.php";