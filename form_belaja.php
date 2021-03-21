<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Belanja Online</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <style>
    body {
      background-color: #ffd9b3;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header  text-black"> Form Belanja Online</div>
          <div class="card-body">
            <Form action="proses.php" method="post">

<!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Customer</label>  
      <div class="col-md-4">
      <input id="name" name="name" type="text" placeholder="Nama Pelanggan" class="form-control input-md">
      
      </div>
    </div>

<!-- Multiple Radios (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="produk">Produk Pilihan</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="produk-0">
          <input type="radio" name="produk" id="produk-0" value="tv" checked="checked">
          TV
        </label> 
        <label class="radio-inline" for="produk-1">
          <input type="radio" name="produk" id="produk-1" value="kulkas">
          Kulkas
        </label> 
        <label class="radio-inline" for="produk-2">
          <input type="radio" name="produk" id="produk-2" value="Mesin Cuci">
          Mesin Cuci
        </label> 
        <label class="radio-inline" for="produk-3">
          <input type="radio" name="produk" id="produk-3" value="kipas">
          Kipas
        </label>
      </div>
    </div>

<!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="jml">Banyak Pembelian</label>  
      <div class="col-md-2">
      <input id="jml" name="jml" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>

<!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="proses"></label>
      <div class="col-md-4">
        <button id="proses" name="proses" class="btn btn-success">Simpan</button>
      </div>
    </div>
</form>

</div>
<div class="col-sm-4">
    <div class="container2">
    <ul class="list-group">
        <li class="list-group-item active" aria-current="true">Daftar Harga</li>
        <li class="list-group-item">TV : Rp.2.200.000</li>
        <li class="list-group-item">Kulkas : Rp. 2.500.000</li>
        <li class="list-group-item">Mesin Cuci : Rp. 3.800.000</li>
        <li class="list-group-item">Kipas : Rp. 1.800.000</li>
        <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
    </ul>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>
