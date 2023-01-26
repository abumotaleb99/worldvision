<?php
require_once "../vendor/autoload.php";

$news = new App\classes\News();

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $queryResult = $news->getNewsInfoById($id);
    $newsInfo = mysqli_fetch_assoc($queryResult);

}

?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <table class="table-bordered table-responsive" style="width: 100%;">
                <tr>
                    <th scope="col"><h5>Title</h5></th>
                    <td><h6><?php echo $newsInfo['title']; ?></h6></td>
                </tr>
                <tr>
                    <th scope="col"><h5>Category Name</h5></th>
                    <td><h6><?php echo $newsInfo['name']; ?></h6></td>
                </tr>
                <tr>
                    <th scope="col"><h5>Image</h5></th>
                    <td><img src="<?php echo $newsInfo['image']; ?>" alt="News Image" width="400"></td>
                </tr>
                <tr>
                    <th scope="col"><h5>Description</h5></th>
                    <td>
                        <p><?php echo $newsInfo['description']; ?></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>