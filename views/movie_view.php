<?php
session_start();
require "../db/connections.php";
include "modules/header.php";
include "modules/navbar.php";
$moviesQuery = "SELECT * FROM movies WHERE id=" . $_GET['id'];
$movieResult = mysqli_fetch_assoc(mysqli_query($con, $moviesQuery));
$user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE userid=" . $_SESSION['userid']));
echo "<div class='container plexiocontainer'>
<div class='row'>
<div class='col'><p>Name: " . $movieResult['name'] . "</p></div>
<div class='col-3'><p>Release Date: " . $movieResult['rel_date'] . "</p></div>
<div class='col-3'><p>Duration: " . $movieResult['duration'] . " Min</p></div>
</div>
<div class='row'>
    <div class='col'>
        <iframe width='560' height='315' src='" . $movieResult['media_url'] . "' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>
    </div>
    <div class='col'>
        <p>Sinopsis: " . $movieResult['description'] . "</p><div class='container' style='display: grid;justify-content: center;'>
    ";?><?php if($user['is_member'] == '1'){ ?>
    <a class='btn btn-secondary' href='view.php?media=1&id=<?=$movieResult['id']?>'>Watch Now</a></div></div>

<?php } else { ?>
    <a class='btn btn-secondary' href='account.php'>Subscribe Now</a></div></div>

<?php } ?>




<?php
include "modules/footer.php";?>
