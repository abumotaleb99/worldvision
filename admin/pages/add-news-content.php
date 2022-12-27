<div class="container-fluid py-2">
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain">
                <div class="card-header pb-0 text-left bg-transparent">
                   <h4 class="font-weight-bolder text-info text-gradient">Add News</h4>
                   <p class="mb-0" style="color:red;"><?php //echo "Message"; ?></p>
                </div>
                <div class="card-body">
                  <form role="form" action="" method="POST">
                    <label>Category Name</label>
                    <div class="mb-2">
                      <select name="category_name" class="form-control">
                        <option>Select category name...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                      </select>
                    </div>
                    <label>News Title</label>
                    <div class="mb-2">
                      <input type="text" name="news_title" class="form-control" placeholder="News title" aria-label="Email" aria-describedby="email-addon" required>
                    </div>
                    <label>News Short Description</label>
                    <div class="mb-2">
                      <textarea name="news_short_description" class="form-control" id="" cols="30" rows="2" placeholder="News short description" required></textarea>
                    </div>
                    <label>News Long Description</label>
                    <div class="mb-2">
                      <textarea name="news_long_description" class="form-control" id="" cols="30" rows="5" placeholder="News long description" required></textarea>
                    </div>
                    <label>News Image</label>
                    <div class="mb-2">
                      <input type="file" name="news_img" class="form-control" aria-label="Email" aria-describedby="email-addon" required>
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