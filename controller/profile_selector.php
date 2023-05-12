<?php
session_start();include "../db/connections.php";
if (isset($_GET['pfid'])){
    $temp_log = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM profiles WHERE profile_id = " . $_GET['pfid']));
    $_SESSION['profile_id'] = $temp_log['profile_id'];
    $_SESSION['profile_name'] = $temp_log['profile_name'];
}
header("Location: ../views/home.php");