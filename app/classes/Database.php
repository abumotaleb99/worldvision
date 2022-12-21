<?php
namespace App\classes;

class Database {
    public static function dbConnection() {
        $hostName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "worldvision";

        $link = mysqli_connect($hostName, $userName, $password, $dbName);
        return $link;
    }


}