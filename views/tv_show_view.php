<?php

session_start();
require "../db/connections.php";


include "modules/header.php";
include "modules/navbar.php";
$tvQuery = "SELECT * FROM tv_shows WHERE id=". $_GET['id'];
$tvResult = mysqli_fetch_assoc(mysqli_query($con, $tvQuery));
$seasonsQuery = "SELECT * FROM seasons WHERE tv_show_id=" . $_GET['id'];
$seasons = mysqli_query($con, $seasonsQuery);
echo"<div class='container plexiocontainer'>
        <div class='row'>
            <div class='col-6'>
                <img class='img-fluid' src='".$tvResult['cover_img']."'>
            </div>
            <div class='col-6'>
                <div class='row'>
                    <div class='col'>
                        <p>".$tvResult['name']."</p>
                    </div>
                    <div class='col'>
                        <p>Release Date: ".$tvResult['rel_date']."</p>
                    </div>
                </div> 
                <div class='row'>
                    <div class='col'>
                        <p>".$tvResult['description']."</p>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>"?>
            <h5>Seasons</h5>
            <?php include "modules/admin_panel_seasons.php";?>
            <?="
        </div>
    </div>";
include "modules/footer.php";
