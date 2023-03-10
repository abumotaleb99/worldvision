<?php
// session_start();

if($_SESSION['id'] == null) {
  header('Location: index.php');
}

require_once "../vendor/autoload.php";

$category = new App\classes\Category();

$message = "";
if(isset($_POST['btn'])) {
  $message = $category->addCategoryInfo($_POST);

}

?>

<div class="container-fluid py-2">
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain">
                <div class="card-header pb-0 text-left bg-transparent">
                   <h4 class="font-weight-bolder text-info text-gradient">Add Category</h4>
                   <p class="mb-0" style="color: green;"><?php echo $message; ?></p>
                </div>
                <div class="card-body">
                  <form role="form" action="" method="POST">
                    <label>Category Name</label>
                    <div class="mb-3">
                      <input type="text" name="name" class="form-control" placeholder="Category name" required>
                    </div>
                    <label>Category Description</label>
                    <div class="mb-3">
                      <textarea name="description" class="form-control" id="" cols="30" rows="5" placeholder="Category Description" required></textarea>
                    </div>
                    <label>Publication Status</label>
                    <div class="mb-3">
                        <input type="radio" name="status" value="1" checked> Published
                        <input type="radio" name="status" value="0"> Unublished
                    </div>
                    <div class="text-center">
                      <input type="submit" name="btn" class="btn bg-gradient-info w-100 mt-4 mb-0" value="Add Category">
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>