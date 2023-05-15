<?php
//Set the timezone to UTC
date_default_timezone_set('UTC');
// Enter your Host, username, password, database below.
$con = mysqli_connect("localhost", "root", "usbw", "plexio");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

