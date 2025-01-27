@php
use App\Models\Barang;
$barang=Barang::all();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VStore | Pembayaran</title>
    <link rel="icon" href="img/logovstore.png" sizes="32x32" type="image/png">
    <link rel="icon" href="img/logovstore.png" sizes="16x16" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <h1 class="display-1" style="text-align: center;">Pembayaran</h1>
    <form class="row g-3" action="{{ url('/form-pembayaran') }}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <label for="barang" class="form-label">Barang</label>
                    <select name="barang" class="form-control">
                        <option>Pilih barang </option>
                        @foreach ($barang as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
            </div>
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Phone Number</label>
            <input type="text" name="no_hp" class="form-control" id="inputEmail4">
          </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" name="alamat" class="form-control" id="inputAddress">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" name="kota" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" name="negara" class="form-select">
            <option selected>Choose...</option>
            <option value="indonesia">Indonesia</option>
            <option value="england">England</option>
            <option value="japan">Japan</option>
            <option value="usa">USA</option>
          </select>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Ekspedisi</label>
            <select id="inputState" name="kurir" class="form-select">
              <option selected>Choose...</option>
              <option value="JNE">JNE</option>
              <option value="TIKI">TIKI</option>
              <option value="DHL">DHL</option>
              <option value="Ninja">Ninja</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Pembayaran</label>
            <select id="inputState" name="pembayaran" class="form-select">
              <option selected>Choose...</option>
              <option value="BNI">BNI</option>
              <option value="BRI">BRI</option>
              <option value="Paypal">Paypal</option>
              <option value="BCA">BCA</option>
            </select>
          </div>
        <div class="col-12">
          <button type="sumbit" class="btn btn-outline-success">bayar</button>
        </div>
        <div style="text-align: right;">
          <a type="button" class="btn btn-outline-dark" href="{{ url('/home') }}">Back</a>
        </div>

      </form>

</html>
