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
   <form method="POST" action="{{url('/send/register-disper')}}">
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama_lengkap">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">N I P</label>
    <input type="number" class="form-control" placeholder="Masukkan NIP" name="nip">
  </div>		
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" placeholder="Masukkan Alamat" name="email">
  </div>
  
<button type="submit" class="btn btn-primary">
  Simpan
</button>
</div>
</div>
</form>
</div>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript">
    $('#fakultas').on('change',function(e){
        console.log(e);
        var id_fakultas = e.target.value;
        $.get('/json-prodi?fakultas_id=' + id_fakultas, function(data){
          $('#prodi').empty();
          $('#prodi').append('<option value="0" selected="true" disabled="true">Pilih Prodi Anda . . . </option>')
        $.each(data, function(index, prodiObj){
          $('#prodi').append('<option value="'+ prodiObj.id +'">'+prodiObj.nama+'</option>')  
        })
        });
    });



  </script>
</body>
</html>