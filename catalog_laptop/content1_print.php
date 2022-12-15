<?php
    ob_start();
    include "../connection.php";
    $query = mysqli_query($conn, 'SELECT * FROM catalogs WHERE id = 1');
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