<?php
namespace App\classes;

use App\classes\Database;

class News {
    public function addNewsInfo($data) {
        $fileName = $_FILES['image']['name'];
        $directory = "../assets/admin/news_images/";
        $imgUrl = $directory.$fileName;
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        if($fileType != "jpg" && $fileType != "jpeg" && $fileType != "png") {
            $message = "Sorry, this file type is not supported. You can only upload jpg, jpeg, png, files.";
            return $message;

        }else {
            if(file_exists($imgUrl)) {
                $message = "This image already exist. Please choose another image!";
                return $message;

            }else {
                if($_FILES['image']['size'] > 5000000) {
                    $message = "File size exceeds the allowable limit of (5MB)";
                    return $message;

                }else {
                    move_uploaded_file($_FILES['image']['tmp_name'], $imgUrl);
    
                    $sql = "INSERT INTO news (category_id, title, description, image, status) VALUES ('$data[category_id]', '$data[title]', '$data[description]', '$imgUrl', '$data[status]')";
                    
                    if(mysqli_query(Database::dbConnection(), $sql)) {
                        $message = "News info saved successfully.";
                        return $message;
            
                    }else {
                        die("Query problem. ".mysqli_error(Database::dbConnection()));
                    }
                }
            }

        }

    }

    public function getAllNewsInfo() {
        $sql = "SELECT n.*, c.name FROM news as n, categories as c WHERE n.category_id = c.id ";

        if(mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;

        }else {
            die("Query problem. ".mysqli_error(Database::dbConnection()));
        }

    }

    public function getNewsInfoById($id) {
        $sql = "SELECT n.*, c.name FROM news as n, categories as c WHERE n.category_id = c.id AND n.id = '$id' ";

        if(mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;

        }else {
            die("Query problem. ".mysqli_error(Database::dbConnection()));
        }

    }

    public function updateNewsInfo($data) {
        $fileName = $_FILES['image']['name'];

        if($fileName) {
            $fileName = $_FILES['image']['name'];
            $directory = "../assets/admin/news_images/";
            $imgUrl = $directory.$fileName;
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    
            if($fileType != "jpg" && $fileType != "jpeg" && $fileType != "png") {
                $message = "Sorry, this file type is not supported. You can only upload jpg, jpeg, png, files.";
                return $message;
    
            }else {
                if(file_exists($imgUrl)) {
                    $message = "This image already exist. Please choose another image!";
                    return $message;
    
                }else {
                    if($_FILES['image']['size'] > 5000000) {
                        $message = "File size exceeds the allowable limit of (5MB)";
                        return $message;
    
                    }else {
                        move_uploaded_file($_FILES['image']['tmp_name'], $imgUrl);

                        $sql = "SELECT * FROM news WHERE id = '$data[id]' ";
                        $queryResult = mysqli_query(Database::dbConnection(), $sql);
                        $newsInfo = mysqli_fetch_assoc($queryResult);
                        
                        unlink($newsInfo['image']);

                        $sql = "UPDATE news SET category_id = '$data[category_id]', title = '$data[title]', description = '$data[description]', image = '$imgUrl', status = '$data[status]' WHERE id = '$data[id]' ";
        
                        if(mysqli_query(Database::dbConnection(), $sql)) {
                            $message = "News info updated successfully.";
                            return $message;
                
                        }else {
                            die("Query problem. ".mysqli_error(Database::dbConnection()));
                        }
                    }
                }
    
            }
            
        }else {
            $sql = "UPDATE news SET category_id = '$data[category_id]', title = '$data[title]', description = '$data[description]', status = '$data[status]' WHERE id = '$data[id]' ";
            if(mysqli_query(Database::dbConnection(), $sql)) {
                $message = "News info updated successfully.";
                
                header ('Location: manage-news.php');
            
            }else {
                die("Query problem. ".mysqli_error(Database::dbConnection()));
            }
        }

    }

    public function deleteNewsInfoById($id) {
        $sql = "SELECT * FROM news WHERE id = '$id' ";
        $queryResult = mysqli_query(Database::dbConnection(), $sql);
        $newsInfo = mysqli_fetch_assoc($queryResult);
        
        unlink($newsInfo['image']);

        $sql2 = "DELETE FROM news WHERE id = '$id' ";

        if(mysqli_query(Database::dbConnection(), $sql2)) {
            $message = "News info deleted successfully.";
            return $message;
            
        }else {
            die("Query problem. ".mysqli_error(Database::dbConnection()));
        }

    }



}