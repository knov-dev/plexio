<?php
session_start();

$page_title = "Login";
include "modules/header.php";
include "modules/navbar.php";
require "../db/connections.php";

if (isset($_GET['error'])) {
    if ($_GET['error'] = '1') {
        echo "<div class='plexiocontainer'><p> Passwords don't match! </p></div>";
    }
}

if (isset($_POST['email'])) {
    include "../controller/manage_user.php";
} else {
    if (isset($_GET['id'])) {
        $query = "SELECT * FROM users WHERE userid = " . $_GET['id'];
        $user = mysqli_fetch_assoc(mysqli_query($con, $query));
        if (!$user) {
            echo "<div class='plexiocontainer'><p> That user doesn't exist</p></div>";
        } else {
            include "modules/registration_form.php";
        }
    } else {
        include "modules/registration_form.php";
    }
}
include "modules/footer.php";
