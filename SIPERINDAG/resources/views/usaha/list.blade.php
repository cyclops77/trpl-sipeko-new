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
   <form method="POST" action="{{url('/acc-pemohon')}}">
          {{csrf_field()}}
          <div class="row">
            <table class="table table-hovered">
              <thead>
                <th>#</th>
                <th>ID</th>
                <th>Nama Usaha</th>
                <th>Aset</th>
                <th>Jenis Usaha</th>
                <th>Golongan</th>
              </thead>
              <tbody>
                @foreach($pemohon as $p)
                <tr>
                  <td>
                    <input type="checkbox" value="{{$p->id}}" name="pemohon[]">
                  </td>
                  <td>{{$p->wirausaha_id}}</td>
                  <td>{{$p->nama_usaha}}</td>
                  <td>{{$p->aset}}</td>
                  <td>{{$p->jenis_usaha}}</td>
                  <td>{{$p->golongan}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
  </div>
</body>
</html>