<?php
//Start or retrieve the session
session_start();
//Connect to the database
require "../db/connections.php";

//Import header and navbar
include "modules/header.php";
include "modules/navbar.php";

//Create the query and fetch from the database
$tvResult = mysqli_query($con, "SELECT * FROM tv_shows");
$type = "tv_show";

//If there is results, display a container with the results
if(mysqli_num_rows($tvResult) > 0){ ?>
    <h2 class='text-center text-light'>Tv Shows on Chart:</h2><br>
<div class='container plexiocontainer' style="padding-top: 1%;">
    <div class='row'>
    <?php while ($row = mysqli_fetch_array($tvResult, MYSQL_ASSOC)) {
        include 'modules/card.php';
    } ?>
    </div>
</div>
<?php }

include "modules/footer.php"; ?>