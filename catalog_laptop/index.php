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
        color: black;
      }
      .navbar {
        font-family: Garamond;
      }
      #content {
        background-color: #639fab;
        padding-top: 5rem;
        padding-bottom: 3rem;
        font-size: 20px;
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
              <a class="nav-link" href="/finalproject/admin/">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Content -->
    <section id="content">
      <div class="container">
        <div class="row">
          <h1><strong>Here Catalog News about Laptop</strong></h1>
          <br />
          <h6>Updated 14 Desember 2022</h6>
          <br /><br />
          <div class="col">
            <div class="content1" style="text-align: justify; width: 75%; padding: 8px">
            <?php
              include "../connection.php";
              $query = mysqli_query($conn, 'SELECT * FROM catalogs WHERE id = 1');
              while ($data = mysqli_fetch_array($query)) {
            ?>
              <img
                src="https://images.unsplash.com/photo-1661961110372-8a7682543120?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                alt=""
                style="width: 350px; float: left; margin-right: 20px"
              />
              <p><a href="/finalproject/catalog_laptop/content1.php"><?php echo $data['judul_catalog']; ?></a></p>
              <p><?php echo $data['caption']; ?></p>
              <br /><br />
            </div>
            <?php } ?>
            <div class="content2" style="text-align: justify; width: 75%; padding: 8px">
            <?php
              include "../connection.php";
              $query = mysqli_query($conn, 'SELECT * FROM catalogs WHERE id = 2');
              while ($data = mysqli_fetch_array($query)) {
            ?>
              <img
                src="https://images.unsplash.com/photo-1615750185825-fc85c6aba18d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                alt=""
                style="width: 350px; float: left; margin-right: 20px"
              />
              <p><a href="/finalproject/catalog_laptop/content2.php"><?php echo $data['judul_catalog'] ?></a></p>
              <p>
                <?php echo $data['caption'] ?>
              </p>
              <br />
            </div>
            <?php } ?>
            <div class="content3" style="text-align: justify; width: 75%; padding: 8px">
            <?php
              include "../connection.php";
              $query = mysqli_query($conn, 'SELECT * FROM catalogs WHERE id = 3');
              while ($data = mysqli_fetch_array($query)) {
            ?>
              <img
                src="https://images.unsplash.com/photo-1630794180018-433d915c34ac?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
                alt=""
                style="width: 350px; float: left; margin-right: 20px"
              />
              <p><a href="/finalproject/catalog_laptop/content3.php"><?php echo $data['judul_catalog'] ?></a></p>
              <p>
                <?php echo $data['caption'] ?>
              </p>
              <br>
            </div>
            <?php } ?>
            <div class="content4" style="text-align: justify; width: 75%; padding: 8px">
            <?php
              include "../connection.php";
              $query = mysqli_query($conn, 'SELECT * FROM catalogs WHERE id = 10');
              while ($data = mysqli_fetch_array($query)) {
            ?>
              <img
                src="https://images.unsplash.com/photo-1592434134753-a70baf7979d5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                alt=""
                style="width: 350px; float: left; margin-right: 20px"
              />
              <p><a href="/finalproject/catalog_laptop/content4.php"><?php echo $data['judul_catalog'] ?></a></p>
              <p>
                <?php echo $data['caption'] ?>
              </p>
              <br>
            </div>
            <?php } ?>
            <div class="content5" style="text-align: justify; width: 75%; padding: 8px">
            <?php
              include "../connection.php";
              $query = mysqli_query($conn, 'SELECT * FROM catalogs WHERE id = 11');
              while ($data = mysqli_fetch_array($query)) {
            ?>
              <img
                src="https://images.unsplash.com/photo-1516572980581-c9bd8bff75b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                alt=""
                style="width: 350px; float: left; margin-right: 20px"
              />
              <p><a href="/finalproject/catalog_laptop/content5.php"><?php echo $data['judul_catalog']; ?></a></p>
              <p>
                <?php echo $data['caption'] ?>
              </p>
            <?php } ?>
            </div>
            <div class="content6" style="text-align: justify; width: 75%; padding: 8px">
            <?php
              include "../connection.php";
              $query = mysqli_query($conn, 'SELECT * FROM catalogs WHERE id = 23');
              while ($data = mysqli_fetch_array($query)) {
            ?>
              <img
                src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80"
                alt=""
                style="width: 350px; float: left; margin-right: 20px"
              />
              <p><a href="/finalproject/catalog_laptop/content5.php"><?php echo $data['judul_catalog']; ?></a></p>
              <p>
                <?php echo $data['caption'] ?>
              </p>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Content -->

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
