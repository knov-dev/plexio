<?php
session_start();
require '../db/connections.php';
if(isset($_GET['id'])){
    $query = "DELETE FROM users WHERE userid=".$_GET["id"];
   $result = mysqli_query($con,$query);
}
if(isset($_GET['is_admin'])==1){
    header("Location: /plexio/views/admin_panel.php");
}else{
    session_destroy();
    header("Location: /plexio/index.php");
}