<?php

include "connections.php";

class User {
    public $membership = "";
    public $email = "";

    public function __construct() {

    }

    public function create(){

    }

    public function retrieve($email) {
        $connection = new Connection();
        $link = $connection->getLink();

        $query = $link->query("SELECT * FROM users WHERE email = '$email'");

        $result = $query->fetch_assoc();

        return $result;
    }

    public function update($nombre) {


    }
}




