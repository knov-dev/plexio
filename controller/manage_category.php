<?php
//Retrieve session and connect to the database
session_start();
require "../db/connections.php";
//Retrieve the values to be indexed in the database
$cat_name = stripslashes($_POST['cat_name']);
$cat_name = mysqli_real_escape_string($con, $cat_name);
//Set up the query
$query = "INSERT into categories (name) VALUES ('$cat_name')";

$result = mysqli_query($con, $query);
//If the query fails, return a dump with the error code.
if (!$result) {
    var_dump($con->error);
}
//Redirect to the admin panel
header('Location: /plexio/views/admin_panel.php');
