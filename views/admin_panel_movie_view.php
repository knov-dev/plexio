<?php
session_start();
require "../db/connections.php";

if ($_POST) {
    include "../controller/manage_movie.php";
}

if (isset($_GET['error'])) {
    if ($_GET['error'] = '1') {
        echo "<p> There has been an error, please try again. </p>";
    }
}
include "modules/header.php";
include "modules/navbar.php";

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