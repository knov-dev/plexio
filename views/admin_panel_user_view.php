<?php
session_start();
require "../db/connections.php";

if ($_POST) {
    include "../controller/manage_user.php";
}

if (isset($_GET['error'])) {
    if ($_GET['error'] = '1') {
        echo "<p> Passwords don't match! </p>";
    }
}
include "modules/header.php";
include "modules/navbar.php";

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