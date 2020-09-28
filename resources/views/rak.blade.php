<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Informasi Perpustakaan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Master Rak</h2>
  <a href="{{url('input_rak')}}"><button class="btn btn-primary mb-2 mt-2">+ Tambah Rak</button></a>         
  <table class="table">
    <thead>
      <tr>
        <th>ID Rak</th>
        <th>Nama Rak</th>
        <th>Keterangan</th>
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody>
      @foreach($rakdata as $val)
      <tr>
        <td>{{ $val->id_rak }}</td>
        <td>{{ $val->nama_rak }}</td>
        <td>{{ $val->keterangan }}</td>
        <td>
            <a href="{{url('edit_rak/'.$val->id_rak)}}"><button class="btn btn-warning p-2">Edit</button></a>
            <a href="{{url('delete_rak/'.$val->id_rak)}}"><button class="btn btn-danger p-2">Delete</button></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
