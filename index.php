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
    <title>Project TA | Luqman Elhakim Ibnu Hasan</title>
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
                <div class="col-8">
                  <h2 style="color: white"><strong> Why Tech</strong></h2>
                  <p style="color: white">
                  Teknologi juga berperan untuk mempermudah menjalankan aktivitas. Tentu saja, dengan mudahnya dalam mengakses teknologi, maka aktivitas pekerjaan yang dilakukan dengan teknologi tersebut pun terasa ringan dan mudah untuk dijalankan. Lagi, dengan memanfaatkan teknologi memungkinkan perusahaan bisa melakukan efisiensi. Karyawan bisa bekerja dengan lebih cepat, sehingga teknologi pun bisa menghemat waktu. Artinya, adopsi teknologi memungkinkan perusahaan bisa lebih efisien dan efektif.
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
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background-color: #e2f4f8; padding-top: 3rem">
          <div class="carousel-wrapper d-flex align-items-center">
            <div class="container">
              <div class="row mt-5 mb-5">
                <div class="col-8">
                  <h2 style="color: black"><strong>Pengertian Teknologi</strong></h2>
                  <p style="color: black">
                  Secara bahasa teknologi berasal dari bahasa Yunani yaitu tekhnologia yang merupakan gabungan dari “techne” dan “logos”. Tehcne berarti art or skill sedangkan logos berarti science of study. Dalam Kamus Besar Bahasa Indonesia, teknologi adalah seluruh sarana untuk menyediakan barang-barang yang dibutuhkan bagi kelangsungan dan kenyamanan hidup manusia.
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
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background-color: #b3b3b3; padding-top: 3rem">
          <div class="carousel-wrapper d-flex align-items-center">
            <div class="container">
              <div class="row mt-5 mb-5">
                <div class="col-8">
                  <h2 style="color: black"><strong>About Industrial Revolution 4.0 in Indonesia</strong></h2>
                  <p style="color: black">
                  Revolusi Industri 4.0 merupakan fenomena yang mengkolaborasikan teknologi siber dan teknologi otomatisasi. Revolusi Industri 4.0 dikenal juga dengan istilah “cyber physical system”. Konsep penerapannya berpusat pada otomatisasi. Dibantu teknologi informasi dalam proses pengaplikasiannya, keterlibatan tenaga manusia dalam prosesnya dapat berkurang. Dengan demikian, efektivitas dan efisiensi pada suatu lingkungan kerja dengan sendirinya bertambah. Dalam dunia industri, hal ini berdampak signifikan pada kualitas kerja dan biaya produksi.
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Carousel -->

    <!-- Awal Headline -->
    <section id="headline">
      <div class="container">
        <div class="row justify-content-center fs-5 mb-3" style="text-align: justify">
          <div class="col-4">
            <h3><a href="/finalproject/headline/peran.php" style="color: #dee7e7">Peran Teknologi Informasi Terhadap Pelayanan Publik</a></h3>
            <br>
            <p style="font-size: 20px;">
              Memberikan pelayanan publik yang prima merupakan tujuan setiap pemerintah daerah. Pemerintah daerah saat ini berlomba-lomba menerapkan dan memanfaatkan kemajuan teknologi informasi untuk dapat membantu mewujudkannya. Pemanfaatan teknologi informasi tersebut mencakup aktivitas yang saling berkaitan yaitu pengolahan data, pengelolaan informasi, dan sistem manajemen. Perkembangan teknologi informasi serta penerapan konektivitas internet ke dalam tata kelola pemerintah diharapkan mampu mengatasi berbagai macam persoalan melalui peningkatan efisiensi, inovasi, produktivitas, perluasan jangkauan dan penghematan biaya.
            </p>
          </div>
          <div class="col-4">
            <br /><br /><br /><br />
            <img src="image/coding.jpg" alt="" class="w-100" /> <br /><br /><br /><br />
            <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="w-100" />
          </div>
          <div class="col-4">
            <h3>
              <a href="/finalproject/headline/kominfo.php" style="color: #dee7e7">Menkominfo Ungkap Prediksi Ngeri Tren Start Up, Ada Solusi?</a>
            </h3>
            <p>
              Menteri Komunikasi dan Informatika (KOMINFO) Johnny G. Plate mengungkap prediksi soal tren di perusahaan rintisan atau start up di Indonesia tak lama lagi. "Tolong kita perhatikan baik-baik, saya minta untuk kita perhatikan karena tren layoff ini akan bisa mengingkat," cetusnya, saat bicara dalam acara Forum Ekonomi Digital KOMINFO (FEDK) ke-5 di Jakarta, Kamis (1/12). Pernyataan ini muncul mengomentari fenomena yang layoff atau pemutusan hubungan kerja (PHK) yang sedang marak terjadi di perusahaan rintisan tanah air. Pada November, misalnya, ada layoff di startup Ajaib, GoTo, Ruangguru, Sirclo, hingga Ula.
            </p>
          </div>
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
            <a href="/finalproject/ensiklopedia/history.php"><h3 style="color: black">Sejarah Teknologi</h3></a>
            <br /><br />
            <img src="https://images.unsplash.com/photo-1517976487492-5750f3195933?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="w-75" />
            <br /><br />
            <p style="text-align: justify;;">
              Berkembangnya suatu teknologi aplikatif dapat ditinjau dari kebutuhan manusia sendiri untuk seperti mengatasi perubahan cuaca dan iklim, menghadapi serangan hewan buas, mempermudah aktivitas ekonomi hingga peperangan. Namun teknologi juga dapat berkembang dari aspek teoretis yakni hanya berlandaskan keingintahuan manusia akan fenomena alam yang terjadi disekitarnya, seperti penemuan hukum gravitasi dan kalkulus oleh Isaac Newton dan Leibniz. Sains dan teknologi adalah dua hal yang tidak dapat dipisahkan begitu pula sejarah dan perkembangannya. Namun demikian tentu saja dapat terlihat perbedaan yang mencolok saat membahas sejarah dan perkembangan teknologi, sejarah teknologi membahas aspek terapan dari sains, seperti penemuan peralatan atau teknik untuk memudahkan suatu aktivitas manusia. Sedangkan sejarah sains mempunyai cangkupan yang lebih luas karena mengkaji suatu gejala alam atau gejala yang terjadi di kehidupan manusia berdasarkan aspek-aspek teoretis ataupun yang berkaitan dengan hal-hal abstrak secara matematis hingga ranah filsafat.
            </p>
          </div>
          <div class="col-md-6">
            <a href="/finalproject/ensiklopedia/future.php"><h3 style="color: black">Tren Teknologi di Masa Depan, Bantu Permudah Kehidupan Manusia</h3></a>
            <br />
            <img src="https://images.unsplash.com/photo-1591696331111-ef9586a5b17a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="w-75" />
            <br />
            <br />
            <p style="text-align: justify;">
              Dalam perkembangannya, imajinasi manusia bekerja lebih keras dan lebih progresif daripada yang diketahui. Angan-angan akan dunia masa depan yang lebih canggih dan modern telah tertanam di benak manusia sejak awal pertama kali mereka bisa mengingat. Sejak kecil, manusia telah dijejali pemikiran akan teknologi di masa depan yang lebih maju dan seiring dengan pertumbuhannya, manusia juga menyaksikan teknologi terus berevolusi menjadi lebih baik dan lebih dapat diandalkan. Para ilmuwan dan insinyur terus bekerja untuk mendesain ulang teknologi di masa depan dan dengan caranya masing-masing. Meski mungkin Anda tak menyadarinya, namun tingkat kemajuan teknologi selama setengah abad terakhir adalah hal yang cukup mengejutkan, baik di bidang-bidang seluas komputasi, kedokteran, komunikasi, dan ilmu material. Berikut adalah daftar dari beberapa tren teknologi di masa depan yang paling menarik dan digadang-gadang akan mengubah dunia, mulai dari kembaran manusia digital hingga teknologi yang dapat mengedit gen, dilansir dari forbes.com dan sciencefocus.com.
            </p>
          </div>
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
