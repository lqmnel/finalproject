<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Final Project | Luqman Elhakim Ibnu Hasan</title>
    <style>
      body {
        font-family: roboto, "sans-serif";
      }
      .navbar {
        font-family: Garamond;
      }
      #content {
        background-color: #639fab;
        padding-top: 5rem;
        padding-bottom: 1rem;
        font-size: 20px;
        text-align: justify;
      }
      #footer {
        background-color: #22428d;
        padding-top: 1rem;
        color: white;
        font-family: Garamond;
        font-size: 20px;
      }
    </style>
  </head>
  <body id="home">

    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #22428d">
      <div class="container">
        <a class="navbar-brand" href="/finalproject/">
          <img src="../image/logo-dark-new.png" alt="Logo" width="100" class="d-inline-block align-text-top" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="me-auto"></div>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/finalproject/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/finalproject/catalog_laptop/">Catalog about Laptop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/xampp/htdocs/finalproject/admin/">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

      <?php
          include "../connection.php";
          $query = mysqli_query($conn, 'SELECT * FROM catalogs WHERE id = 1');
          while ($data = mysqli_fetch_array($query)) {
      ?>

      <?php
        $date = date_create($data['date']);
      ?>
    <!-- Awal Content -->
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-8">
            <h1>
              <strong><?php echo $data['judul_catalog']; ?></strong>
            </h1>
            <span style="font-size: 20px"
              ><?php echo date_format($date, "d M Y"); ?><br />
              by: <?php echo $data['authors']; ?></span
            >
            <br /><br />
            <img src="https://d1n6dbtoa2690v.cloudfront.net/article/619f1f5ab42c2ecdfdabf567/619f1f5ab42c2ecdfdabf567_1637827721.webp" alt="" style="width: 700px" />
            <br /><br />
            <p>
              <?php echo $data['konten_catalog']; ?>
            </p>
            <img src="https://d1n6dbtoa2690v.cloudfront.net/article/619f1f5ab42c2ecdfdabf567/619f1f5ab42c2ecdfdabf567_1637827997.webp" alt="" style="width: 400px" />
            <br /><br />
            <p>
              <?php echo $data['konten2'];   ?>
            </p>
            <img src="https://d1n6dbtoa2690v.cloudfront.net/article/619f1f5ab42c2ecdfdabf567/619f1f5ab42c2ecdfdabf567_1637828160.webp" alt="" style="width: 400px" />
            <br /><br />
            <p>
              <?php echo $data['konten3']; ?>
            </p>
            <img src="https://d1n6dbtoa2690v.cloudfront.net/article/619f1f5ab42c2ecdfdabf567/619f1f5ab42c2ecdfdabf567_1637828311.webp" alt="" style="width: 400px" />
            <br /><br />
            <p>
              <?php echo $data['konten4']; ?>
            </p>
            <img src="https://d1n6dbtoa2690v.cloudfront.net/article/619f1f5ab42c2ecdfdabf567/619f1f5ab42c2ecdfdabf567_1637828801.webp" alt="" style="width: 400px" />
            <br /><br />
            <p>
              <?php echo $data['konten5']; ?>
            </p>
            <img src="https://d1n6dbtoa2690v.cloudfront.net/article/619f1f5ab42c2ecdfdabf567/619f1f5ab42c2ecdfdabf567_1637829329.webp" alt="" style="width: 400px" />
            <br /><br />
            <p>
              <?php echo $data['konten6']; ?>
            </p>
            <a href="content1_print.php" target="_blank" style="color: black;">
                <i class="fa-solid fa-download"></i>
                <span>Download Content</span>
            </a>
            <!-- <a href="https://www.pricebook.co.id/article/market_issue/11720/rekomendasi-laptop-5-jutaan">Referensi Contoh Artikel</a> -->
          </div>
          <div class="col-4"></div>
        </div>
      </div>
    </section>
    <!-- Akhir Content -->
    <?php } ?>

    <!-- Awal Footer -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <img src="../image/logo-dark-new.png" alt="Logo" width="150" class="d-inline-block align-text-top" />
            <p>
              <br />
              089653875537
              <br />
              Jakarta Pusat, Indonesia
            </p>
          </div>
          <div class="col-3"></div>
          <div class="col-3"></div>
          <div class="col-3">
            <p>Find Us on:</p>
            <i class="fa-brands fa-instagram fa-lg"></i>
            <span>@hereabouttechnology</span> <br />
            <i class="fa-brands fa-twitter fa-lg"></i>
            <span>hereabouttechnology</span> <br />
            <i class="fa-brands fa-facebook fa-lg"></i>
            <span>Here about Technology</span>
          </div>
          <div class="mt-2 text-center">
            <p>Copyright © 2022 Here About Technology. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->

    <script
      src="https://cdnjs.cloudfare.com/ajax/libs/propper.js/2.11.5/umd/propper.min.js"
      integrity="sha512-8cU710tp3iH9RniUh6fq5zJsGnjLzOWLWdZqBMLtqaoZUA6AWIE34lwMB3ipUNiTBP5jEZKY95SfbNnQ8cCKvA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudfare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"
      integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/6.1.2/js/fontawesome.min.js"
      integrity="sha512-TXHaOs+47HgWwY4hUqqeD865VIBRoyQMjI27RmbQVeKb1pH1YTq0sbuHkiUzhVa5z0rRxG8UfzwDjIBYdPDM3Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  </body>
</html>