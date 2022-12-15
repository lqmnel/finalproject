<?php
    ob_start();
    include "../connection.php";
    $query = mysqli_query($conn, 'SELECT * FROM encyclopedia WHERE id = 4');
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

<section id="content">
      <div class="container">
        <div class="row">
          <div class="col-8">
            <h1>
              <strong><?php echo $data['judul'] ?> (by: <a href="https://www.wikipedia.org/" style="color: black"><?php echo $data['authors'] ?></a>)</strong>
            </h1>
            <span></span>
            <img src="https://images.unsplash.com/photo-1611117775350-ac3950990985?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="" style="width: 700px" />
            <br /><br />
            <p>
              <?= $data['konten1'] ?>
            </p>
            <p>
              <?= $data['konten2'] ?>
            </p>
            <p>
              <?= $data['konten3'] ?>
            </p>
            <p>
              <?= $data['konten4'] ?>
            </p>
            <p>
              <?= $data['konten5'] ?>
            </p>
            <p>
              <?= $data['konten6'] ?>
            </p>
            <p>
              <?= $data['konten7'] ?>
            </p>
            <p>
              <?= $data['konten8'] ?>
            </p>
          </div>
          <div class="col-4 justify-content-center"></div>
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