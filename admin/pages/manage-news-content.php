<?php
require_once "../vendor/autoload.php";

$news = new App\classes\News();

$queryResult = $news->getAllNewsInfo();

$message = "";
if(isset($_GET['id'])) {
  $id = $_GET['id'];

  $message = $news->deleteNewsInfoById($id);

}

?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Category table</h6>
            </div>
            <h6 style="text-align: center; font-size: 14px; color: green;"><?php echo $message; ?></h6>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SI</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $id = 1; while($newsInfo = mysqli_fetch_assoc($queryResult)) { ?>
                    <tr>
                      <td>
                        <div class="px-3 py-0">
                            <p class="text-xs font-weight-bold mb-0"><?php echo $id; ?></p>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $newsInfo['title']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $newsInfo['name']; ?></p>
                      </td>
                      <td>
                        <?php if($newsInfo['status'] == 1) { ?>
                          <span class="badge badge-sm bg-gradient-success">Published</span>
                        <?php }else { ?>
                          <span class="badge badge-sm bg-gradient-secondary">Unublished</span>
                        <?php } ?>
                      </td>
                      <td class="align-middle">
                        <a href="view-news.php?id=<?php echo $newsInfo['id']; ?>" class="text-secondary font-weight-bold text-xs">
                          View
                        </a>|
                        <a href="edit-news.php?id=<?php echo $newsInfo['id']; ?>" class="text-secondary font-weight-bold text-xs">
                          Edit
                        </a>|
                        <a href="?delete=true&id=<?php echo $newsInfo['id']; ?>" class="text-secondary font-weight-bold text-xs" onclick="return confirm('Delete this news?');">
                          Delete
                        </a>
                      </td>
                    </tr>
                    <?php $id++; } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>