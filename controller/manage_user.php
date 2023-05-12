<?php
session_start();
require "../db/connections.php";
if (isset($_GET['sub'])) {
    if ($_GET['sub'] == '1') {
        $query = "UPDATE users SET is_member='1' WHERE userid=" . $_SESSION['userid'];
    } elseif ($_GET['sub'] == '0') {
        $query = "UPDATE users SET is_member='0' WHERE userid=" . $_SESSION['userid'];
    }
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

if (!$result) {
    var_dump($con->error);
}
if (isset($_SESSION['userid'])) {
    if ($_SESSION['is_admin'] == 1) {
        header('Location: /plexio/views/admin_panel.php');
    } else {
        header('Location: /plexio/views/account.php');
    }
} else {
    header('Location: /plexio/views/login.php?register=1');
}



