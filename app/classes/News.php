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


}