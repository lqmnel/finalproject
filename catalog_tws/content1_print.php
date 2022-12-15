<?php
    ob_start();
    include "../connection.php";
    $query = mysqli_query($conn, 'SELECT * FROM catalogs WHERE id = 12');
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
              <strong><?= $data['judul_catalog'] ?></strong>
            </h1>
            <span style="font-size: 20px"
              ><?php echo date_format($date, "d M Y"); ?><br />
              by: <?php echo $data['authors']; ?></span
            >
            <br /><br />
            <img src="https://images.unsplash.com/photo-1590658165737-15a047b7c0b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80" alt="" style="width: 700px" />
            <br /><br />
            <p>
              <?= $data['konten_catalog'] ?>
            </p>
            <img
              src="data:image/jpeg;base64,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"
              alt=""
              style="width: 400px"
            />
            <br /><br />
            <p>
              <?= $data['konten2'] ?>
            </p>
            <img src="https://images.samsung.com/id/galaxy-buds2-pro/feature/galaxy-buds2-pro-kv.jpg" alt="" style="width: 700px" />
            <br /><br />
            <p>
              <?= $data['konten3'] ?>
            </p>
            <img src="https://cdn.eraspace.com/pub/media/wysiwyg/ibox/airpods-pro/airpodspro-7-min.png" alt="" style="width: 500px" />
            <br /><br />
            <p>
              <?= $data['konten4'] ?>
            </p>
            <img src="https://2.bp.blogspot.com/-2La29IHA7tg/Yaa7KJMVuQI/AAAAAAAASk0/J6Unr698MjoagUrybIAkYDCpGix4tZVCQCLcBGAsYHQ/s320/Apple%2BAirPods%2B3.png" alt="" style="width: 600px" />
            <br /><br />
            <p>
              <?= $data['konten5'] ?>
            </p>
            <p>
              <?= $data['konten6'] ?>
            </p>
            <p>
              <?= $data['konten7'] ?>
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