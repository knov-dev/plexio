<?php
//Retrieve session and connect to the database
session_start();
require "../db/connections.php";
//Retrieve the values to be indexed in the database

$ep_number = stripslashes($_POST['ep_num']);
$ep_number = mysqli_real_escape_string($con, $ep_number);

$ep_name = stripslashes($_POST['ep_name']);
$ep_name = mysqli_real_escape_string($con, $ep_name);

$ep_date = $_POST['ep_date'];

$ep_description = stripslashes($_POST['ep_description']);
$ep_description = mysqli_real_escape_string($con, $ep_description);

$ep_duration = stripslashes($_POST['ep_duration']);
$ep_duration = mysqli_real_escape_string($con, $ep_duration);

$ep_thumb = stripslashes($_POST['ep_thumb']);
$ep_thumb = mysqli_real_escape_string($con, $ep_thumb);

$ep_url = stripslashes($_POST['ep_url']);
$ep_url = mysqli_real_escape_string($con, $ep_url);

$mysqltime = date('Y-m-d H:i:s');
//Set up the query. If the ID parameter is empty, the item does not exist and needs to be created. Otherwise, it exists and needs to be updated

if ($_POST['id'] == '') {
    $query = "INSERT into episodes (episode_number,name,description,duration,air_date,thumbnail,media_url,reg_date) 
VALUES ('$ep_number', '$ep_name','$ep_description','$ep_duration','$ep_date','$ep_thumb','$ep_url','$mysqltime')";
} else {
    $query = "UPDATE episodes SET episode_number='" . $_POST['ep_num'] . "',name='" . $_POST['ep_name'] . "',description='" . $_POST['ep_description'] . "',
    duration='" . $_POST['ep_duration'] . "',air_date='" . ($_POST['ep_date']) . "'
    ,thumbnail='" . $_POST['ep_thumb'] . "',media_url='" . $_POST['ep_url'] . "' WHERE id='" . $_POST['id'] . "'";
}

$result = mysqli_query($con, $query);
//If the query fails, return a dump with the error code.

if (!$result) {
    var_dump($con->error);
}
//Redirect to the admin panel
header('Location: /plexio/views/admin_panel_season_view.php');
