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
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
      }
      .navbar {
        font-family: Garamond;
      }
      section {
        padding-top: 3rem;
      }
      #headline {
        background-color: #22428d;
        color: #dee7e7;
      }
      #about {
        background-color: #a9bcd0;
        color: black;
      }
      #catalog {
        background-color: #d8dbe2;
      }
      #galery {
        background-color: #75cede;
        color: black;
        padding-bottom: 3rem;
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
          <img src="image/logo-dark-new.png" alt="Logo" width="100" class="d-inline-block align-text-top" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="me-auto"></div>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Encyclopedia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#catalog">Catalog News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galery">Galery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/finalproject/admin/">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-color: black; padding-top: 5rem">
          <div class="carousel-wrapper d-flex align-items-center">
            <div class="container">
              <div class="row mb-5">
              <?php
                include "connection.php";
                $query = mysqli_query($conn, 'SELECT * FROM carousel WHERE id = 4');
                while ($data = mysqli_fetch_array($query)) {
              ?>
                <div class="col-8">
                  <h2 style="color: white"><strong><?= $data['judul_mini'] ?></strong></h2>
                  <p style="color: white">
                    <?= $data['caption'] ?>
                  </p>
                  <a href="/finalproject/carousel/why.php"
                    ><button style="width: 150px; height: 30px; border-radius: 8px; background-color: white; color: black; border-style: none">Baca Selengkapnya</button></a
                  >
                </div>
                <div class="col-4">
                  <div class="m-auto">
                    <img src="image/tech1.jpg" alt="tech1" class="d-block w-100" />
                  </div>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background-color: #e2f4f8; padding-top: 3rem">
          <div class="carousel-wrapper d-flex align-items-center">
            <div class="container">
              <div class="row mt-5 mb-5">
              <?php
                include "connection.php";
                $query = mysqli_query($conn, 'SELECT * FROM carousel WHERE id = 5');
                while ($data = mysqli_fetch_array($query)) {
              ?>
                <div class="col-8">
                  <h2 style="color: black"><strong><?= $data['judul_mini'] ?></strong></h2>
                  <p style="color: black">
                    <?= $data['caption'] ?>
                  </p>
                  <a href="/finalproject/carousel/pengertian.php"
                    ><button style="width: 150px; height: 30px; border-radius: 8px; background-color: #bfe6ed; color: black; border-style: none">Baca Selengkapnya</button></a
                  >
                </div>
                <div class="col-4">
                  <div class="m-auto">
                    <img src="image/tech2.jpg" alt="" class="d-block w-100" />
                  </div>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background-color: #b3b3b3; padding-top: 3rem">
          <div class="carousel-wrapper d-flex align-items-center">
            <div class="container">
              <div class="row mt-5 mb-5">
              <?php
                include "connection.php";
                $query = mysqli_query($conn, 'SELECT * FROM carousel WHERE id = 6');
                while ($data = mysqli_fetch_array($query)) {
              ?>
                <div class="col-8">
                  <h2 style="color: black"><strong><?= $data['judul_mini'] ?></strong></h2>
                  <p style="color: black">
                    <?= $data['caption'] ?>
                  </p>
                  <a href="/finalproject/carousel/industry.php"
                    ><button style="width: 150px; height: 30px; border-radius: 8px; background-color: #c8c8c8; color: black; border-style: none">Baca Selengkapnya</button></a
                  >
                </div>
                <div class="col-4">
                  <div class="m-auto">
                    <img src="image/revolusiindustri.jpg" alt="" class="d-block w-100" />
                  </div>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Carousel -->

    <!-- Connect to Database -->
    <?php
        include "connection.php";
        $query = mysqli_query($conn, 'SELECT * FROM headlines WHERE id = 1');
        while ($data = mysqli_fetch_array($query)) {
    ?>
    <!-- Connect to Database -->

    <!-- Awal Headline -->
    <section id="headline">
      <div class="container">
        <div class="row justify-content-center fs-5 mb-3" style="text-align: justify">
          <div class="col-4">
            <h3><a href="/finalproject/headline/peran.php" style="color: #dee7e7"><?php echo $data["judul"]; ?></a></h3>
            <br>
            <p style="font-size: 20px;">
              <?php echo $data['caption'] ?>
            </p>
          </div>
      <?php } ?>
      <?php
        include "connection.php";
        $query = mysqli_query($conn, 'SELECT * FROM headlines WHERE id = 2');
        while ($data = mysqli_fetch_array($query)) {
      ?>
          <div class="col-4">
            <br /><br /><br /><br />
            <img src="image/coding.jpg" alt="" class="w-100" /> <br /><br /><br /><br />
            <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="w-100" />
          </div>
          <div class="col-4">
            <h3>
              <a href="/finalproject/headline/kominfo.php" style="color: #dee7e7"><?php echo $data['judul'] ?></a>
            </h3>
            <p>
              <?php echo $data['caption'] ?>
            </p>
          </div>
      <?php } ?>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#a9bcd0"
          fill-opacity="1"
          d="M0,192L34.3,192C68.6,192,137,192,206,170.7C274.3,149,343,107,411,128C480,149,549,235,617,250.7C685.7,267,754,213,823,208C891.4,203,960,245,1029,234.7C1097.1,224,1166,160,1234,138.7C1302.9,117,1371,139,1406,149.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Headline -->
    
    

    <!-- Awal About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h1><strong>Encyclopedia About Technology</strong></h1>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-6">
          <?php 
            include "connection.php";
            $query = mysqli_query($conn, 'SELECT * FROM encyclopedia WHERE id = 4');
            while ($data = mysqli_fetch_array($query)) {
          ?>
            <a href="/finalproject/ensiklopedia/history.php"><h3 style="color: black"><?php echo $data['judul'] ?></h3></a>
            <br /><br />
            <img src="https://images.unsplash.com/photo-1517976487492-5750f3195933?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="w-75" />
            <br /><br />
            <p style="text-align: justify;;">
              <?php echo $data['caption'] ?>
            </p>
          </div>
          <?php } ?>
          <div class="col-md-6">
          <?php
            include "connection.php";
            $query = mysqli_query($conn, 'SELECT * FROM encyclopedia WHERE id = 6');
            while ($data = mysqli_fetch_array($query)) {
          ?>
            <a href="/finalproject/ensiklopedia/future.php"><h3 style="color: black"><?= $data['judul'] ?></h3></a>
            <br />
            <img src="https://images.unsplash.com/photo-1591696331111-ef9586a5b17a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="w-75" />
            <br />
            <br />
            <p style="text-align: justify;">
              <?= $data['caption'] ?>
            </p>
          </div>
          <?php } ?>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#D8DBE2"
          fill-opacity="1"
          d="M0,96L24,117.3C48,139,96,181,144,213.3C192,245,240,267,288,240C336,213,384,139,432,112C480,85,528,107,576,144C624,181,672,235,720,245.3C768,256,816,224,864,224C912,224,960,256,1008,229.3C1056,203,1104,117,1152,90.7C1200,64,1248,96,1296,101.3C1344,107,1392,85,1416,74.7L1440,64L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Awal Catalog -->
    <section id="catalog">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Catalog News</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="https://images.unsplash.com/photo-1661961111184-11317b40adb2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80" alt="About Laptop" class="card-img-top" />
              <div class="card-body">
                <p class="card-text">Cek berita seputar laptop <a href="/finalproject/catalog_laptop/index.php">Disini</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="https://images.unsplash.com/photo-1620288650054-99a09b49f7bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="About Keyboard" class="card-img-top" />
              <div class="card-body">
                <p class="card-text">Cek berita seputar <i>true wireless stereo</i> <a href="/finalproject/catalog_tws/index.php">Disini</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="About Keyboard" class="card-img-top" />
              <div class="card-body">
                <p class="card-text">Cek berita seputar <i>smartphone</i> <a href="/finalproject/catalog_smartphone/index.php">Disini</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#75cede"
          fill-opacity="1"
          d="M0,96L34.3,101.3C68.6,107,137,117,206,149.3C274.3,181,343,235,411,234.7C480,235,549,181,617,138.7C685.7,96,754,64,823,58.7C891.4,53,960,75,1029,117.3C1097.1,160,1166,224,1234,218.7C1302.9,213,1371,139,1406,101.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Catalog -->
    
    <!-- Awal Galery -->
    <section id="galery">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h1>Our Galery</h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card" style="background-color: #75cede; border: none;">
              <img src="https://images.unsplash.com/photo-1557426272-fc759fdf7a8d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="card-img-top" />
              <div class="card-body">
                <p class="card-text text-center" style="font-size: 20px;"><strong>Team Work</strong></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" style="background-color: #75cede; border: none;">
              <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="About Keyboard" class="card-img-top" />
              <div class="card-body">
                <p class="card-text text-center" style="font-size: 20px;"><strong>The Team</strong></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" style="background-color: #75cede; border: none;">
              <img src="https://plus.unsplash.com/premium_photo-1661281345831-72aac72beb52?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" alt="About Keyboard" class="card-img-top" />
              <div class="card-body">
                <p class="card-text text-center" style="font-size: 20px;"><strong>Discuss</strong></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" style="background-color: #75cede; border: none;">
              <img src="https://images.unsplash.com/photo-1503551723145-6c040742065b-v2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="About Keyboard" class="card-img-top" />
              <div class="card-body">
                <p class="card-text text-center" style="font-size: 20px;"><strong>The Plan</strong></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" style="background-color: #75cede; border: none;">
              <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="About Keyboard" class="card-img-top" />
              <div class="card-body">
                <p class="card-text text-center" style="font-size: 20px;"><strong>Work</strong></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Galery -->

    <!-- Awal Contact Us
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <div class="mb-3">
                <label for="nama" class="form-label"><strong>Nama Lengkap:</strong></label>
                <input type="text" class="form-control" id="nama" name="nama" required/>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label"><strong>Email:</strong></label>
                <input type="email" class="form-control" id="email" name="email" required/>
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label"><strong>Pesan:</strong></label>
                <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
              </div>
              <p style="color: red; font-size: 12px;"><?php if(isset($_SESSION['error'])){ echo($_SESSION['error']); }?></p>
              <button type="submit" name="submit1" class="btn btn-block my-3" style="color: white; background-color: #22428d;">Kirim</button></button>
            </form>
          </div>
        </div>
      </div>
    </section>
    Akhir Contact Us -->

    <!-- Awal Footer -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <img src="image/logo-dark-new.png" alt="Logo" width="200" class="d-inline-block align-text-top" />
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
            <!-- <i class="fa-solid fa-phone fa-lg"></i>
            <span>089653875537</span> <br /> -->
            <i class="fa-brands fa-instagram fa-lg"></i>
            <span>@hereabouttechnology</span> <br />
            <i class="fa-brands fa-twitter fa-lg"></i>
            <span>hereabouttechnology</span> <br />
            <i class="fa-brands fa-facebook fa-lg"></i>
            <span>Here about Technology</span>
          </div>
          <div class="mt-3 text-center">
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
