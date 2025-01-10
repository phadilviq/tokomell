<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tala Elfa</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="TemplatesJungle">
  <meta name="keywords" content="ecommerce,fashion,store">
  <meta name="description" content="Bootstrap 5 Fashion Store HTML CSS Template">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/custom.css">
</head>

<body class="homepage">

  <div class="preloader text-grey fs-6 text-uppercase overflow-hidden">Tala Elfa</div>

  <div class="search-popup">
    <div class="search-popup-container">

      <form role="search" method="get" class="form-group" action="">
        <input type="search" id="search-form" class="form-control border-0 border-bottom"
          placeholder="Type and press enter" value="" name="s" />
        <button type="submit" class="search-submit border-0 position-absolute bg-white"
          style="top: 15px;right: 15px;"><svg class="search" width="24" height="24">
            <use xlink:href="#search"></use>
          </svg></button>
      </form>

      <h5 class="cat-list-title">Browse Categories</h5>

      <ul class="cat-list">
        <li class="cat-list-item">
          <a href="#" title="Jackets">Jackets</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="T-shirts">T-shirts</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Handbags">Handbags</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Accessories">Accessories</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Cosmetics">Cosmetics</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Dresses">Dresses</a>
        </li>
        <li class="cat-list-item">
          <a href="#" title="Jumpsuits">Jumpsuits</a>
        </li>
      </ul>

    </div>
  </div>
  <?php include 'component/svg.php' ?>

  <?php include 'component/nav_canvas_cart.php' ?>
  <?php include 'component/navbar.php' ?>
  <?php
  // Set halaman default jika tidak ada parameter 'page'
  $defaultPage = 'home';

  // Periksa parameter 'page' dan include file yang sesuai
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $filePath = 'page/' . $page . '.php'; // Buat path lengkap ke file
    if (file_exists($filePath)) {
      include $filePath;
    } else {
      include 'page/' . $defaultPage . '.php';
    }
  } else {
    include 'page/' . $defaultPage . '.php';
  }
  ?>
  <?php include 'component/footer.php' ?>


  <script src="js/jquery.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/SmoothScroll.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="js/script.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>