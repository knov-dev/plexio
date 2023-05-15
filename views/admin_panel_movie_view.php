<?php
//Retrieve the session and connect to the database
session_start();
require "../db/connections.php";
//If there is a post method, include the movie controller
if ($_POST) {
    include "../controller/manage_movie.php";
}
//If the url comes with an error parameter, display an error message on screen
if (isset($_GET['error'])) {
    if ($_GET['error'] = '1') {
        echo "<p> There has been an error, please try again. </p>";
    }
}
include "modules/header.php";
include "modules/navbar.php";
//If there is an id in the URL, select the movie by id from the database
//Otherwise display the movie form to be filled
if (isset($_GET['id'])) {
    $query = "SELECT * FROM movies WHERE id = " . $_GET['id'];
    $movie = mysqli_fetch_assoc(mysqli_query($con, $query));
    if (!$movie) {
        echo "<p> That movie doesn't exist</p>";
    } else {
        include "modules/movie_form.php";
    }
} else {
    include "modules/movie_form.php";
}
include "modules/footer.php";