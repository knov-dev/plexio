<?php
//Retrieve session and connect to the database
session_start();
require "../db/connections.php";
//Retrieve the values to be indexed in the database

$tv_name = stripslashes($_POST['tv_name']);
$tv_name = mysqli_real_escape_string($con, $tv_name);

$tv_date = $_POST['tv_date'];

$tv_description = stripslashes($_POST['tv_description']);
$tv_description = mysqli_real_escape_string($con, $tv_description);

$tv_cover = stripslashes($_POST['tv_cover']);
$tv_cover = mysqli_real_escape_string($con, $tv_cover);

$mysqltime = date('Y-m-d H:i:s');

//Set up the query. If the ID parameter is empty, the item does not exist and needs to be created. Otherwise, it exists and needs to be updated

if ($_POST['id'] == '') {
    $query = "INSERT into tv_shows (name,rel_date,description,cover_img,reg_date) 
VALUES ('$tv_name', '" . ($tv_date) . "','$tv_description','$tv_cover','$mysqltime')";
} else {
    $query = "UPDATE tv_shows SET name='" . $_POST['tv_name'] . "',rel_date='" . ($_POST['tv_date']) . "'
    ,description='" . $_POST['tv_description'] . "',cover_img='" . $_POST['tv_cover'] . "' WHERE id='" . $_POST['id'] . "'";
}

$result = mysqli_query($con, $query);
//If the query fails, return a dump with the error code.

if (!$result) {
    var_dump($con->error);
}
//Redirect to the admin panel
header('Location: /plexio/views/admin_panel.php');
