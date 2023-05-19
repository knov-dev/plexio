<?php
//Retrieve the session and connect to the database
session_start();
$page_title = "Login";
include "modules/header.php";
include "modules/navbar.php";
require "../db/connections.php";
//If there is an error parameter in the url, display an 'error message'
if (isset($_GET['error'])) {
    if ($_GET['error'] = '1') {
        echo "<div class='plexiocontainer'><p> Passwords don't match! </p></div>";
    }
}
//If there is a post method, include the user controller
if (isset($_POST['email'])) {
    include "../controller/manage_user.php";
    //if the ID is set, select the user whose ID belongs to and display the filled user form.
} else {
    if (isset($_GET['id'])) {
        $query = "SELECT * FROM users WHERE userid = " . $_GET['id'];
        $user = mysqli_fetch_assoc(mysqli_query($con, $query));
        if (!$user) {
            echo "<div class='plexiocontainer'><p> That user doesn't exist</p></div>";
        } else {
            include "modules/registration_form.php";
        }
        //Otherwise just display empty form
    } else {
        include "modules/registration_form.php";
    }
}
include "modules/footer.php";
