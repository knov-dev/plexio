<?php
session_start();
require "../db/connections.php";
include "modules/header.php";
include "modules/navbar.php";

if (isset($_POST['userid'])) {
    if ($_POST['pw1'] != $_POST['pw2']) {
        header('Location: /plexio/views/reset_password_form.php?msg=0');
    }
    $result = mysqli_query($con, "UPDATE users SET password='" . md5($_POST['pw1']) . "'WHERE userid='" . $_POST['userid'] . "'");
    header('Location: /plexio/views/login.php?msg=1');


}


if (isset($_POST['email'])) {
    //echo "<div class='container' style='justify-content:center;'><h5>An email has been sent to ".$_POST['email'].". Please follow the instructions to update it.</h5></div>";
    $email = $_POST['email'];
    $user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE email='" . $email . "'"));
    if ($_POST['email'] == $user['email'] && $_POST['cvv'] == $user['cvv']) {
        include "modules/reset_password_form.php";
    } else {
        echo 'Cant find any user with those credentials. Try again';
        include "modules/forgot_password_form.php";
    }
} else {
    include "modules/forgot_password_form.php";
}