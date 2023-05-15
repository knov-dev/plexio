<?php
//Retrieve the session and connect to the database
session_start();
require "../db/connections.php";

//Create queries for movies, tv shows, categories and users
$moviesQuery = "SELECT * FROM movies";
$movieResult = mysqli_query($con, $moviesQuery);
$tvQuery = "SELECT * FROM tv_shows";
$tvResult = mysqli_query($con, $tvQuery);
$categoryQuery = "SELECT * FROM categories";
$categoryResult = mysqli_query($con, $categoryQuery);
$usersQuery = "SELECT * FROM users";
$usersResult = mysqli_query($con, $usersQuery);

include "modules/header.php";
include "modules/navbar.php";

//Import modules for the admin panel for movies, tv shows, categories and users
?>
    <div class="row">
        <div class="plexiocontainer col-md-6" style="margin-top: 1%;"> <?php include "modules/admin_panel_movies.php" ?></div>
        <div class="plexiocontainer col-md-6" style="margin-top: 1%;"> <?php include "modules/admin_panel_tv.php" ?></div>
    </div>
    <div class="row">
        <div class="plexiocontainer col-md-6" style="margin-top: 1%;"> <?php include "modules/admin_panel_users.php"?></div>
        <div class="plexiocontainer col-md-6" style="margin-top: 1%;"> <?php include "modules/admin_panel_categories.php"?></div>
    </div>


<?php
include "modules/footer.php";
?>