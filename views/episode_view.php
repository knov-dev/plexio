<?php
//Retrieve the session and connect to the database
session_start();
require "../db/connections.php";
include "modules/header.php";
include "modules/navbar.php";
//Retrieve episodes from the database by the id passed in the url, and the user whose user id is stored in the session
$episode = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM episodes WHERE id=" . $_GET['id']));
$user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE userid=" . $_SESSION['userid']));

//Display the episode view on screen. If the user is subscribed, display a "watch" button, otherwise display a "suscribe" button
echo "<div class='container plexiocontainer' >
        <div class='row'>
            <div class='col'><p> Episode: " . $episode['episode_number'] . " - " . $episode['name'] . "</p></div>
            <div class='col-3'><p> Air Date: " . $episode['air_date'] . "</p></div>
            <div class='col-3'><p> Duration: " . $episode['duration'] . "</p></div>
        </div>
        <div class='row'>
            <div class='col'><iframe width='560' height='315' src='" . $episode['media_url'] . "' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe></div>
            <div class='col'><p>" . $episode['description'] . "</p><div class='container' style='display: grid;justify-content: center;'>";?><?php if($user['is_member'] == '1'){
    echo"<a type='button' class='btn btn-secondary' href='view.php?media=2&id=".$episode['id'].">Watch Now</button>";
}else{
    echo"<a type='button' class='btn btn-secondary' href='account.php'>Subscribe Now</button>";

} ?>
<?="</a></div>
</div>
</div>";
include "modules/footer.php";?>

