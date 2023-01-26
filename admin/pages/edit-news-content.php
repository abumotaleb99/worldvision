<?php
require_once "../vendor/autoload.php";

$category = new App\classes\Category();
$news = new App\classes\News();

$queryResult = $category->getAllPublishedCategoryInfo();

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $queryResult2 = $news->getNewsInfoById($id);
    $newsInfo = mysqli_fetch_assoc($queryResult2);

}

$message = "";
if(isset($_POST['btn'])) {
    $message = $news->updateNewsInfo($_POST);
}

?>


<div class="container-fluid py-2">
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain">
                <div class="card-header pb-0 text-left bg-transparent">
                   <h4 class="font-weight-bolder text-info text-gradient">Edit News</h4>
                   <p class="mb-0" style="color: green;"><?php echo $message; ?></p>
                </div>
                <div class="card-body">
                  <form role="form" name="editNewsForm" action="" method="POST" enctype="multipart/form-data">
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
                      <input type="text" name="title" class="form-control" placeholder="News title" value="<?php echo $newsInfo['title']; ?>" required>
                      <input type="hidden" name="id" class="form-control" value="<?php echo $newsInfo['id']; ?>" required>
                    </div>
                    <label>News Description</label>
                    <div class="mb-2">
                      <textarea name="description" class="textarea form-control" id="" cols="30" rows="5" placeholder="News description" required> 
                        <?php echo $newsInfo['description']; ?>
                      </textarea>
                    </div>
                    <label>News Image</label>
                    <div class="mb-2">
                      <input type="file" name="image" class="form-control">
                      <img class="pt-2" src="<?php echo $newsInfo['image']; ?>" height="100" alt="">
                    </div>
                    <label>Publication Status</label>
                    <div class="mb-2">
                        <input type="radio" name="status" value="1" <?php echo ($newsInfo['status'] == 1) ? "checked" : "" ?> > Published
                        <input type="radio" name="status" value="0" <?php echo ($newsInfo['status'] == 0) ? "checked" : "" ?> > Unublished
                    </div>
                    <div class="text-center">
                      <input type="submit" name="btn" class="btn bg-gradient-info w-100 mt-1 mb-0" value="Update News">
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.forms["editNewsForm"].elements["category_id"].value = "<?php echo $newsInfo['category_id']; ?>";
</script>
