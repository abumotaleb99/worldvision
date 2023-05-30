<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>World Vision</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="assets/frontend/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/frontend/vendors/aos/dist/aos.css/aos.css"
    />
    <link
      rel="stylesheet"
      href="assets/frontend/vendors/owl.carousel/dist/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/frontend/vendors/owl.carousel/dist/assets/owl.theme.default.min.css"
    />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="assets/frontend/images/favicon.png" />
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/frontend/css/style.css" />
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <!-- Header -->
        <?php include 'includes/header.php'; ?>
        <!-- Header -->

        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- Main Content -->
        <?php
          if(isset($pages)) {
              if($pages == 'shop') {
                  include 'pages/shop-content.php';
              }

          }else {
              include 'pages/home_content.php';
          }
        ?>
        <!-- Main Content -->

        <!-- partial:partials/_footer.html -->
        <!-- Footer  -->
        <?php include 'includes/footer.php'; ?>
        <!-- Footer  -->
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
