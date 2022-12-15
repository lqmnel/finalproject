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
  <title>Admin Dashboard | Final Project | Luqman Elhakim Ibnu Hasan</title>
  <style>
    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    }
    .navbar {
      font-family: Garamond;
      background-color: #22428d;
    }
    #sidebar {
      background-color: #d8dbe2;
      padding-buttom: 3px;
    }
    .container-fluid {
      background-color: #a9bcd0;
    }
  </style>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['status']) != "login"){
            header("location:/finalproject/");
        }
        if(isset($_POST['submit'])){
            session_destroy();
            header("location:/finalproject/admin/");
        }

        if(isset($_POST['submit1'])){
            $catalog_name = $_POST['catalog_name'];
            $authors = $_POST['authors'];
            $judul_catalog = $_POST['judul_catalog'];
            $date = $_POST['date'];
            $caption = $_POST['caption'];
            $konten_catalog = $_POST['konten_catalog'];
            $konten2 = $_POST['konten2'];
            $konten3 = $_POST['konten3'];
            $konten4 = $_POST['konten4'];
            $konten5 = $_POST['konten5'];
            $konten6 = $_POST['konten6'];
            $konten7 = $_POST['konten7'];

            include '../../connection.php';
            $sql = "INSERT INTO catalogs (catalog_name, authors, judul_catalog, date, caption, konten_catalog, konten2, konten3, konten4, konten5, konten6, konten7) VALUES ('$catalog_name', '$authors', '$judul_catalog', '$date', '$caption', '$konten_catalog', '$konten2', '$konten3', '$konten4', '$konten5', '$konten6', '$konten7');";
            $datas = $conn->query($sql);

            if (mysqli_affected_rows($conn) > 0) {
                header("Location:/finalproject/admin/catalog/");
            } else {
                $_SESSION['error'] = "Menambah Data Gagal!";
            }
        }
    ?>

    <!-- Awal Navbar -->
    <nav class="navbar navbar-dark p-3">
      <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
        <a href="dashboard.php" class="navbar-brand">
          <img src="../../image/logo-dark-new.png" alt="Logo" width="100" class="d-inline-block align-text-top" style="margin-right: 10px; margin-left: 20px" />
           Admin Panel 
          </a>
        <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-touggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
        <div class="dropdown">
          <a href="#" class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
            Selamat Datang, <?php echo($_SESSION['username']) ?></a>
          <ul class="dropdown-menu">
            <li>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="logout_form" method="post">
                <button class="dropdown-item" type="submit" name="submit">Logout</button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Sidebar -->
    <div class="container-fluid">
      <div class="row">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
          <div class="position-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="/finalproject/admin/dashboard.php" class="nav-link active" aria-current="page">
                  <i class="fa-solid fa-home px-2"></i>
                  <span>Beranda</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/finalproject/admin/carousel/" class="nav-link" aria-current="page">
                  <i class="fa-solid fa-microchip px-2"></i>
                  <span>Carousel</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/finalproject/admin/headline/" class="nav-link" aria-current="page">
                  <i class="fa-solid fa-newspaper px-2"></i>
                  <span>Headline</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/finalproject/admin/encyclopedia/" class="nav-link" aria-current="page">
                  <i class="fa-solid fa-book px-2"></i>
                  <span>Encyclopedia</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/finalproject/admin/catalog/" class="nav-link" aria-current="page">
                  <i class="fa-solid fa-file-lines px-2"></i>
                  <span>Catalog</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/finalproject/admin/contact_us/" class="nav-link" aria-current="page">
                  <i class="fa-solid fa-message px-2"></i>
                  <span>Contact Us</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Akhir Sidebar -->

        <!-- Awal Manajemen User Admin-->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/finalproject/admin/catalog/">Catalogs</a></li>
              <li class="breadcrumb-item active" aria-current="Page">Tambah Data Konten Catalog</li>
            </ol>
          </nav>
          <h1 class="h2">Menambah Data Konten Catalog</h1>
          <p>Selamat Datang <?php echo($_SESSION['username']) ?>, ini adalah dashboard Catalog.</p>

          <div class="card">
            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="mb-3">
                        <label for="catalog_name" class="form-label"><strong>Nama Catalog</strong></label>
                        <input type="text" class="form-control" id="catalog_name" name="catalog_name" placeholder="Nama Catalog" required>
                    </div>
                    <div class="mb-3">
                        <label for="authors" class="form-label"><strong>Nama Penulis Konten Catalog</strong></label>
                        <input type="text" class="form-control" id="authors" name="authors" placeholder="Nama Penulis Konten Catalog" required>
                    </div>
                    <div class="mb-3">
                        <label for="judul_catalog" class="form-label"><strong>Judul Konten Catalog</strong></label>
                        <input type="text" class="form-control" id="judul_catalog" name="judul_catalog" placeholder="Judul Konten Catalog" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label"><strong>Tanggal Terbit Konten</strong></label>
                        <input type="date" class="form-control" id="date" name="date" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="caption" class="form-label"><strong>Mini Caption Catalog</strong></label>
                        <textarea class="form-control" id="caption" name="caption" rows="5" placeholder="Caption Artikel/Berita" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="konten_catalog" class="form-label"><strong>Isi Konten Catalog</strong></label>
                        <textarea class="form-control" id="konten_catalog" name="konten_catalog" rows="10" placeholder="Isi Konten Catalog" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="konten2" class="form-label"><strong>Isi Konten Catalog</strong></label>
                        <textarea class="form-control" id="konten2" name="konten2" rows="10" placeholder="Isi Konten Catalog" require></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="konten3" class="form-label"><strong>Isi Konten Catalog</strong></label>
                        <textarea class="form-control" id="konten3" name="konten3" rows="10" placeholder="Isi Konten Catalog" require></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="konten4" class="form-label"><strong>Isi Konten Catalog</strong></label>
                        <textarea class="form-control" id="konten4" name="konten4" rows="10" placeholder="Isi Konten Catalog" require></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="konten5" class="form-label"><strong>Isi Konten Catalog</strong></label>
                        <textarea class="form-control" id="konten5" name="konten5" rows="10" placeholder="Isi Konten Catalog" require></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="konten6" class="form-label"><strong>Isi Konten Catalog</strong></label>
                        <textarea class="form-control" id="konten6" name="konten6" rows="10" placeholder="Isi Konten Catalog" require></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="konten7" class="form-label"><strong>Isi Konten Catalog</strong></label>
                        <textarea class="form-control" id="konten7" name="konten7" rows="10" placeholder="Isi Konten Catalog" require></textarea>
                    </div>
                    <p style="color: red; font-size: 12px;"><?php if(isset($_SESSION['error'])){ echo($_SESSION['error']); }?></p>
                    <button type="submit" name="submit1" class="btn btn-block button-blue my-3 btn-primary" style="color: white;">Save</button>
                </form>
            </div>
          </div>
          <!-- Akhir Manajemen User Admin -->

          <!-- Awal Footer -->
          <footer class="pt-5 d-flex justify-content-between">
            <span>Copyright © 2022 <a href="/finalproject/">Here about Technology</a></span>
            <ul class="nav m-0">
              <li class="nav-item">
                <a href="#" class="nav-link text-secondary">Hubungi Kami</a>
              </li>
            </ul>
          </footer>
        </main>
      </div>
    </div>
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
