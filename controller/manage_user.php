<?php
// Retrieve the session and connect to the database
session_start();
require "../db/connections.php";
//If the url brings an 'sub' parameter, either add or remove a subscription of the user whose ID is being held in the session
if (isset($_GET['sub'])) {
    if ($_GET['sub'] == '1') {
        $query = "UPDATE users SET is_member='1' WHERE userid=" . $_SESSION['userid'];
    } elseif ($_GET['sub'] == '0') {
        $query = "UPDATE users SET is_member='0' WHERE userid=" . $_SESSION['userid'];
    }
    //If the petition is a post instead, if the passwords don´t match, redirect to admin or account view with an error message.
} else {
    if ($_POST['password'] != $_POST['password2']) {
        if ($_SESSION['is_admin'] == 1) {
            if ($_POST['userid'] != "") {
                header('Location: /plexio/views/admin_panel_user_view.php?id=' . $_POST['userid'] . '&error=1');
            } else {
                header('Location: /plexio/views/admin_panel_user_view.php?error=1');
            }
        } else {
            header('Location: /plexio/views/register.php?error=1');
        }
    } else {
        //If they match, trim the results
        $email = stripslashes($_POST['email']);
        $email = mysqli_real_escape_string($con, $email);

        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $password2 = stripslashes($_POST['password2']);
        $password2 = mysqli_real_escape_string($con, $password2);

        $name = stripslashes($_POST['name']);
        $name = mysqli_real_escape_string($con, $name);

        $surname = stripslashes($_POST['surname']);
        $surname = mysqli_real_escape_string($con, $surname);

        $dob = $_POST['dob'];

        $address = stripslashes($_POST['address']);
        $address = mysqli_real_escape_string($con, $address);

        $card_num = stripslashes($_POST['card_num']);
        $card_num = mysqli_real_escape_string($con, $card_num);

        $expd = stripslashes($_POST['exp_date']);
        $expd = mysqli_real_escape_string($con, $expd);

        $cvv = stripslashes($_POST['cvv']);
        $cvv = mysqli_real_escape_string($con, $cvv);

        $mysqltime = date('Y-m-d H:i:s');
//Set up the query. If the ID parameter is empty, the item does not exist and needs to be created.
// Otherwise, it exists and needs to be updated
        if ($_POST['userid'] == '') {
            $query = "INSERT into users (email,password,name,surname,dob,address,card_num,exp_date,cvv,reg_date) VALUES ('$email', '" . md5($password) . "','$name','$surname','$dob','$address','$card_num','$expd','$cvv','$mysqltime')";
        } else {
            if ($_POST['password'] == '') {
                $query = "UPDATE users SET email='" . $_POST['email'] . "',name='" . $_POST['name'] . "',
    surname='" . $_POST['surname'] . "',dob='" . $_POST['dob'] . "',
    address='" . $_POST['address'] . "',card_num='" . $_POST['card_num'] . "',exp_date='" . $_POST['exp_date'] . "',cvv='" . $_POST['cvv'] . "'
    WHERE userid='" . $_POST['userid'] . "'";
            } else {
                $query = "UPDATE users SET email='" . $_POST['email'] . "',password='" . md5($_POST['password']) . "'
    ,name='" . $_POST['name'] . "',surname='" . $_POST['surname'] . "',dob='" . $_POST['dob'] . "',
    address='" . $_POST['address'] . "',card_num='" . $_POST['card_num'] . "',exp_date='" . $_POST['exp_date'] . "',cvv='" . $_POST['cvv'] . "'
    WHERE userid='" . $_POST['userid'] . "'";
            }
        }
    }
}


$result = mysqli_query($con, $query);
//If the query fails, return a dump with the error code.
if (!$result) {
    var_dump($con->error);
}
//If there is an ID set on the session, redirect either to the user or admin account view,
// Otherwise redirect to index/login page
if (isset($_SESSION['userid'])) {
    if ($_SESSION['is_admin'] == 1) {
        header('Location: /plexio/views/admin_panel.php');
    } else {
        header('Location: /plexio/views/account.php');
    }
} else {
    header('Location: /plexio/views/login.php?register=1');
}



