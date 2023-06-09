<?php
//Retrieve session and connect to the database
session_start();
require "../db/connections.php";
//Retrieve the values to be indexed in the database

$season_number = stripslashes($_POST['season_number']);
$season_number = mysqli_real_escape_string($con, $season_number);

$season_date = $_POST['season_date'];

$season_description = stripslashes($_POST['season_description']);
$season_description = mysqli_real_escape_string($con, $season_description);

$season_cover = stripslashes($_POST['season_cover']);
$season_cover = mysqli_real_escape_string($con, $season_cover);

$mysqltime = date('Y-m-d H:i:s');
//Set up the query. If the ID parameter is empty, the item does not exist and needs to be created. Otherwise, it exists and needs to be updated

if ($_POST['id'] == '') {
    $query = "INSERT into seasons (season_number,air_date,description,cover_img,reg_date) 
VALUES ('$season_number', '" . ($season_date) . "','$season_description','$season_cover','$mysqltime')";
} else {
    $query = "UPDATE seasons SET season_number='" . $_POST['season_number'] . "',air_date='" . ($_POST['season_date']) . "'
    ,description='" . $_POST['season_description'] . "',cover_img='" . $_POST['season_cover'] . "' WHERE id='" . $_POST['id'] . "'";
}

$result = mysqli_query($con, $query);
//If the query fails, return a dump with the error code.

if (!$result) {
    var_dump($con->error);
}
//Redirect to the admin panel
header('Location: /plexio/views/admin_panel_season_view.php');
