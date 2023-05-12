<?php
session_start();
require "../db/connections.php";

if ($_POST) {
    include "../controller/manage_tv.php";
}

if (isset($_GET['error'])) {
    if ($_GET['error'] = '1') {
        echo "<p> There has been an error, please try again. </p>";
    }
}
include "modules/header.php";
include "modules/navbar.php";

if (isset($_GET['id'])) {
    $query = "SELECT * FROM tv_shows WHERE id = " . $_GET['id'];
    $tv_show = mysqli_fetch_assoc(mysqli_query($con, $query));
    $seasonsQuery = "SELECT * FROM seasons WHERE tv_show_id=" . $_GET['id'];
    $seasons = mysqli_query($con, $seasonsQuery);
    if (!$tv_show) {
        echo "<p> That Tv Show doesn't exist</p>";
    } else {
        include "modules/tv_form.php";
    }
} else {
    include "modules/tv_form.php";
}
include "modules/footer.php";