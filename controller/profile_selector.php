<?php
//Retrieve the session and connect to the database
session_start();
include "../db/connections.php";
//If the query contains a profile id, select the profile from the databse and set its id and user name in the session.
if (isset($_GET['pfid'])){
    $temp_log = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM profiles WHERE profile_id = " . $_GET['pfid']));
    $_SESSION['profile_id'] = $temp_log['profile_id'];
    $_SESSION['profile_name'] = $temp_log['profile_name'];
}

//Redirect to home screen
header("Location: ../views/home.php");