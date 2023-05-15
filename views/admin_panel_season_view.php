<?php
//Retrieve the session and connect to the database
session_start();
require "../db/connections.php";
//If there is a post method, include the season controller

if ($_POST) {
    include "../controller/manage_season.php";
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
    $seasonQuery = "SELECT * FROM seasons WHERE id = " . $_GET['id'];
    $season = mysqli_fetch_assoc(mysqli_query($con, $seasonQuery));
    $episodesQuery = "SELECT tv_shows.name, seasons.season_number, episodes.*
        FROM episodes
        INNER JOIN seasons ON episodes.season_id = seasons.id
        INNER JOIN tv_shows ON seasons.tv_show_id = tv_shows.id
        WHERE episodes.season_id =". $_GET['id'];
    $episodes = mysqli_query($con, $episodesQuery);
    if (!$season) {
        echo "<p> That Season doesn't exist</p>";
    } else {
        include "modules/season_form.php";
    }
} else {
    include "modules/season_form.php";
}
include "modules/footer.php";