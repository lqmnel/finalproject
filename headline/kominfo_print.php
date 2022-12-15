<?php
    ob_start();
    include "../connection.php";
    $query = mysqli_query($conn, 'SELECT * FROM headlines WHERE id = 2');
    while ($data = mysqli_fetch_array($query)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menkominfo Ungkap Prediksi Ngeri Tren Start Up</title>
    <style>
        body {
        font-family: roboto, "sans-serif";
        }
    </style>
</head>
<body>
    <?php
      $date = date_create($data['date']);
    ?>

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-8">
            <div style="text-align: left;">
              <h1>
                <strong><?php echo $data['judul'] ?></strong>
              </h1>
              <span><?php echo $data['penulis'] ?></span> <br />
              <span><?php echo date_format($date, "d M Y"); ?></span>
            </div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTs9FKDB330gPbDPOz_3WrG1zdgpZ4QoQrGA&usqp=CAU" alt="" style="width: 700px" />
            <br />
            <br />
            <p>
              <?php echo $data['konten1'] ?>
            </p>
            <p>
              <?php echo $data['konten2'] ?>
            </p>
            <p>
              <?php echo $data['konten3'] ?>
            </p>
            <p>
              <?php echo $data['konten4'] ?>
            </p>
            <p>
              <?php echo $data['konten5'] ?>
            </p>
          </div>
          <div class="col-4"></div>
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

<?php } ?>