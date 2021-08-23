<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- BOOTSTRAP CDN-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- OWL CAROUSEL CDN-->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- FONT AWESOME -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Custom CSS File -->
    <link rel="stylesheet" href="style.css" />

    <?php
      // require functions.php bağlantısı
      require('./functions.php');
    ?>
    <style>
      .GFG {
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <!-- HEADER START -->
    <header id="header">
      <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-12 text-black-50 m-0">
          Berkay Buyukkoru, 2021
        </p>
        <div class="font-rale font-size-14">
          <a href="#" class="px-3 border-right border-left text-dark"
            >Giriş Yap</a
          >
          <a href="#" class="px-3 border-right text-dark">İstek Listesi (0)</a>
        </div>
      </div>

      <!-- Primary Navigation-->
      <nav class="navbar navbar-expand-lg navbar-dark color-secondary-bg">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Eticaretim.com</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-auto font-rubik">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"
                  >Ana Sayfa</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">İndirim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"
                  >Ürünler <i class="fas fa-chevron-down"></i
                ></a>
              </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
              <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                <span class="font-size-16 px-2 text-white"
                  ><i class="fas fa-shopping-cart"></i
                ></span>
                <span class="px-3 py-2 rounded-pill text-dark bg-light GFG"
                  ><?php echo count($product->getData('cart')) ?></span
                >
              </a>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- HEADER END -->

    <!-- MAIN START -->
    <main id="main-site">