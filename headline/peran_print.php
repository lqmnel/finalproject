<?php
    ob_start();
    include "../connection.php";
    $query = mysqli_query($conn, 'SELECT * FROM headlines WHERE id = 1');
    while ($data = mysqli_fetch_array($query)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peran Teknologi Informasi Terhadap Pelayanan Publik</title>
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
            <img src="https://images.unsplash.com/photo-1494412685616-a5d310fbb07d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" style="width: 700px" />
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