<?php
//Retrieve the session and destroy it. Redirect to index.
session_start();
session_destroy();
header("Location: ../index.php");
?>