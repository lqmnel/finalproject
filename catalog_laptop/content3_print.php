<?php
    ob_start();
    include "../connection.php";
    $query = mysqli_query($conn, 'SELECT * FROM catalogs WHERE id = 3');
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
              by: <?php echo $data['authors'] ?></span
            >
            <br />
            <br />
            <img src="https://images.unsplash.com/photo-1630794180018-433d915c34ac?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" alt="" style="width: 700px" />
            <br />
            <br />
            <p>
              <?php echo $data['konten_catalog'] ?>
            </p>
            <img
              src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVEhUSFRYVGBgSGBgRGBgSGBIYEREYGBgZGRgYGBgcIS4lHB4rHxgYJjgmLS8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHjQrJCs0NDQ0NDQ0NDQ0NDE0NDU0NDQ0NDQ0NDQ0NDE0MTQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIALUBFgMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAQIDBAUGBwj/xAA7EAACAQIDBQUGBAUFAQEAAAABAgADEQQSIQUxQVFhInGBkaEGEzJS0fAUQrHBBxVikqIjstLh8cJE/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAECAwQF/8QAJREAAgIBBAIDAAMBAAAAAAAAAAECERIDITFRE0EEImFxofEy/9oADAMBAAIRAxEAPwDimkceTC0AQSRZHaSJAJFElWMQSUCAPQyVTIRJFMAnUyRTIUkywCem0t03lJY8PaVA1UqS5SeYlKtL+HrS0DSMhqGKKkiqNCBG7SpVeSV3mdWq7+c6xRlklWppKL1Ltx5xa9TcJQxVbKLAzoc2LjcVwA0mYlTtHpGvUu1uclwmGLOR+XnICaniSwOmkkw9ZlOh8IuMZUGVZRpMSTvtKQ36GPb/AMmrhscTuPhOSR7HQ8ZpYd/OWkzN0dZSxx5y/QxIM5KniNbTSw2JtxnOUTSkdIpiMZkrjoNi5zxZuzVDQvMtMZLdCteRxo0mWIxjHxjCZNCAwjDCUh5YWiZ5WdusZ76ZopdBkqzPp4iWUqQC8hkgMrI8mVoBLHKZFmj0MAs05YQStTlpDAHSN2k2YSvUE0gAqWlzCV5lEGWsOZ0SJRvJWitUvM+k8ZjMaqKbEXjEljNpY4JoNTylPDuSLt8R17pj1SzPnZtBrJaGKAuxO6bWxmTsu4lgFzHfMWtVu3fIsTtAuxOthuEiwLZ2IufCLszRbo4YvU/pl/EYtKQVV8ecp1scE7K8tTI8Eyswd7a85f4Ixz1g5ueekeK5IIAGnKQ4hFzty4Wjwot2ZQJSotfPuElw9TtXv0lQV/ykm3SR4gBUuDqZLJR0FCsDxkwxDIdTcHzE53AueBl9apvrp3iaTtEapnT4KqH0B15S6aBVSzGwGs5jCA5xUUkW9ZLtDbDspptYLuJ+aYkmaTRKm0gznLfKOPOXam1iq2TfzPCcouOVQQN/SN/mNtG1/SX6+yLL0elbD2gKtPUjMuhmkyzyvZW0ylTOG0J1HSdJiNvuxuhsLbpylp77HWMttzrckScZW2/WCCwvrvhJhIuUTgWqxvvJBmiXkNFtaskXESiDHAxsDUTFSwmKmMrSZHMUga/4m8lp1yJkJUlpK0mINejWMtIzEaTNw1e01qNZdLSNUUjYON8BUNpcYgiMWmsqZUPwmHzSycNaOwzqguZz2O9q0c5VDgXtchRccwLzSe5G0i3j9pKl1WYXvDVa2oF9TeV8bi0dgQWHh/3J8BiqSb2JPVW/adDm37LWIp5U3G24SriCUS/Ma9Jo1NsUWQgnXgMtT9bTExtcOOyDDaMopVK2lhpLVCoUp2XQtvMr4an2gWGg5zTr0kdBZ1FtbEiRGnRnpbUNck6D6x9UkEKp3CI1Q6ALu0vY6yHXNexksUaWFcv2eIjnLKCCDfhaU8MGDi3jLVXEHORpNp7GGtyI4dkA45te6TLQLlRaRMWa2W+ulpqYPDlVJfS2t4SI3RYwez8rBtCBLlcKBdgLCZ77QVQDuEycXtIu2UE5ZvJIxi2zYxO0Bl7FuWkz8c7MLvoBr1MyziSG03co7E4rMNTOblZtRorrXte3HziPUvpGIseq6E7pizrRawrZNd5PLfNaji2VbtpfcDvmRg64A1t3ybEVmca203TadI5NWzTw21QbgjdCc8KxEJMjWBXtFAkuSGWcMj0YjAseFiwlstABHKICPURYxHLJqcjUSdZbGJYpmXKNS0oq8lFSWxijUFY2gK9pmvVsLkyDD4nO2psBNIxJUa9asWXQy37J7OWpSa6q2Wo66gHkf3mRiK/ZsLWnafwqVXTEId4qhx1DIv8AxM76MlGV/h59SLlEhxPs0p1FNP7V+krU9gpqrUUJ36ov0nrdLZgIlXE7DLMCAOz5zv59NvdEhCXs8wp+z9Emxpoveot5xNq7CwygZKdiPi3geFjPTq2wsw5WNhpumXtLYTBSpKuOdrMOhnLU1oWqSo92hpQlFpvc8lfZyA/D6t9ZvbP9mKL08+Rtd3bqfWPxuDyOQZubL21So0fdlGZwSRuy/WeiKi42kmePWi4So5bE+z9FGyqGv3mV22Cv9XmPpOupKlVs/Em9uU2k2SrICLEXtcb5qWnBcpHHyHmjbCW17v8A4/SMOxRzb/H6T0Btk3e1tBG1NkWvpL4tN+jm9Zo88bZVtxPlI3wbD8x9frO9qbHPKUK2yCOE0vjabOT+S0ec7VupC+MoAmdD7X4MpUS/5lv6n6Cc+J8zWjjNxR9DSllBMCY0GOUAnWNM5WdKJadQDheMd8xjIARYomzKOsR3JkdorHSLJQkILCUhOVjcsfC042euhmWKFj7RbRYxGgR6xI5YsUOEeI1RJ0SMhQIssothcyFqiqLmUq+LLaDQfrKpNkdRHYuvnOW9gPWNoJ6cZWJi5junRM5S3LDubWvpO+/hLtinQfE06lv9RaboSCRmUupGnO416Tzq86D2Oos+IKrqTTZv7WX/AJQpJO5cEUXLZH0JS2gWTMBpYEMgzqQeYU5hLmDxOcE3Q2+RifMW0nneyqVamwKlgd2psJunFVcwcA5vzZSO0OttSZW4PhnTwTR2FvpM/EUWuS3w2tpxvzEyqftGFsHRiw0GXd434zUwm16dQ2GZTycWmaaIlOD4OZ21sVcx7J7xu85hnYRO4GdhtrbaUQwIDMRmFmU5FHxM+tl6DibCcEntM71A6u98wcJcAFTbKmUaHs38+Nrn06UpJE1dSMl9luaVPZxUWK262Os3dhUyGCtcjcot6mQUPa/CI4p1DZmBDFcrolrkhypI4eF5bxG26Cg1StkUXV2qKoY6Zez13i1ydNDedZasmnFo8bhC7Rs1MGo7RtfoCfrKzYdNWLA8bWJt4CYh/iBhCCAyqV4t7xgRbeLLcnpvhhNqvi0z03UJcqGTN2SBezrYFDx1A3jfe85QyfLMyjFf4aFYWHwE8bkBVtMTG4zJfsLrzFzNelgnNEuap00FlJDd97Eb+MzX2bUdsgIbhfK/Z77Cd4S53JjpKnTs8v8Ably4RjwLDdblOOnpv8QtklML7z5XUGyuBYhuJFt4E8ynl195tno0qrYIQgZyOgCOEaI5ZAES0dEOkoEhEvCAXDTi5DLJQxhUzy2z0WiIJDLJLGOVCYsWRBI9VElWkY5wFFyZbFjFEhr4sLoNTKmJxZOg0HrK4m1Hsjl0SvULG5MaICLNI5sdFEQxyibJQ5ROt/hrWRdoJ7wMVdKigIrs2YhWGi6/lM5O82/Y7He4x2Hq78rFTfdZ0dP/AKmJq4s1H/pHv2Hq0GtlFQX+dKw88wltsGh6dwM5+l7S5gALL3W/eW22xfgl/mIUkzxJS9o9fj1PT/svVNm09TmI55hp43nI+0u3FoH3VEhnI7T2BVOVgPiPfoORmrjNtW+Iggi2gGvQ6TCq7Lw+IqBgjBm3inZVJ5kAb5104ybtIv2ivtI5CpnfMxdTcH4qlMEgnMRYsDqTc+MyGRgSAwBO+zqFOvO9jrOs9pfZF8Oc4y5C1ifiNPMLrm479L7pxZpksQRuuDbcCN331nvSlR4ZyimC0zuFid1lN/USauK9XIGa4pqKaCo9NQii2iBmFhu3eMcuzapAamhdWIXsK2YE30Yc+yfKXcb7MV6aKHBpVDe61NEcX7ORuJPjKoSexyepBblJdjYgkjKmlr/62GuL7tM/SWaAxuEDOjpTzAZia2EsbbiAXNzqRoL62mQmArZ8gQ5tbZbHdvIN/WaCezuKIC3AYnRKjfEPmuLgiFCXpMOceG0Vz7RYsf8A6a+/eKj2PkdRIK+1qzEFqr33g5iCOtxxk+N2Li6RzNTZhuugFQeIW9vESpjKNSkCtWky9WQAagHRt19RxvMvNc2VOD4odX2jXemab1HZGFirOSpI1BIvqb8ZiiX6WIXQBVF9DoLnxlG0y23yXb0JFtHBYqrIaoblgI5hGQKHGMJjjBReANhHhDwBPcDCAbJMaIGE87Z0HgCLcSFqgEq1K5MCi49dVmbjMVm7pHUeV2M0kOAJgDGxRNmLJFMcJGojg0GiURRJMJTVzZmyzSOz0G+oPSVEM5Vk2G0qIeTp/uUfvNCls5G3OPSPr4MUQtXNf3bo/wDa4P7TRGei7H2JVcBzZEvYlyFHM79Z0i7KViEpFmB+J2Uqo7mO/wABOjpYKnmzixJJYFu1YnlePTDKpzs7Mbk7yF1/pE1t6Q88n7KNHYiItyiudAQ1yLcSAeM1aOHRBZVVQPlAEbUxC20I10sePOZe1MzLdGIC6CxsL8R5SKLfOxjNzlS3K209pUgfenKylWp66NyNgdDvnmO0MHRqOWRyl+zlAGWw3Wmj7V7Uy/6Zscupynsg21tOFr48k3Gk9WnVbGdVKO0jt9mbYXDBVQi6gDNbXQWJ8ZqVvbYtfLwN1zgEddO/9J5b+MPEx/4oniZ6FGL5PFOe/wBUezbI28KyZnSkxOhsouTzPGJW2lRJKLSAPHKSLa8L6CeZ4bbDotrkEa3BGvfJH28za5yD4zXihZwerP0drUxqoT2L33ai/jM7FbTTXs26HdOTq7YJGuviZTq7TJ4zeMOywnPhpG3jsSjAgohve11UkG28ab5wbJqe8zdbaVxlIHfxmNicQQcoA53754vlJJJnt+O92R5ekLRoqnnEasZ4sj10KxELiR744Uu+S2UcKd92sHpEb9I+kjDdHvmJ7XhNeiUXNnYQNTJvrmsO4DX9RCVExTILKbCE6pxrg4SUr5JcxheMfEjlK1TENeeNWz2bFvOI16qgTPZiecaQ3I+Rm6MCu8aYvu2+U+Ri+6b5TNEGRwjhQbl6j6x64V+Xqv1gEaiOAkwwb8h5xwwD/wBP+X0kstMhtJAJMuzn5r/l9JMuy3+ZfWLRaZAmm6OeozKwLE3BFiTylobJb5x/b/3FOzCozZ721tl328YtDFntWD9s8L7qmWxFAEohINSmGByi4IvoZS2l7cYa1lr0781ZT+88ICHkfIxwQ8j5T1LVrejx+L9PUj7bJqTWW99PiJt4Sjifb1+0ErFQ2hIV7/pPPVpMdynnuOkeKD/KfKJazkqpG4xweSNfH7VDnRmbjchtfOUDXkAot8p5wFNuX6WmVqNcFlFzdtFypXQjQEH0jBWkAQ8o5UPL779035pM5+FImNUmCuYwIeUcEblGc2Txx6H3POGS/GNAP3+0Mx6RnMYRHCj1Mq4tDmFgToNbHrLQJ01HX/ySrRJ3/t+0zJuSpmo1FmaKR5HyMX3J5Hymn+F6xPwp+7TngdM0UkokfYjgjc/0lv8ACnnA4VoxLkVwDu/cRCG5yc4d+XqJG623iKGRSrkhteQ3QjMWCWuOVoQKLH3xhb71heF/vWcDuLaFunpGkwBigPtAHujQfvSOBigSA9fUSRfD1kIkqXii2SqevoZMn3vkKAyZAfu0lFskXx9JYQdPWRIOo9JYQdYoWOCdPUxShtu39TJUTv8A8pKqDr6zSQZz2IwdrZUqjLutlYcuYMrVcZVF7q1iAtyiqwC/DY2Nj3b+N51Rpjl+ka1Mch6TaSZxlHc5eltgD4l9FNvQS7S2xTOhCjwYfpNOpg0O9V+/CUquyKR1y27j/wBTVPscCGvTfcy68yp/WQYqlkVWJ0ckC2p7Nif9wkdXYa/lJErHYr/MCB0MJNEbHnEraxzW38OO/jEOLTr4kRo2K3M+Cx/8l6t5ATacujDa9gMeg/KP7h9IjbRX5V8z9Iv8nXix81kqbJQde8gy3IzUSqdoryXyaRnHjp5GaH8tQcB/l9I4YCn8o8jH2fslxXozP5h92EcdqvzPks01wiD8voPrJBQT5R5CMZdkzj0Yp2m/M+Y+kT8e5+bzM3FpLy9R9IopjkIwfYzXRgHEVD83m0Q+8PBvX9zN/J0Hr9YMO7yEmIzMFaLnereAH7mS0sMOIbxygek18p+wPpEKnr6xSLk2UjTHyjxvCWih/wDTCNhbM28Lx2UwCzz7HqEhHZYoWANEesAsUKIA9RJVAkK5eY848VUHEQCdbdJMo+7SsuKTmJIuNTn6S1+Ftdlun96Syjd8z12inWSLtRflMU+iZLs01b7vJRf7JmQdr8k9Yh2weCiaUWRyXZs5e6JlPTymKdrvwCiMba1TgQPCaojkjbydfSIU6n0nPttKofzn0jGxrn8585TLaN9h1Mie3P1mEcSTxPnGtWizJss68x5yI1E5iZXvYGrLkSjTasnOMbFKOMyzW6yNq0uTJijWOLHWMOMHIzKNeMatJmy4o1vxnT1gcYeQmQa8T35kyYxRq/jG6Rfxbc/SZPv+sX3/AFjJ9jFdGq+KPP0EjGKPMzMNfrG++6mSy0ab4o8z5xhxEzTV74nvekWU0jX6wmZ7yElgnOKPSNOKaV7wvJSLkyc4hucQ1W5mQ3heKRLZLnPMwzHnIrxbygkBjgZDeLmlITqY4PK+YRC8WC2tSKKglPPD3hiwXhWi++lD3hh7w84sUXveRDUlEuecS5ksUXfexprdZThFlLXv+sT346ytCLBYNcdYhr9JBCLBKaxjTUMZCQDi5jbwhACEIQAhCEAIQhACEIQAhCEAIQhACEIQAhCEAIQhACEIQAhCEAIQhACEIQAhCEAIQhACEIQAhCEAIQhACEIQAhCEAIQhACEIQAhCEA//2Q=="
              alt=""
              style="width: 600px"
            />
            <br /><br />
            <p>
              <?php echo $data['konten2'] ?>
            </p>
            <img src="https://media.suara.com/pictures/653x366/2022/06/20/96896-asus-rog-zephyrus-g14.jpg" alt="" style="width: 600px" />
            <br /><br />
            <p>
              <?php echo $data['konten3'] ?>
            </p>
            <img
              src="data:image/jpeg;base64,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"
              alt=""
              style="width: 600px"
            />
            <br /><br />
            <p>
              <?php echo $data['konten4'] ?>
            </p>
            <img src="https://media.suara.com/pictures/653x366/2022/09/28/33445-lenovo-legion-5-pro.jpg" alt="" style="width: 600px" />
            <br /><br />
            <p>
              <?php echo $data['konten5'] ?>
            </p>
            <img src="https://media.suara.com/pictures/653x366/2022/09/28/28338-acer-predator-helios-300.jpg" alt="" style="width: 600px" />
            <br /><br />
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