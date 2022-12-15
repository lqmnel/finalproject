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
      table,
      th,
      td {
        border: 1px solid black;
      }
      th,
      td {
        padding: 10px;
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
              <a class="nav-link" href="/finalproject/admin/">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <?php
      include "../connection.php";
      $query = mysqli_query($conn, 'SELECT * FROM catalogs WHERE id = 2');
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
              ><?php echo date_format($date, "d M Y") ?><br />
              by: <?php echo $data['authors'] ?></span
            >
            <br />
            <br />
            <img src="https://images.unsplash.com/photo-1615750185825-fc85c6aba18d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" style="width: 700px" />
            <br />
            <br />
            <p>
              <?php echo $data['konten_catalog'] ?>
            </p>
            <img src="https://www.apple.com/id/macbook-air/images/overview/hero_mba_m1__mfge6fbp7t2m_large_2x.jpg" alt="" style="width: 400px" />
            <br /><br />
            <p>
              <?php echo $data['konten2'] ?>
            </p>
            <img
              src="data:image/jpeg;base64,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"
              alt=""
              style="width: 400px"
            />
            <br /><br />
            <p>
              <?php echo $data['konten3'] ?>
            </p>
            <img
              src="data:image/jpeg;base64,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"
              alt=""
              style="width: 400px"
            />
            <br /><br />
            <p>
              <?php echo $data['konten4'] ?>
            </p>
            <a href="content2_print.php" target="_blank" style="color: black;">
                <i class="fa-solid fa-download"></i>
                <span>Download Content</span>
            </a>
            <!-- <a href="https://fakhrurpedia.com/laptop-15-jutaan/">Referensi Contoh Artikel</a> -->
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
