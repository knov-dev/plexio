<?php
//Retrieve session and connect to the database
session_start();
require "../db/connections.php";
include "modules/header.php";
include "modules/navbar.php";
//Retrieve tv show and seasons from database
$tvQuery = "SELECT * FROM tv_shows WHERE id=" . $_GET['id'];
$tvResult = mysqli_fetch_assoc(mysqli_query($con, $tvQuery));
$seasonsQuery = "SELECT * FROM seasons WHERE tv_show_id=" . $_GET['id'];
$seasons = mysqli_query($con, $seasonsQuery);
//Display TV show information and seasons on screen.
echo "<div class='container plexiocontainer'>
        <div class='row'>
            <div class='col-6'>
                <img class='img-fluid' src='" . $tvResult['cover_img'] . "'>
            </div>
            <div class='col-6'>
                <div class='row'>
                    <div class='col'>
                        <p>" . $tvResult['name'] . "</p>
                    </div>
                    <div class='col'>
                        <p>Release Date: " . $tvResult['rel_date'] . "</p>
                    </div>
                </div> 
                <div class='row'>
                    <div class='col'>
                        <p>" . $tvResult['description'] . "</p>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>" ?>
    <h5>Seasons</h5>
    <!--Display season list -->
<?php include "modules/admin_panel_seasons.php"; ?>
<?= "</div>
    </div>";
include "modules/footer.php";
