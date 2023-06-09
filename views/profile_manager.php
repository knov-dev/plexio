<?php
//Retrieve the session and connect to the database
session_start();
require "../db/connections.php";
include "modules/header.php";
include "modules/navbar.php";
//If there is a post method, include the profile controller
if (isset($_POST['pfname'])) {
    include "../controller/manage_profile.php";
}
//If there is an id parameter in the url, select the profile whose ID belongs to. Display the profile form.
if (isset($_GET['id'])) {
    $profile = mysqli_query($con, "SELECT * FROM profiles WHERE profile_id = " . $_GET['id'])->fetch_assoc();
    include "modules/profile_form.php";
} else if (isset($_GET['create']) && !isset($_POST['pfname'])) {
    include "modules/profile_form.php";
} else {
    //If there is no profiles, prompt the user with a "create profile" message and display the profile form
    $profiles = mysqli_fetch_all(mysqli_query($con, "SELECT * FROM profiles WHERE user_id = " . $_SESSION['userid']));
    if (!$profiles) {
        echo "<div class='container plexiocontainer'><h1>You don't have any profiles. Create a profile now.</h1></div>";
        include "modules/profile_form.php";
    } else { ?>
        <div class='container row plexiocontainer profilecontainer'>
            <?php foreach($profiles as $r) { ?>
                <div class='col-2' style="padding: 3%;">
                    <a href='../controller/profile_selector.php?pfid="<?php echo $r[0];?>"'>
                        <div class='card bg-light'>
                            <img src='<?=$r[3]?>' class='card-img' >
                            <div class='card-img-overlay'>
                                <h5 class='card-title'><?php echo $r[2]?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php }
}
include "modules/footer.php"; ?>