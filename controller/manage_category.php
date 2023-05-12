<?php
session_start();
require "../db/connections.php";

$cat_name = stripslashes($_POST['cat_name']);
$cat_name = mysqli_real_escape_string($con, $cat_name);

$query = "INSERT into categories (name) VALUES ('$cat_name')";

$result = mysqli_query($con, $query);

if (!$result) {
    var_dump($con->error);
}
header('Location: /plexio/views/admin_panel.php');
