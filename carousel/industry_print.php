<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revolusi Industri 4.0 di Indonesia</title>
    <style>
        body {
        font-family: roboto, "sans-serif";
        }
    </style>
</head>
<body>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-8">
            <h1>
              <strong>Revolusi Industri 4.0 di Indonesia</strong>
            </h1>
            <span style="font-size: 20px">29 Jan 2020<br />
              by: Leski Rizkinaswara</span>
            <img src="https://images.unsplash.com/photo-1516937941344-00b4e0337589?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" style="width: 700px" />
            <br /><br />
            <div style="text-align: justify;">
              <p>
              Revolusi Industri 4.0 merupakan fenomena yang mengkolaborasikan teknologi siber dan teknologi otomatisasi. Revolusi Industri 4.0 dikenal juga dengan istilah “cyber physical system”. Konsep penerapannya berpusat pada otomatisasi. Dibantu teknologi informasi dalam proses pengaplikasiannya, keterlibatan tenaga manusia dalam prosesnya dapat berkurang. Dengan demikian, efektivitas dan efisiensi pada suatu lingkungan kerja dengan sendirinya bertambah. Dalam dunia industri, hal ini berdampak signifikan pada kualitas kerja dan biaya produksi. Namun sesungguhnya, tidak hanya industri, seluruh lapisan masyarakat juga bisa mendapatkan manfaat umum dari sistem ini. Dalam Revolusi Industri 4.0, setidaknya ada lima teknologi yang menjadi pilar utama dalam mengembangkan sebuah industri siap digital, yaitu: Internet of Things, Big Data, Artificial Intelligence, Cloud Computing dan Additive Manufacturing.
              </p>
              <p>
                <strong>1. Internet of Things (IoT)</strong><br>
                IoT merupakan sistem yang menggunakan perangkat komputasi, mekanis, dan mesin digital dalam satu keterhubungan (interrelated connection) untuk menjalankan fungsinya melalui komunikasi data pada jaringan internet tanpa memerlukan interaksi antarmanusia atau interaksi manusia dan komputer. Sistem IoT mengintegrasikan empat komponen, yaitu: perangkat sensor, konektivitas, pemrosesan data, dan antarmuka pengguna. Contoh aplikasi IoT di Indonesia: Gowes (IoT untuk bike sharing), eFishery (IoT pemberi pakan ikan otomatis), Qlue (IoT untuk smart city), dan Hara (IoT untuk pangan dan pertanian).
              </p>
              <p>
                <strong>2. Big Data</strong><br>
                Big Data adalah istilah yang menggambarkan volume besar data, baik terstruktur maupun tidak terstruktur. Namun bukan jumlah data yang penting, melainkan apa yang dilakukan organisasi terhadap data. Big Data dapat dianalisis untuk pengambilan keputusan maupun strategi bisnis yang lebih baik. Penyedia Layanan Big Data Indonesia, antara lain: Sonar Platform, Pauqes Platform, Warung Data, Dattabot.
              </p>
              <p>
                <strong>3. Artificial Intellegence (AI)</strong><br>
                AI merupakan sebuah teknologi komputer atau mesin yang memiliki kecerdasan layaknya manusia dan bisa diatur sesuai keinginan manusia. AI bekerja dengan mempelajari data yang diterima secara berkesinambungan. Semakin banyak data yang diterima dan dianalisis, semakin baik pula AI dalam membuat prediksi. Aplikasi chatbot dan pengenalan wajah (face recognition) merupakan salah satu contoh penerapan AI.
              </p>
              <p>
                <strong>4. Cloud Computing</strong><br>
                Komputasi awan (cloud computing) adalah teknologi yang menjadikan internet sebagai pusat pengelolaan data dan aplikasi, dimana pengguna komputer diberikan hak akses (login) menggunakan cloud untuk dapat mengkonfigurasi peladen (server) melalui internet.
              </p>
              <p>
                Contohnya, hosting situs web berbentuk peladen virtual. Ada tiga jenis model layanan dari komputasi awan, yaitu:<br />
              </p>
              <p>
                <strong>1.	Cloud Software as a Service (SaaS)</strong><br>
                Layanan untuk menggunakan aplikasi yang telah disediakan oleh infrastruktur awan;<br>
              </p>
              <p>
                <strong>2.	Cloud Platform as a Service (PaaS)</strong><br>
                Layanan untuk menggunakan platform yang telah disediakan, sehingga pengembang hanya fokus pada pengembangan aplikasi;<br>
              </p>
              <p>
                <strong>3.	Infrastructure as a Service (IaaS)</strong><br>
                layanan untuk menggunakan infrastruktur yang telah disediakan, dimana konsumen dapat memproses, menyimpanan, berjaringan, dan memakai sumber daya komputasi lain yang diperlukan oleh aplikasi.<br>
                Produk-produk Cloud Computing di Indonesia: K-Cloud, CloudKilat, Dewaweb, IDCloudHost, FreeCloud
              </p>
              <p>
                <strong>4.	Cloud Computing</strong><br>
                Produk-produk Cloud Computing di Indonesia: K-Cloud, CloudKilat, Dewaweb, IDCloudHost, FreeCloud<br>
              </p>
              <p>
                <strong>5. Addictive Manufacturing</strong><br>
                Additive Manufacturing merupakan terobosan baru di industri manufaktur dengan memanfaatkan mesin pencetak 3D atau sering dikenal dengan istilah 3D printing. Gambar desain digital yang telah dibuat diwujudkan menjadi benda nyata dengan ukuran dan bentuk yang sama dengan desain sebenarnya atau dengan skala tertentu. Teknologi additive manufacturing mampu memproduksi lebih banyak desain dan memproduksi barang yang tidak bisa dibuat dengan teknologi manufaktur tradisional.
              </p>
            </div>
          </div>
          <div class="col-4">

          </div>
        </div>
      </div>
    </section>
</body>
</html>

<?php
    require '../mpdf/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf ([
        'mode' => 'utf-8',
        'format' => 'A4',
        'margin_top' => 25,
        'margin_buttom' => 25,
        'margin_left' => 25,
        'margin_ringt' => 25
    ]);

    $html = ob_get_contents();

    ob_end_clean();
    $mpdf->WriteHTML(utf8_encode($html));

    $content = $mpdf->Output("Cetak Konten.pdf", "D");
?>