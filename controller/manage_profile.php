<?php
//Retrieve session and connect to the database
session_start();
require "../db/connections.php";
//Retrieve the values to be indexed in the database
$pf_id = $_SESSION['userid'];
$pf_name = stripslashes($_POST['pfname']);
$pf_name = mysqli_real_escape_string($con, $pf_name);
$pf_img = stripslashes($_POST['pfimg']);
$pf_img = mysqli_real_escape_string($con, $pf_img);

//header('Location: /plexio/views/profile_manager.php');
//Set up the query. If the ID parameter is empty, the item does not exist and needs to be created. Otherwise, it exists and needs to be updated

if ($_POST['profile_id'] == '') {
    $query = "INSERT into profiles (user_id,profile_name,profile_img) VALUES (".$pf_id.", '".$pf_name."', '".$pf_img."')";
} else {
    $query = "UPDATE profiles SET profile_name='" . $pf_name . "',profile_img='" . $pf_img . "'WHERE profile_id='" . $_POST['profile_id'] . "'";
}
$result = mysqli_query($con, $query);
//If the query fails, return a dump with the error code.
if (!$result) {
    var_dump($con->error);
}
//Redirect to the admin panel
header('Location: /plexio/views/profile_manager.php');
