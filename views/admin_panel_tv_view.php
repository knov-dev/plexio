<?php
//Retrieve the session and connect to the database
session_start();
require "../db/connections.php";
//If there is a post method, include the tv show controller

if ($_POST) {
    include "../controller/manage_tv.php";
}
//If the url comes with an error parameter, display an error message on screen

if (isset($_GET['error'])) {
    if ($_GET['error'] = '1') {
        echo "<p> There has been an error, please try again. </p>";
    }
}
include "modules/header.php";
include "modules/navbar.php";
//If there is an id in the URL, select the tv show by id from the database, and join it to its related seasons and episodes.
//Otherwise display the episode form to be filled.
if (isset($_GET['id'])) {
    $query = "SELECT * FROM tv_shows WHERE id = " . $_GET['id'];
    $tv_show = mysqli_fetch_assoc(mysqli_query($con, $query));
    $seasonsQuery = "SELECT * FROM seasons WHERE tv_show_id=" . $_GET['id'];
    $seasons = mysqli_query($con, $seasonsQuery);
    if (!$tv_show) {
        echo "<p> That Tv Show doesn't exist</p>";
    } else {
        include "modules/tv_form.php";
    }
} else {
    include "modules/tv_form.php";
}
include "modules/footer.php";