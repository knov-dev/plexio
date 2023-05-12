<?php
session_start();
require "../db/connections.php";
include "modules/header.php";
include "modules/navbar.php";
if(isset($_GET['media'])){
    if($_GET['media']=='1'){
        $r = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM movies WHERE id=".$_GET['id']));
    }else{
        $r = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM episodes WHERE id=".$_GET['id']));
    }
}
echo" <iframe width='100%' height='100%' src='" . $r['media_url'] . "' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>";
include "modules/footer.php";