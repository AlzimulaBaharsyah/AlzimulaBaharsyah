<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logovstore.png">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <title>VStore | Pembayaran</title>
</head>
<body>
    <h1 class="display-1" style="text-align: center; font-size: 6vw;">Pembayaran</h1>
    <img src="{{ url('/larave/public/img/pembayaran.jpeg') }}" alt="" style="display: block; margin-left: auto; margin-right: auto; width: 25%; height: auto;">
    <br>
    <div style="border: solid 1px #aaa; background: rgb(255, 255, 255); padding: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; -webkit-border-radius: 15px; border-radius: 15px; margin: 0; text-align: justify; line-height: 23px; color: black; font-size: 18px">
        <p>Cara Bayar:</p>
        <p>1.Scan Barcode dan kirim Nominal yang dibayar</p>
        <p>2.atau tunjukan Barcode tersebut kegerai yang disediakan </p>
        <p>2.1.lalu bayar dengan uang cash</p>
        <p>Terimakasih Telah menggunakan layanan kami,
            kami tunggu di belanjaan anda berikutnya😊</p>
    </div><br>
    <div style="text-align: center;">
    <a type="button" class="btn btn-outline-success" href="{{ url('/home')}}">Home</a><br>
    </div>
    <script>
    function darkMode() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
    </script>
</body>
</html>
