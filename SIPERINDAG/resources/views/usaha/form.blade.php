<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">
	 <div class="col-md-12">

    @if(session('sukses'))
    <div class="alert alert-success" >
      {{session('sukses')}}
    </div>
    @endif
    @if(session('gagal'))
    <div class="alert alert-success" >
      {{session('gagal')}}
    </div>
    @endif

<br>
   <form method="POST" action="{{url('/send/izin-perusahaan')}}">
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Usaha</label>
    <input type="text" class="form-control" placeholder="Masukkan Nama Usaha" name="nama_usaha">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Aset</label>
    <input type="number" class="form-control" placeholder="Masukkan aset" name="aset">
  </div>		
  <div class="form-group">
    <label for="exampleInputEmail1">Jenis Usaha</label>
   <select class="form-control mb-md" name="usaha">
        <option selected disabled>Pilih Jenis Usaha</option>
        <option value="kuliner">Kuliner</option>
        <option value="percetakan">Percetakan</option>
        <option value="konveksi">Konveksi</option>
        <option value="kecantikan">Kecantikan</option>
        <option value="fashion">Fashion</option>
    </select>
  </div>
  
<button type="submit" class="btn btn-primary">
  Simpan
</button>
</div>
</div>
</form>
</div>
  </div>
</body>
</html>