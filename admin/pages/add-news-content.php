<?php
if($_SESSION['id'] == null) {
  header('Location: index.php');
}

require_once "../vendor/autoload.php";

$category = new App\classes\Category();
$news = new App\classes\News();

$queryResult = $category->getAllPublishedCategoryInfo();

$message = "";
if(isset($_POST['btn'])) {
  $message = $news->addNewsInfo($_POST);

}

?>


<div class="container-fluid py-2">
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain">
                <div class="card-header pb-0 text-left bg-transparent">
                   <h4 class="font-weight-bolder text-info text-gradient">Add News</h4>
                   <p class="mb-0" style="color: green;"><?php echo $message; ?></p>
                </div>
                <div class="card-body">
                  <form role="form" action="" method="POST" enctype="multipart/form-data">
                    <label>Category Name</label>
                    <div class="mb-2">
                      <select name="category_id" class="form-control">
                        <option>Select category name...</option>
                        <?php while($category = mysqli_fetch_assoc($queryResult)) { ?>
                          <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                        <?php } ?>

                      </select>
                    </div>
                    <label>News Title</label>
                    <div class="mb-2">
                      <input type="text" name="title" class="form-control" placeholder="News title" required>
                    </div>
                    <label>News Description</label>
                    <div class="mb-2">
                      <textarea name="description" class="textarea form-control" id="" cols="30" rows="5" placeholder="News description" required></textarea>
                    </div>
                    <label>News Image</label>
                    <div class="mb-2">
                      <input type="file" name="image" class="form-control" required>
                    </div>
                    <label>Publication Status</label>
                    <div class="mb-2">
                        <input type="radio" name="status" value="1" checked> Published
                        <input type="radio" name="status" value="0"> Unublished
                    </div>
                    <div class="text-center">
                      <input type="submit" name="btn" class="btn bg-gradient-info w-100 mt-1 mb-0" value="Add News">
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>