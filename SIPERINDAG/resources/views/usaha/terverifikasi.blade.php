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
   
          <div class="row">
            <table class="table table-hovered">
              <thead>
                <th>ID</th>
                <th>Nama Usaha</th>
                <th>Aset</th>
                <th>Jenis Usaha</th>
                <th>Golongan</th>
              </thead>
              <tbody>
                @foreach($terverifikasi as $p)
                <tr>
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

</div>
  </div>
</body>
</html>