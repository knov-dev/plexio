<?php
//If the petition brings an email, check for the email in the database and also check that the password matches.
if (isset($_POST['email'])) {
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $query = "SELECT * FROM users WHERE email='$email' and password='" . md5($password) . "'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($result);
    //If there is a valid result, set the user id, admin status and email on the session and redirect back to index.
    //else, display an error module in the login page.
    if ($rows == 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $user['email'];
        $_SESSION['is_admin'] = $user['is_admin'];
        $_SESSION['userid'] = $user['userid'];
        header("Location: /plexio/index.php");
        exit();
    } else {
        include "modules/login_error.php";
    }
}