<?php
require_once 'vendor/autoload.php';

$category = new App\classes\Category;

$queryResult = $category->getAllPublishedCategoryInfo();

?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>World Vision</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="assets/frontend/vendors/mdi/css/materialdesignicons.min.css"/>
    <link rel="stylesheet" href="assets/frontend/vendors/aos/dist/aos.css/aos.css"/>
    <link rel="stylesheet" href="assets/frontend/vendors/owl.carousel/dist/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="assets/frontend/vendors/owl.carousel/dist/assets/owl.theme.default.min.css"/>
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="assets/frontend/images/favicon.png"/>
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/frontend/css/style.css">
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <header id="header">
          <div class="container">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                  <li>Wed, March 4, 2020</li>
                  <li>30°C,London</li>
                </ul>
                <div>
                  <a class="navbar-brand" href="#"
                    ><img src="assets/frontend/images/logo.svg" alt=""
                  /></a>
                </div>
                <div class="d-flex">
                  <ul class="navbar-right">
                    <li>
                      <a href="#">ENGLISH</a>
                    </li>
                    <li>
                      <a href="#">ESPAÑOL</a>
                    </li>
                  </ul>
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom-menu">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div
                  class="navbar-collapse justify-content-center collapse"
                  id="navbarSupportedContent"
                >
                  <ul
                    class="navbar-nav d-lg-flex justify-content-between align-items-center"
                  >
                    <li>
                      <button class="navbar-close">
                        <i class="mdi mdi-close"></i>
                      </button>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <?php while($categoryInfo = mysqli_fetch_assoc($queryResult)) { ?>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/world.html"><?php echo $categoryInfo['name']; ?></a>
                    </li>
                    <?php } ?>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

            <!-- partial -->
          </div>
        </header>
        <div class="container">
          <div class="row" style="margin-top: 60px;">
            <div class="col-lg-9">
              <div class="owl-carousel owl-theme" id="main-banner-carousel">
                <div class="item">
                  <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                      <h1 class="font-weight-bold">
                        If you wanted to get rich, how would you do it?
                      </h1>
                      <h5 class="font-weight-normal  m-0">
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
                      <h5 class="font-weight-normal  m-0">
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
                      <h5 class="font-weight-normal  m-0">
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
                      <h5 class="font-weight-normal  m-0">
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
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">World News</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img
                    src="assets/frontend/images/dashboard/travel.jpg"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">TRAVEL</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  Refugees flood Turkey's border with Greece
                </h5>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
                <a href="#" class="font-weight-bold text-dark pt-2"
                  >Read Article</a
                >
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img
                    src="assets/frontend/images/dashboard/news.jpg"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">NEWS</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  South Korea’s Moon Jae-in sworn in vowing address
                </h5>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
                <a href="#" class="font-weight-bold text-dark pt-2"
                  >Read Article</a
                >
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img
                    src="assets/frontend/images/dashboard/art.jpg"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">ART</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  These puppies are training to assist in avalanche rescue
                </h5>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
                <a href="#" class="font-weight-bold text-dark pt-2"
                  >Read Article</a
                >
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img
                    src="assets/frontend/images/dashboard/business.jpg"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">BUSINESS</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  'Love Is Blind' couple opens up about their first year
                </h5>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
                <a href="#" class="font-weight-bold text-dark pt-2"
                  >Read Article</a
                >
              </div>
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
              <div class="col-lg-6  mb-5 mb-sm-2">
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
                  Lorem Ipsum has been the industry's standard dummy text ever
                  since the 1500s, when an unknown printer took a galley of type
                  and
                </p>
              </div>
              <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="row">
                  <div class="col-sm-6  mb-5 mb-sm-2">
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
                  <div class="col-sm-6  mb-5 mb-sm-2">
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
                  <div class="col-sm-6  mb-5 mb-sm-2">
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
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="border-top"></div>
              </div>
              <div class="col-sm-3 col-lg-3">
                <ul class="footer-vertical-nav">
                  <li class="menu-title"><a href="pages/news-post.html">News</a></li>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="pages/world.html">World</a></li>
                  <li><a href="pages/author.html">Magazine</a></li>
                  <li><a href="pages/business.html">Business</a></li>
                  <li><a href="pages/politics.html">Politics</a></li>
                </ul>
              </div>
              <div class="col-sm-3 col-lg-3">
                <ul class="footer-vertical-nav">
                  <li class="menu-title"><a href="pages/world.html">World</a></li>
                  <li><a href="pages/sports.html">Sports</a></li>
                  <li><a href="pages/art.html">Art</a></li>
                  <li><a href="#">Magazine</a></li>
                  <li><a href="pages/real-estate.html">Real estate</a></li>
                  <li><a href="pages/travel.html">Travel</a></li>
                  <li><a href="pages/author.html">Author</a></li>
                </ul>
              </div>
              <div class="col-sm-3 col-lg-3">
                <ul class="footer-vertical-nav">
                  <li class="menu-title"><a href="#">Features</a></li>
                  <li><a href="#">Photography</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="pages/news-post.html">Newsletters</a></li>
                  <li><a href="#">Live Events</a></li>
                  <li><a href="#">Stores</a></li>
                  <li><a href="#">Jobs</a></li>
                </ul>
              </div>
              <div class="col-sm-3 col-lg-3">
                <ul class="footer-vertical-nav">
                  <li class="menu-title"><a href="#">More</a></li>
                  <li><a href="#">RSS</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">User Agreement</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="pages/aboutus.html">About us</a></li>
                  <li><a href="pages/contactus.html">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between">
                  <img src="assets/frontend/images/logo.svg" class="footer-logo" alt="" />

                  <div class="d-flex justify-content-end footer-social">
                    <h5 class="m-0 font-weight-600 mr-3 d-none d-lg-flex">Follow on</h5>
                    <ul class="social-media">
                      <li>
                        <a href="#">
                          <i class="mdi mdi-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-youtube"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-linkedin"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-twitter"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div
                  class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom"
                >
                  <ul class="footer-horizontal-menu">
                    <li><a href="#">Terms of Use.</a></li>
                    <li><a href="#">Privacy Policy.</a></li>
                    <li><a href="#">Accessibility & CC.</a></li>
                    <li><a href="#">AdChoices.</a></li>
                    <li><a href="#">Advertise with us Transcripts.</a></li>
                    <li><a href="#">License.</a></li>
                    <li><a href="#">Sitemap</a></li>
                  </ul>
                  <p class="font-weight-medium">
                    © 2020 <a href="https://www.bootstrapdash.com/" target="_blank" class="text-dark">@ BootstrapDash</a>, Inc.All Rights Reserved.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="assets/frontend/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="assets/frontend/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="assets/frontend/js/demo.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
