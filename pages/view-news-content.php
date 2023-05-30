<?php
require_once "./vendor/autoload.php";

$news = new App\classes\News();

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $queryResult = $news->getNewsInfoById($id);
    $newsInfo = mysqli_fetch_assoc($queryResult);

}

?>

<div class="row">
  <div class="col-sm-12">
    <div class="news-post-wrapper">
      <div class="news-post-wrapper-sm">
        <h1 class="text-center"><?php echo $newsInfo["title"]; ?></h1>
        <p class="fs-15 d-flex justify-content-center align-items-center mb-4">
        <?php 
            $time = strtotime($newsInfo['date']);
            $myFormatForView = date("m/d/y g:i A", $time);
            echo $myFormatForView
        ?>
        </p>
      </div>
     <div class="d-flex justify-content-center">
     <img
        src="admin/<?php echo $newsInfo["image"]; ?>"
        alt="news"
        class="img-fluid mb-4"
      />
     </div>
      <div class="">
        <p>
        <?php echo $newsInfo["description"]; ?>
        </p>
      </div>
    </div>
  </div>
</div>
