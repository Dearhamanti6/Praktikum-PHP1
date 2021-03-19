<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>

		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: sans-serif;
		}

		body {
			background-color: #166086;
		}

		input[type=submit] {
			cursor: pointer;
			width: 15%;
			padding: 12px 15px;
			border-radius: 10px;
			border:none;
			background-color: #199473;
			color: #fff;
		*/}

		input[type=submit]:hover {	
			background-color: #1D6F98;
			color: #FFF;
		}
	</style>
<body>

               
  <div class="container p-5 mt-5">    
    <form class=" p-4 shadow" style="background-color: #e3f8ff;" method="GET" action="array_siswa.php">
    <div class="text-left">
        <h2 class="mb-3 text-black text-mg text-center"><b>Form Nilai Siswa</b></h2>
        <hr>
      </div>
        <div class="form-group row">
          <label for="namalengkap" class="col-sm-3 col-form-label"><b>Nama Lengkap</b></label>
          <div class="col-sm-5">
            <input type="text" placeholder="Nama Lengkap" class="form-control" name="nama__lengkap" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="nim" class="col-sm-3 col-form-label"><b>NIM</b></label>
          <div class="col-sm-5">
            <input type="text" placeholder="NIM" class="form-control" name="nim__" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="matakuliah" class="col-sm-3 col-form-label"><b>Mata Kuliah</b></label>
          <div class="col-sm-5">
            <select name="mata__kuliah" class="form-control">
              <option value="DDP">Dasar-Dasar Pemrograman</option>
              <option value="PWL">Pemrograman Web</option>
              <option value="BD">Basis Data I</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="nilaiuts" class="col-sm-3 col-form-label"><b>Nilai UTS</b></label>
          <div class="col-sm-3">
            <input type="text" placeholder="Nilai UTS" class="form-control" name="nilai__uts" required>
          </div>
        </div>
        
        <div class="form-group row">
            <label for="nilaiuas" class="col-sm-3 col-form-label"><b>Nilai UAS</b></label>
            <div class="col-sm-3">
              <input type="text"  placeholder="Nilai UAS" class="form-control " name="nilai__uas" required>
            </div>
        </div>
        <div class="form-group row">
          <label for="nilaitugas" class="col-sm-3 col-form-label"><b>Nilai Tugas/Praktikum</b></label>
          <div class="col-sm-3">
            <input type="text"  placeholder="Nilai Tugas" class="form-control" name="nilai__tugas" required>
          </div>
        </div>
        <br>
        <div class="text-center">
          <input type="submit" value="Simpan" name="proses__"/>
        </div>
    </form>
  </div>
  
</body>
</html>