<?php
session_start();
require "../db/connections.php";

include "modules/header.php";
include "modules/navbar.php";

$movieResult = mysqli_query($con, "SELECT * FROM movies");
$type = "movie";

if (mysqli_num_rows($movieResult) > 0) { ?>
<h2 class='text-center text-light'>Movies on Chart:</h2><br>
<div class='container plexiocontainer' style="padding-top: 1%;">
    <div class='row'>
        <?php while ($row = mysqli_fetch_array($movieResult, MYSQL_ASSOC)) {
            include 'modules/card.php';
        } ?>
    </div>
</div>
<?php }

include "modules/footer.php"; ?>