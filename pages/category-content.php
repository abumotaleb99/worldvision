<?php
require_once 'vendor/autoload.php';

if(isset($_GET['id'])) {
    $category_id = $_GET['id'];
}

$application = new App\Classes\Application();

$queryResult = $application->getAllNewsInfoByCategoryId($category_id);

?>

<div class="container">
  <div class="row mb-4  my-5">
    <?php while($categoryNewsInfo = mysqli_fetch_assoc($queryResult)) { ?>
    <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
      <div class="position-relative image-hover">
        <img
          src="admin/<?php echo $categoryNewsInfo['image']; ?>"
          class="img-fluid"
          alt="world-news"
        />
        <span class="thumb-title">WORLD</span>
      </div>
        <a href="" class="text-secondary">
            <h5 class="font-weight-600 mt-0 mb-0">
              <?php echo $categoryNewsInfo['title']; ?>
            </h5>
        </a>
    </div>
    <?php } ?>
  </div>
</div>
