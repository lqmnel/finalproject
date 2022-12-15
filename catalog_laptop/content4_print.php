<?php
    ob_start();
    include "../connection.php";
    $query = mysqli_query($conn, 'SELECT * FROM catalogs WHERE id = 10');
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
              <strong><?php echo $data['judul_catalog'] ?></strong>
            </h1>
            <span style="font-size: 20px"
              ><?php echo date_format($date, "d M Y") ?><br />
              by:  <?php echo $data['authors'] ?></span>
            <br /><br />
            <img src="https://images.unsplash.com/photo-1592434134753-a70baf7979d5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" style="width: 700px" />
            <br /><br />
            <p>
              <?php echo $data['konten_catalog'] ?>
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
            <p>
              <?php echo $data['konten6'] ?>
            </p>
            <p>
              <?php echo $data['konten7'] ?>
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