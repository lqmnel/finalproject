<?php
    ob_start();
    include "../connection.php";
    $query = mysqli_query($conn, 'SELECT * FROM catalogs WHERE id = 18');
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
            <img src="https://images.unsplash.com/photo-1526038335545-4b96864eaee7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="" style="width: 700px" />
            <br /><br />
            <p>
              <?= $data['caption'] ?>
            </p>
            <img src="https://cdn.eraspace.com/pub/media/wysiwyg/ibox/ip-14-pro/New1.png" alt="" style="width: 400px" /><br><br>
            <p>
              <?= $data['konten_catalog'] ?>
            </p>
            <img src="https://images.samsung.com/levant/smartphones/galaxy-s22-ultra/buy/S22_Ultra_Carousel_GroupKV_PC.jpg?imwidth=1536" alt="" style="width: 700px" />
            <br /><br />
            <p>
              <?= $data['konten2'] ?>
            </p>
            <img src="https://consumer.huawei.com/content/dam/huawei-cbg-site/common/mkt/pdp/phones/p50-pro/size/p50-pro-black.png" alt="" style="width: 100px" />
            <br /><br />
            <p>
              <?= $data['konten3'] ?>
            </p>
            <img src="https://cdnwpseller.gramedia.net/wp-content/uploads/2022/08/24063859/hp-terbaik-2022-13-364x132.jpg" alt="" style="width: 700px" />
            <br /><br />
            <p>
              <?= $data['konten4'] ?>
            </p>
            <img
              src="data:image/jpeg;base64,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"
              alt=""
              style="width: 200px"
            />
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