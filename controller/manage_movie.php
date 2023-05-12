<?php
//Start the session
session_start();
require "../db/connections.php";
//trim and store the results obtained in the POST method
$movie_name = stripslashes($_POST['mov_name']);
$movie_name = mysqli_real_escape_string($con, $movie_name);

$movie_desc = stripslashes($_POST['mov_description']);
$movie_desc = mysqli_real_escape_string($con, $movie_desc);

$movie_date = $_POST['mov_date'];

$movie_length = stripslashes($_POST['mov_length']);
$movie_length = mysqli_real_escape_string($con, $movie_length);

$movie_url = stripslashes($_POST['mov_url']);
$movie_url = mysqli_real_escape_string($con, $movie_url);

$movie_cover = stripslashes($_POST['mov_cover']);
$movie_cover = mysqli_real_escape_string($con, $movie_cover);

$mysqltime = date('Y-m-d H:i:s');

//If the post method comes with an ID, then update the element with the same ID on the databse
//if not, insert a new element into the table
if ($_POST['id'] == '') {
    $query = "INSERT into movies (name,rel_date,duration,description,media_url,cover_img,reg_date) VALUES ('$movie_name', '" . ($movie_date) . "','$movie_length','$movie_desc','$movie_url','$movie_cover','$mysqltime')";
} else {
    $query = "UPDATE movies SET name='" . $_POST['mov_name'] . "',rel_date='" . md5($_POST['mov_date']) . "'
    ,duration='" . $_POST['mov_length'] . "',description='" . $_POST['mov_description'] . "',media_url='" . $_POST['mov_url'] . "',
    cover_img='" . $_POST['mov_cover'] . "' WHERE id='" . $_POST['id'] . "'";
}
$result = mysqli_query($con, $query);
//if the result of the query is invalid, display the error.
if (!$result) {
    var_dump($con->error);
}
//Redirect to admin panel
header('Location: /plexio/views/admin_panel.php');
