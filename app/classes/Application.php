<?php
namespace App\Classes;

use App\Classes\Database;

class Application
{
    public function getEightPublishedNewsInfo() {
        $sql = "SELECT n.*, c.name FROM news as n, categories as c WHERE n.category_id = c.id ORDER BY id DESC LIMIT 8";
        
        if(mysqli_query(Database::dbConnection(), $sql)) {              
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;

        }else {
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function getLatestNewsInfo() {
        $sql = "SELECT title, date FROM news ORDER BY id DESC LIMIT 4";

        if(mysqli_query(Database::dbConnection(), $sql)) {              
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;

        }else {
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }

}