<?php
session_start();
require '../db/connections.php';
if(isset($_GET['id'])){
    $query = "DELETE FROM tv_shows WHERE id=".$_GET["id"];
    $result = mysqli_query($con,$query);
}
header("Location: /plexio/views/admin_panel.php");