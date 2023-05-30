<?php 
  require_once 'vendor/autoload.php';

  $application = new App\Classes\Application();

  $queryResult = $application->getEightPublishedNewsInfo();

?>

<div class="container">
  <div class="row" style="margin-top: 60px">
    <div class="col-lg-9">
      <div class="owl-carousel owl-theme" id="main-banner-carousel">
        <div class="item">
          <div class="carousel-content-wrapper mb-2">
            <div class="carousel-content">
              <h1 class="font-weight-bold">
                If you wanted to get rich, how would you do it?
              </h1>
              <h5 class="font-weight-normal m-0">
                Lorem Ipsum has been the industry's standard
              </h5>
              <p class="text-color m-0 pt-2 d-flex align-items-center">
                <span class="fs-10 mr-1">2 hours ago</span>
                <i class="mdi mdi-bookmark-outline mr-3"></i>
                <span class="fs-10 mr-1">126</span>
                <i class="mdi mdi-comment-outline"></i>
              </p>
            </div>
            <div class="carousel-image">
              <img src="assets/frontend/images/dashboard/banner.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="item">
          <div class="carousel-content-wrapper mb-2">
            <div class="carousel-content">
              <h1 class="font-weight-bold">
                If you wanted to get rich, how would you do it?
              </h1>
              <h5 class="font-weight-normal m-0">
                Lorem Ipsum has been the industry's standard
              </h5>
              <p class="text-color m-0 pt-2 d-flex align-items-center">
                <span class="fs-10 mr-1">2 hours ago</span>
                <i class="mdi mdi-bookmark-outline mr-3"></i>
                <span class="fs-10 mr-1">126</span>
                <i class="mdi mdi-comment-outline"></i>
              </p>
            </div>
            <div class="carousel-image">
              <img src="assets/frontend/images/dashboard/banner_1.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="item">
          <div class="carousel-content-wrapper mb-2">
            <div class="carousel-content">
              <h1 class="font-weight-bold">
                If you wanted to get rich, how would you do it?
              </h1>
              <h5 class="font-weight-normal m-0">
                Lorem Ipsum has been the industry's standard
              </h5>
              <p class="text-color m-0 pt-2 d-flex align-items-center">
                <span class="fs-10 mr-1">2 hours ago</span>
                <i class="mdi mdi-bookmark-outline mr-3"></i>
                <span class="fs-10 mr-1">126</span>
                <i class="mdi mdi-comment-outline"></i>
              </p>
            </div>
            <div class="carousel-image">
              <img src="assets/frontend/images/dashboard/banner_2.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="item">
          <div class="carousel-content-wrapper mb-2">
            <div class="carousel-content">
              <h1 class="font-weight-bold">
                If you wanted to get rich, how would you do it?
              </h1>
              <h5 class="font-weight-normal m-0">
                Lorem Ipsum has been the industry's standard
              </h5>
              <p class="text-color m-0 pt-2 d-flex align-items-center">
                <span class="fs-10 mr-1">2 hours ago</span>
                <i class="mdi mdi-bookmark-outline mr-3"></i>
                <span class="fs-10 mr-1">126</span>
                <i class="mdi mdi-comment-outline"></i>
              </p>
            </div>
            <div class="carousel-image">
              <img src="assets/frontend/images/dashboard/banner_3.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="row">
        <div class="col-sm-12">
          <div class="d-flex position-relative float-left">
            <h3 class="section-title">Latest News</h3>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="border-bottom pb-2">
            <h5 class="font-weight-600 mt-0 mb-0">
              South Korea’s Moon Jae-in sworn in vowing address
            </h5>
            <p class="text-color m-0 d-flex align-items-center">
              <span class="fs-10 mr-1">2 hours ago</span>
              <i class="mdi mdi-bookmark-outline mr-3"></i>
              <span class="fs-10 mr-1">126</span>
              <i class="mdi mdi-comment-outline"></i>
            </p>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="border-bottom pt-2 pb-2">
            <h5 class="font-weight-600 mt-0 mb-0">
              South Korea’s Moon Jae-in sworn in vowing address
            </h5>
            <p class="text-color m-0 d-flex align-items-center">
              <span class="fs-10 mr-1">2 hours ago</span>
              <i class="mdi mdi-bookmark-outline mr-3"></i>
              <span class="fs-10 mr-1">126</span>
              <i class="mdi mdi-comment-outline"></i>
            </p>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="border-bottom pt-3 pb-2">
            <h5 class="font-weight-600 mt-0 mb-0">
              South Korea’s Moon Jae-in sworn in vowing address
            </h5>
            <p class="text-color m-0 d-flex align-items-center">
              <span class="fs-10 mr-1">2 hours ago</span>
              <i class="mdi mdi-bookmark-outline mr-3"></i>
              <span class="fs-10 mr-1">126</span>
              <i class="mdi mdi-comment-outline"></i>
            </p>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="pt-3">
            <h5 class="font-weight-600 mt-0 mb-0">
              South Korea’s Moon Jae-in sworn in vowing address
            </h5>
            <p class="text-color m-0 d-flex align-items-center">
              <span class="fs-10 mr-1">2 hours ago</span>
              <i class="mdi mdi-bookmark-outline mr-3"></i>
              <span class="fs-10 mr-1">126</span>
              <i class="mdi mdi-comment-outline"></i>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="world-news">
      <div class="row">
        <div class="col-sm-12">
          <div class="d-flex position-relative float-left">
            <h3 class="section-title">World News</h3>
          </div>
        </div>
      </div>
      <div class="row">
      <?php while($newsInfo = mysqli_fetch_assoc($queryResult)) { ?>
        <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
          <div>
            <div class="position-relative image-hover">
              <img
                src="admin/<?php echo $newsInfo['image']; ?>"
                class="img-fluid"
                alt="world-news"
              />
              <span class="thumb-title text-uppercase"><?php echo $newsInfo["name"] ?></span>
            </div>
            <h5 class="font-weight-bold mt-3">
              <?php echo $newsInfo['title']; ?>
            </h5>
            <p class="fs-15 font-weight-normal">
              <?php 
                $str = strip_tags(html_entity_decode($newsInfo['description']));
                $lim = 100;
                if (mb_strlen($str,'UTF-8')>$lim)
                {
                  $str = mb_substr($str, 0, $lim-3, 'UTF-8').'...';
                }
                echo $str;
              ?>    
            </p>
          </div>
          <a href="#" class="font-weight-bold text-dark pt-2">Read More</a>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="editors-news">
      <div class="row">
        <div class="col-lg-3">
          <div class="d-flex position-relative float-left">
            <h3 class="section-title">Popular News</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 mb-5 mb-sm-2">
          <div class="position-relative image-hover">
            <img
              src="assets/frontend/images/dashboard/glob.jpg"
              class="img-fluid"
              alt="world-news"
            />
            <span class="thumb-title">NEWS</span>
          </div>
          <h1 class="font-weight-600 mt-3">
            Melania Trump speaks about courage at State Department
          </h1>
          <p class="fs-15 font-weight-normal">
            Lorem Ipsum has been the industry's standard dummy text ever since
            the 1500s, when an unknown printer took a galley of type and
          </p>
        </div>
        <div class="col-lg-6 mb-5 mb-sm-2">
          <div class="row">
            <div class="col-sm-6 mb-5 mb-sm-2">
              <div class="position-relative image-hover">
                <img
                  src="assets/frontend/images/dashboard/star-magazine-5.jpg"
                  class="img-fluid"
                  alt="world-news"
                />
                <span class="thumb-title">POLITICS</span>
              </div>
              <h5 class="font-weight-600 mt-3">
                A look at California's eerie plane graveyards
              </h5>
              <p class="fs-15 font-weight-normal">
                Lorem Ipsum has been the industry's standard dummy text
              </p>
            </div>
            <div class="col-sm-6 mb-5 mb-sm-2">
              <div class="position-relative image-hover">
                <img
                  src="assets/frontend/images/dashboard/star-magazine-6.jpg"
                  class="img-fluid"
                  alt="world-news"
                />
                <span class="thumb-title">TRAVEL</span>
              </div>
              <h5 class="font-weight-600 mt-3">
                The world's most beautiful racecourses
              </h5>
              <p class="fs-15 font-weight-normal">
                Lorem Ipsum has been the industry's standard dummy text
              </p>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-6 mb-5 mb-sm-2">
              <div class="position-relative image-hover">
                <img
                  src="assets/frontend/images/dashboard/star-magazine-7.jpg"
                  class="img-fluid"
                  alt="world-news"
                />
                <span class="thumb-title">POLITICS</span>
              </div>
              <h5 class="font-weight-600 mt-3">
                Japan cancels cherry blossom festivals over virus fears
              </h5>
              <p class="fs-15 font-weight-normal">
                Lorem Ipsum has been the industry's standard dummy text
              </p>
            </div>
            <div class="col-sm-6">
              <div class="position-relative image-hover">
                <img
                  src="assets/frontend/images/dashboard/star-magazine-8.jpg"
                  class="img-fluid"
                  alt="world-news"
                />
                <span class="thumb-title">TRAVEL</span>
              </div>
              <h5 class="font-weight-600 mt-3">
                Classic cars reborn as electric vehicles
              </h5>
              <p class="fs-15 font-weight-normal">
                Lorem Ipsum has been the industry's standard dummy text
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
