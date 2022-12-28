<?php
namespace App\classes;

use App\classes\Database;

class Category {
    public function addCategoryInfo($data) {
        $sql = "INSERT INTO categories (name, description, status) VALUES ('$data[name]', '$data[description]', '$data[status]')";

        if(mysqli_query(Database::dbConnection(), $sql)) {
            $message = "Category info saved successfully.";
            return $message;

        }else {
            die("Query problem. ".mysqli_error(Database::dbConnection()));
        }

    }

    public function getAllCategoryInfo() {
        $sql = "SELECT * FROM categories";

        if(mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;

        }else {
            die("Query problem. ".mysqli_error(Database::dbConnection()));
        }

    }

    public function getCategoryInfoById($id) {
        $sql = "SELECT * FROM categories WHERE id = $id";

        if(mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;

        }else {
            die("Query problem. ".mysqli_error(Database::dbConnection()));
        }

    }

    public function getAllPublishedCategoryInfo() {
        $sql = "SELECT * FROM categories WHERE status = 1";

        if(mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;

        }else {
            die("Query problem. ".mysqli_error(Database::dbConnection()));
        }

    }

    public function updateCategoryInfo($data) {
        $sql = "UPDATE categories SET name = '$data[name]', description = '$data[description]', status = '$data[status]' WHERE id = '$data[id]' ";

        if(mysqli_query(Database::dbConnection(), $sql)) {
            $message = "Category info updated successfully.";
            return $message;

        }else {
            die("Query problem. ".mysqli_error(Database::dbConnection()));
        }

    }

    public function deleteCategoryInfoById($id) {
        $sql = "DELETE FROM categories WHERE id = $id";

        if(mysqli_query(Database::dbConnection(), $sql)) {
            $message = "Category info deleted successfully.";
            return $message;

        }else {
            die("Query problem. ".mysqli_error(Database::dbConnection()));
        }

    }


}