<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
      input{
        {
  margin-top: -1px;
  vertical-align: middle;
}
      }
    </style>
</head>
<body>       
        <div class="container-fluid bg-light  p-5  shadow-sm">
            <div class="row">
              <div class="col-8">
                <form method="POST" action="hasil_belanja.php" class="form-horizontal ">
                  <h1 class="text-secondary">Belanja Online</h1>
                  <hr color="grey">
                  <div class="form-group row">
                    <label for="nama__customer" class="col-sm-4 col-form-label"><b>Nama Customer</b></label>
                    <div class="col-sm-8">
                      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                  </div>
                <div class="form-group row">
                  <label class="col-4"><b>Pilih Produk</b></label> 
                   <div class="col-8">
                   <div class="custom-control custom-radio custom-control-inline">
                   <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                   <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                   <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                   <label for="produk_1" class="custom-control-label">Kulkas</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                   <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                   <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
              </div>
            </div>
        </div>
                  <div class="form-group row">
                 
                    <label for="jumlah__" class="col-sm-4 col-form-label"><b>Jumlah</b></label>
                    <div class="col-sm-5">
                      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                  </div>
                  <button href="" type="submit" class="btn btn-success pl-3 pr-3" name="proses">Kirim</button>
                </form>
              </div>
              <div class="col-4 " >
                  <ul class="p-1 bg-white" style="list-style-type:none;border:1px solid #c4c4c4;">
                    <li class="bg-primary p-2 text-white">Daftar Harga</li>
                    <li class="p-2">TV : 4.200.000</li>
                    <li class="p-2 bg-light">Kulkas : 3.100.000</li>
                    <li class="p-2">Mesin Cuci : 3.800.000</li>
                    <li class="bg-primary p-2 text-white">Harga Dapat Berubah Setiap Saat</li>
                  </ul>
              </div>
            
            </div> 
        </div> 
</body>
</html>