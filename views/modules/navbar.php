<!--
Module to display the navbar form
-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/plexio/index.php">Plexio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                //if there is no email declared in the session, the user hasn't logged in,
                // therefore just display login and register options
                if (!isset($_SESSION['email'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href='/plexio/views/login.php'>Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='/plexio/views/register.php'>Register</a>
                    </li>
                <?php } else
                //If there is an user, display different categories
                { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/plexio/views/tvshows.php">TV Shows</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/plexio/views/movies.php">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/plexio/views/account.php">Account</a>
                    </li>
                    <?php
                    //If the user has is an admin, display an admin panel button

                    if ($_SESSION['is_admin'] == 1) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/plexio/views/admin_panel.php">Admin Panel</a>
                        </li>
                    <?php }
                    //If the user has passed the profile selection screen, display the user name
                    // tab with the option of changing the user or logging out
                    if(isset($_SESSION['profile_id'])){
                        echo "<li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button'
                           data-bs-toggle='dropdown' aria-expanded='false'>".$_SESSION['profile_name']."</a>
                           <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                    <li>
                        <a class='dropdown-item' href='/plexio/views/profile_manager.php'>Change Profile</a>
                    </li>
                    <li>
                        <hr class='dropdown-divider'>
                    </li>
                    <li>
                        <a class='dropdown-item' href='/plexio/controller/logout.php'>Logout</a>
                    </li>
                </ul>
                </li>";
                    }else{
                       echo "<a class='nav-link' href='/plexio/controller/logout.php'>Logout</a>";
                    }

                } ?>
            </ul>
        </div>
    </div>
</nav>
<div class="bodycontainer">