<?php
//Retrieve the session and connect to the database
session_start();
require "../db/connections.php";
include "modules/header.php";
include "modules/navbar.php";
//Retrive the episodes that belong to the season to display
$episodes = mysqli_query($con, "SELECT * FROM episodes WHERE season_id=".$_GET['id']);
//if there are episodes, display them on cards.
if(mysqli_num_rows($episodes) > 0){ ?>
    <h2 class='text-center text-light'>Now on Screen</h2><br>
    <div class='container plexiocontainer' style="padding-top: 1%;">
        <div class='row'>
            <?php while ($row = mysqli_fetch_array($episodes, MYSQL_ASSOC)) {
                include 'modules/ep_card.php';
            } ?>
        </div>
    </div>
<?php }

include "modules/footer.php"; ?>